<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Privacy Policy | GlideUps</title>
    <meta name="title" content="Privacy Policy | GlideUps">
    <meta name="description" content="Read the GlideUps Privacy Policy to learn what information we collect, how we use and protect it, and the choices you have about your personal data.">
    <meta name="author" content="GlideUps">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://glideups.com/privacy-policy">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://glideups.com/privacy-policy">
    <meta property="og:title" content="Privacy Policy | GlideUps">
    <meta property="og:description" content="How GlideUps collects, uses and protects your personal information.">
    <meta property="og:site_name" content="GlideUps">
    <meta property="og:locale" content="en_US">

    <meta name="theme-color" content="#1dbf73">
    <link rel="icon" type="image/svg+xml" href="assets/logo-icon.svg">
    <link rel="apple-touch-icon" href="assets/logo-icon.svg">

    <!-- Breadcrumb Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://glideups.com" },
            { "@type": "ListItem", "position": 2, "name": "Privacy Policy", "item": "https://glideups.com/privacy-policy" }
        ]
    }
    </script>

    <!-- Google Fonts - Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { DEFAULT: '#1dbf73', dark: '#17a560', light: '#2dd492' },
                        dark: { DEFAULT: '#141414', light: '#1a1a1a' },
                        gray: { DEFAULT: '#707070', light: '#F5F5F5' }
                    },
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .policy-content h2 { font-size: 1.5rem; font-weight: 700; color: #141414; margin-top: 2.5rem; margin-bottom: 1rem; scroll-margin-top: 110px; }
        .policy-content h3 { font-size: 1.125rem; font-weight: 600; color: #141414; margin-top: 1.5rem; margin-bottom: .5rem; }
        .policy-content p { color: #555; line-height: 1.8; margin-bottom: 1rem; }
        .policy-content ul { list-style: disc; padding-left: 1.25rem; margin-bottom: 1rem; color: #555; line-height: 1.8; }
        .policy-content li { margin-bottom: .35rem; }
        .policy-content a { color: #1dbf73; font-weight: 500; }
        .policy-content a:hover { text-decoration: underline; }
        .policy-content h2:first-child { margin-top: 0; }
    </style>
</head>
<body class="font-sans text-dark overflow-x-hidden">

    <!-- Navigation Bar -->
    <?php include 'components/navbar.html'; ?>

    <?php $lastUpdated = 'November 14, 2026'; ?>

    <!-- Hero -->
    <section class="bg-dark text-white pt-36 pb-16 lg:pt-44 lg:pb-20 relative overflow-hidden">
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 lg:px-8 max-w-6xl relative">
            <nav class="text-sm text-white/60 mb-4" aria-label="Breadcrumb">
                <a href="index.php" class="hover:text-primary transition-colors">Home</a>
                <span class="mx-2">/</span>
                <span class="text-white">Privacy Policy</span>
            </nav>
            <h1 class="text-4xl lg:text-6xl font-bold mb-4">Privacy <span class="text-primary">Policy</span></h1>
            <p class="text-white/70 text-lg max-w-2xl">Your privacy matters to us. This policy explains what information GlideUps collects, how we use it, and the choices you have.</p>
            <p class="text-white/50 text-sm mt-6">Last updated: <?php echo $lastUpdated; ?></p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="container mx-auto px-4 lg:px-8 max-w-6xl">
            <div class="grid lg:grid-cols-[260px_1fr] gap-10 lg:gap-16">

                <!-- Table of contents -->
                <aside class="hidden lg:block">
                    <div class="sticky top-28 bg-gray-light rounded-2xl p-6">
                        <p class="font-semibold mb-4">On this page</p>
                        <ul class="space-y-2 text-sm text-gray">
                            <li><a href="#introduction" class="hover:text-primary transition-colors">1. Introduction</a></li>
                            <li><a href="#information-we-collect" class="hover:text-primary transition-colors">2. Information We Collect</a></li>
                            <li><a href="#how-we-use" class="hover:text-primary transition-colors">3. How We Use Information</a></li>
                            <li><a href="#cookies" class="hover:text-primary transition-colors">4. Cookies</a></li>
                            <li><a href="#sharing" class="hover:text-primary transition-colors">5. Sharing Information</a></li>
                            <li><a href="#retention" class="hover:text-primary transition-colors">6. Data Retention</a></li>
                            <li><a href="#security" class="hover:text-primary transition-colors">7. Data Security</a></li>
                            <li><a href="#your-rights" class="hover:text-primary transition-colors">8. Your Rights</a></li>
                            <li><a href="#third-party" class="hover:text-primary transition-colors">9. Third-Party Links</a></li>
                            <li><a href="#children" class="hover:text-primary transition-colors">10. Children's Privacy</a></li>
                            <li><a href="#changes" class="hover:text-primary transition-colors">11. Changes to This Policy</a></li>
                            <li><a href="#contact" class="hover:text-primary transition-colors">12. Contact Us</a></li>
                            <li><a href="#games" class="hover:text-primary transition-colors">13. GlideUps Games</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Policy text -->
                <article class="policy-content max-w-3xl">
                    <h2 id="introduction">1. Introduction</h2>
                    <p>GlideUps ("GlideUps", "we", "us" or "our") provides web development, mobile app development, UI/UX design and AI solutions. This Privacy Policy describes how we collect, use and protect information when you visit our website, contact us, or use our services.</p>
                    <p>By using our website, you agree to the practices described in this policy. If you do not agree, please do not use the website.</p>

                    <h2 id="information-we-collect">2. Information We Collect</h2>
                    <h3>Information you give us</h3>
                    <p>When you fill out our contact form, message us on WhatsApp, call, or email us, we may collect:</p>
                    <ul>
                        <li>Your name</li>
                        <li>Email address</li>
                        <li>Phone number (optional)</li>
                        <li>Details about your project, business, goals and timeline</li>
                        <li>Any other information you choose to share with us</li>
                    </ul>
                    <h3>Information collected automatically</h3>
                    <p>When you browse our website, our servers and hosting provider may automatically record standard technical information such as your IP address, browser type, device type, pages visited, and the date and time of your visit.</p>

                    <h2 id="how-we-use">3. How We Use Information</h2>
                    <p>We use the information we collect to:</p>
                    <ul>
                        <li>Respond to your enquiries and provide quotes or proposals</li>
                        <li>Deliver, manage and support the services you engage us for</li>
                        <li>Communicate with you about your project</li>
                        <li>Improve our website, services and user experience</li>
                        <li>Keep our website secure and prevent fraud or abuse</li>
                        <li>Comply with legal obligations</li>
                    </ul>
                    <p>We do not sell your personal information.</p>

                    <h2 id="cookies">4. Cookies</h2>
                    <p>Our website may use cookies and similar technologies that are necessary for it to work properly, and to understand how visitors use the site. You can block or delete cookies through your browser settings; some parts of the site may not work as intended if you do.</p>

                    <h2 id="sharing">5. Sharing Information</h2>
                    <p>We only share your information when needed, with:</p>
                    <ul>
                        <li><strong>Service providers</strong> who help us run our business, such as email, hosting and communication providers (for example, Google for email and WhatsApp for messaging), under appropriate confidentiality obligations.</li>
                        <li><strong>Legal authorities</strong> when required by law, or to protect our rights, users or the public.</li>
                        <li><strong>A successor business</strong> in the event of a merger, acquisition or sale of assets.</li>
                    </ul>

                    <h2 id="retention">6. Data Retention</h2>
                    <p>We keep personal information only for as long as needed to fulfil the purposes described in this policy, including to provide our services and meet legal, accounting or reporting requirements. When it is no longer needed, we delete or anonymise it.</p>

                    <h2 id="security">7. Data Security</h2>
                    <p>We use reasonable technical and organisational measures to protect your information against unauthorised access, loss or misuse. However, no method of transmission over the internet or electronic storage is completely secure, and we cannot guarantee absolute security.</p>

                    <h2 id="your-rights">8. Your Rights</h2>
                    <p>Depending on where you live, you may have the right to:</p>
                    <ul>
                        <li>Access the personal information we hold about you</li>
                        <li>Ask us to correct inaccurate information</li>
                        <li>Ask us to delete your information</li>
                        <li>Object to or restrict certain processing</li>
                        <li>Withdraw consent where processing is based on consent</li>
                    </ul>
                    <p>To make a request, contact us using the details below. We will respond within a reasonable timeframe.</p>

                    <h2 id="third-party">9. Third-Party Links</h2>
                    <p>Our website may contain links to third-party websites and platforms such as LinkedIn, Instagram, YouTube and WhatsApp. We are not responsible for the privacy practices of those sites, and we encourage you to read their privacy policies.</p>

                    <h2 id="children">10. Children's Privacy</h2>
                    <p>Our website and services are not directed to children under 13, and we do not knowingly collect personal information from children. If you believe a child has given us personal information, please contact us and we will delete it.</p>

                    <h2 id="changes">11. Changes to This Policy</h2>
                    <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated "Last updated" date.</p>

                    <h2 id="contact">12. Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy or how we handle your information, please contact us:</p>
                    <div class="bg-gray-light rounded-2xl p-6 not-prose">
                        <p class="mb-2"><strong class="text-dark">GlideUps</strong></p>
                        <p class="mb-2">Email: <a href="mailto:glideups.official@gmail.com">glideups.official@gmail.com</a></p>
                        <p class="mb-0">Phone / WhatsApp: <a href="tel:+923032298414">+92 303 2298414</a></p>
                    </div>

                    <h2 id="games">13. GlideUps Games (Mobile Games)</h2>
                    <p>This section applies to all mobile games published by GlideUps on Google Play and other app stores, including Clay Star and any games we release in the future. If a game needs extra rules, we will list them in the game's own sub-section below.</p>
                    <p class="text-sm">Last updated: November 14, 2026</p>

                    <h3>What stays on your device</h3>
                    <p>Our games save your score, coins, unlocked items, daily rewards and settings on your device. We do not ask you to create an account, and the games do not collect your name, email address or phone number.</p>

                    <h3>Ads</h3>
                    <p>Our games are free to play and show ads through Google AdMob. These can be banner ads, full-screen ads between rounds, and rewarded ads that you can choose to watch for a bonus.</p>
                    <p>To show and measure ads, Google AdMob may collect and use:</p>
                    <ul>
                        <li>Your device's advertising ID and other device identifiers</li>
                        <li>Your approximate location, worked out from your IP address</li>
                        <li>How you interact with the app and the ads</li>
                        <li>Crash logs and diagnostic information</li>
                    </ul>
                    <p>This data is handled by Google under its own policies. We do not control it. Learn more:</p>
                    <ul>
                        <li><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a></li>
                        <li><a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="noopener noreferrer">How Google uses data from apps that use its services</a></li>
                    </ul>

                    <h3>Your choices</h3>
                    <ul>
                        <li><strong>Consent:</strong> If you are in the European Economic Area or the United Kingdom, the game shows a consent form from Google before ads load. You can change your choice at any time in the game under Settings &gt; Privacy &amp; ad choices.</li>
                        <li><strong>Advertising ID:</strong> On Android you can reset or delete your advertising ID, and turn off ad personalization, in your phone's Settings &gt; Google &gt; Ads.</li>
                    </ul>

                    <h3>In-app purchases</h3>
                    <p>Some games may offer optional purchases, such as removing ads. Payments are handled by Google Play. We do not see or store your payment details.</p>

                    <h3>Children</h3>
                    <p>Our games are not directed to children under 13. We do not knowingly collect personal information from children. If you believe a child has given us personal information, contact us and we will delete it.</p>

                    <h3>Deleting your data</h3>
                    <p>Data saved inside a game is removed when you uninstall the game. If you want to ask about any data connected to you, email us at <a href="mailto:glideups.official@gmail.com">glideups.official@gmail.com</a> and we will respond as soon as we can.</p>

                    <h3>Changes</h3>
                    <p>If we add new features or services to a game that change how data is used, we will update this section and the "Last updated" date. Please check this page from time to time.</p>

                    <h3>Contact</h3>
                    <p>GlideUps<br>
                    Email: <a href="mailto:glideups.official@gmail.com">glideups.official@gmail.com</a><br>
                    Website: <a href="https://glideups.com" target="_blank" rel="noopener noreferrer">https://glideups.com</a></p>

                    <h3>Game list</h3>
                    <div class="overflow-x-auto rounded-2xl border border-gray-200 mb-4">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-gray-light text-dark">
                                <tr>
                                    <th class="px-4 py-3 font-semibold">Game</th>
                                    <th class="px-4 py-3 font-semibold">Platform</th>
                                    <th class="px-4 py-3 font-semibold">Notes</th>
                                </tr>
                            </thead>
                            <tbody class="text-[#555]">
                                <tr class="border-t border-gray-200">
                                    <td class="px-4 py-3 font-medium text-dark">Clay Star</td>
                                    <td class="px-4 py-3">Android</td>
                                    <td class="px-4 py-3">Ads through Google AdMob. No account.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.html'; ?>

    <!-- Custom JS -->
    <script src="js/main.js"></script>

</body>
</html>
