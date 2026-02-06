<?php
// Load PHPMailer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight request
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

// ============================================
// EMAIL CONFIGURATION - UPDATE THESE VALUES
// ============================================
$gmailEmail = 'fahad.glideups@gmail.com';  // Your Gmail address
$gmailAppPassword = 'saaw poll cakj vizc';    // Your Gmail App Password (16 characters, no spaces)
$receiverEmail = 'fahad.glideups@gmail.com'; // Where to receive form submissions
// ============================================

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$project = isset($_POST['project']) ? trim($_POST['project']) : '';

// Validate required fields
if (empty($name) || empty($email) || empty($project)) {
    echo json_encode(['success' => false, 'message' => 'Please fill in all required fields']);
    exit();
}

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit();
}

// Sanitize inputs
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$emailSanitized = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$project = htmlspecialchars($project, ENT_QUOTES, 'UTF-8');

// Create HTML email body for admin
$htmlBody = '
<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #1DBF73; color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 10px 10px; }
        .field { margin-bottom: 20px; }
        .label { font-weight: bold; color: #1DBF73; margin-bottom: 5px; }
        .value { background: white; padding: 10px; border-radius: 5px; border-left: 3px solid #1DBF73; }
        .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Quote Request</h2>
        </div>
        <div class="content">
            <div class="field">
                <div class="label">Full Name</div>
                <div class="value">' . $name . '</div>
            </div>
            <div class="field">
                <div class="label">Email Address</div>
                <div class="value"><a href="mailto:' . $emailSanitized . '">' . $emailSanitized . '</a></div>
            </div>
            <div class="field">
                <div class="label">Phone Number</div>
                <div class="value">' . ($phone ?: 'Not provided') . '</div>
            </div>
            <div class="field">
                <div class="label">Project Details</div>
                <div class="value">' . nl2br($project) . '</div>
            </div>
        </div>
        <div class="footer">
            <p>This message was sent from the GlideUps website contact form.</p>
        </div>
    </div>
</body>
</html>
';

// Send email to admin using PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $gmailEmail;
    $mail->Password = $gmailAppPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipients
    $mail->setFrom($gmailEmail, 'GlideUps Website');
    $mail->addAddress($receiverEmail);
    $mail->addReplyTo($email, $name);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Quote Request from ' . $name;
    $mail->Body = $htmlBody;
    $mail->AltBody = "New Quote Request\n\nName: $name\nEmail: $email\nPhone: " . ($phone ?: 'Not provided') . "\nProject: $project";

    $mail->send();

    // Send confirmation email to user
    $userMail = new PHPMailer(true);
    $userMail->isSMTP();
    $userMail->Host = 'smtp.gmail.com';
    $userMail->SMTPAuth = true;
    $userMail->Username = $gmailEmail;
    $userMail->Password = $gmailAppPassword;
    $userMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $userMail->Port = 587;

    $userMail->setFrom($gmailEmail, 'GlideUps');
    $userMail->addAddress($email, $name);

    $userBody = '
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #1DBF73; color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
            .content { background: #f9f9f9; padding: 30px; border-radius: 0 0 10px 10px; }
            .button { display: inline-block; background: #1DBF73; color: white; padding: 12px 30px; text-decoration: none; border-radius: 25px; margin-top: 20px; }
            .footer { text-align: center; margin-top: 20px; color: #666; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Thank You, ' . $name . '!</h2>
            </div>
            <div class="content">
                <p>We have received your quote request and our team is excited to learn more about your project!</p>
                <p>One of our experts will review your requirements and get back to you within <strong>2 business hours</strong>.</p>
                <p>In the meantime, feel free to explore our portfolio and see the amazing projects we have delivered.</p>
                <center><a href="https://glideups.com" class="button" style="color: white;">Visit Our Website</a></center>
            </div>
            <div class="footer">
                <p>GlideUps - Building Digital Excellence</p>
                <p>This is an automated response. Please do not reply to this email.</p>
            </div>
        </div>
    </body>
    </html>
    ';

    $userMail->isHTML(true);
    $userMail->Subject = 'Thank you for contacting GlideUps!';
    $userMail->Body = $userBody;
    $userMail->AltBody = "Thank you $name! We have received your quote request and will get back to you within 2 business hours.";

    $userMail->send();

    echo json_encode(['success' => true, 'message' => 'Thank you! Your message has been sent successfully.']);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Failed to send message. Error: ' . $mail->ErrorInfo]);
}
?>
