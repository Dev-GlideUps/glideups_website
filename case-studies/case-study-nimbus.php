<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nimbus Case Study - GlideUps</title>

    <!-- Base URL for relative paths -->
    <base href="../">

    <!-- Google Fonts - Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#1dbf73',
                            dark: '#17a560',
                            light: '#2dd492',
                        },
                        dark: {
                            DEFAULT: '#141414',
                            light: '#1a1a1a',
                        },
                        gray: {
                            DEFAULT: '#707070',
                            light: '#f5f5f5',
                        },
                        accent: {
                            DEFAULT: '#E63946',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0) translateX(0)' },
                            '50%': { transform: 'translateY(-20px) translateX(20px)' },
                        },
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Case Study Detail Page Custom Styles - Nimbus Red Theme */
        .text-accent {
            color: #E63946;
        }
        .bg-accent {
            background-color: #E63946;
        }
        .text-gray-light {
            color: #f5f5f5;
        }
    </style>
</head>
<body class="font-sans text-dark overflow-x-hidden">

    <!-- Navigation Bar -->
    <?php include '../components/navbar.html'; ?>

    <!-- Case Study Hero Section -->
    <?php include '../components/case-study-detail/nimbus/hero.html'; ?>

    <!-- Project Overview Section -->
    <?php include '../components/case-study-detail/nimbus/overview.html'; ?>

    <!-- Problems & Solutions Section -->
    <?php include '../components/case-study-detail/nimbus/problems.html'; ?>

    <!-- Process Section -->
    <?php include '../components/case-study-detail/nimbus/process.html'; ?>

    <!-- Client Testimonial Section -->
    <?php include '../components/case-study-detail/nimbus/testimonial.html'; ?>

    <!-- Results Section -->
    <?php include '../components/case-study-detail/nimbus/results.html'; ?>

    <!-- Footer -->
    <?php include '../components/footer.html'; ?>

    <!-- Custom JS -->
    <script src="js/main.js"></script>

</body>
</html>
