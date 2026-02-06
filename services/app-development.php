<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="../">
    <title>Mobile App Development Services | iOS & Android Apps | GlideUps</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Mobile App Development Services | iOS & Android Apps | GlideUps">
    <meta name="description" content="Build powerful iOS & Android mobile apps with GlideUps. We create fast, scalable, and user-friendly apps with seamless performance, push notifications, and offline support. Get a free quote today.">
    <meta name="keywords" content="mobile app development, iOS app development, Android app development, React Native, Flutter, custom mobile apps, app development company, mobile app agency, app developers, cross-platform apps">
    <meta name="author" content="GlideUps">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://glideups.com/services/app-development.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://glideups.com/services/app-development.php">
    <meta property="og:title" content="Mobile App Development Services | GlideUps">
    <meta property="og:description" content="Build powerful iOS & Android mobile apps that users love. Fast, scalable, and delivered on time. 100+ apps launched successfully.">
    <meta property="og:image" content="https://glideups.com/assets/og-app-development.png">
    <meta property="og:site_name" content="GlideUps">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://glideups.com/services/app-development.php">
    <meta name="twitter:title" content="Mobile App Development Services | GlideUps">
    <meta name="twitter:description" content="Build powerful iOS & Android mobile apps that users love. Fast, scalable, and delivered on time. 100+ apps launched successfully.">
    <meta name="twitter:image" content="https://glideups.com/assets/og-app-development.png">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/logo-icon.svg">

    <!-- Theme Color -->
    <meta name="theme-color" content="#1dbf73">

    <!-- Structured Data - Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Mobile App Development",
        "provider": {
            "@type": "Organization",
            "name": "GlideUps",
            "url": "https://glideups.com"
        },
        "description": "Professional mobile app development services for iOS and Android. We build fast, scalable, and user-friendly applications using React Native, Flutter, and native technologies.",
        "serviceType": "Mobile Application Development",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Mobile App Development Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "iOS App Development"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Android App Development"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Cross-Platform App Development"
                    }
                }
            ]
        }
    }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://glideups.com"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Services",
                "item": "https://glideups.com/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Mobile App Development",
                "item": "https://glideups.com/services/app-development.php"
            }
        ]
    }
    </script>

    <!-- Google Fonts - Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

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
                            DEFAULT: '#6B7280',
                            light: '#F5F5F5',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'scroll': 'scroll 30s linear infinite',
                        'scroll-reverse': 'scroll-reverse 40s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0) translateX(0)' },
                            '50%': { transform: 'translateY(-20px) translateX(20px)' },
                        },
                        scroll: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        'scroll-reverse': {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(0)' },
                        },
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="font-sans text-dark overflow-x-hidden">

    <!-- Skip to Main Content (Accessibility) -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary text-white px-4 py-2 rounded-lg z-50">Skip to main content</a>

    <!-- Navigation Bar -->
    <header role="banner">
        <?php include '../components/navbar.html'; ?>
    </header>

    <!-- Main Content -->
    <main id="main-content" role="main">

        <!-- Service Hero Section with Contact Form -->
        <section aria-label="Mobile App Development Services">
            <?php include '../components/service-hero.html'; ?>
        </section>

        <!-- Case Study Section -->
        <section aria-label="Our App Development Portfolio">
            <?php include '../components/services/app-case-study.html'; ?>
        </section>

        <!-- Why You Need An App Section -->
        <section aria-label="Benefits of Mobile App Development">
            <?php include '../components/why-need-app.html'; ?>
        </section>

        <!-- CTA Banner -->
        <section aria-label="Get Started">
            <?php include '../components/cta-banner.html'; ?>
        </section>

        <!-- What Makes GlideUps Different - Comparison Table -->
        <section aria-label="Why Choose GlideUps">
            <?php include '../components/services/app-comparison-table.html'; ?>
        </section>

        <!-- What Happens When You Work With Us -->
        <section aria-label="Our Development Process">
            <?php include '../components/services/app-work-process.html'; ?>
        </section>

        <!-- The Technology Behind Our Work -->
        <section aria-label="Technologies We Use">
            <?php include '../components/services/app-technology-stack.html'; ?>
        </section>

        <!-- Testimonials Section -->
        <section aria-label="Client Testimonials">
            <?php include '../components/testimonials.html'; ?>
        </section>

        <!-- FAQs Section -->
        <section aria-label="Frequently Asked Questions">
            <?php include '../components/services/app-faqs.html'; ?>
        </section>

        <!-- Contact Form Section -->
        <section aria-label="Contact Us">
            <?php include '../components/contact.html'; ?>
        </section>

    </main>

    <!-- Footer -->
    <footer role="contentinfo">
        <?php include '../components/footer.html'; ?>
    </footer>

    <!-- Custom JS -->
    <script src="js/main.js"></script>

</body>
</html>
