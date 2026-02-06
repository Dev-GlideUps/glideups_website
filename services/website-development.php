<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="../">
    <title>Website Development Services | Custom Web Design & Development | GlideUps</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Website Development Services | Custom Web Design & Development | GlideUps">
    <meta name="description" content="Professional website development services that drive results. We build fast, responsive, SEO-optimized websites with stunning designs. From landing pages to complex web applications. Get a free quote today.">
    <meta name="keywords" content="website development, web design, custom website, responsive design, SEO website, WordPress development, React website, Next.js development, ecommerce website, business website">
    <meta name="author" content="GlideUps">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://glideups.com/services/website-development.php">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://glideups.com/services/website-development.php">
    <meta property="og:title" content="Website Development Services | GlideUps">
    <meta property="og:description" content="Professional website development that drives results. Fast, responsive, SEO-optimized websites with stunning designs. 200+ websites launched successfully.">
    <meta property="og:image" content="https://glideups.com/assets/og-website-development.png">
    <meta property="og:site_name" content="GlideUps">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://glideups.com/services/website-development.php">
    <meta name="twitter:title" content="Website Development Services | GlideUps">
    <meta name="twitter:description" content="Professional website development that drives results. Fast, responsive, SEO-optimized websites with stunning designs. 200+ websites launched successfully.">
    <meta name="twitter:image" content="https://glideups.com/assets/og-website-development.png">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="assets/logo-icon.svg">

    <!-- Theme Color -->
    <meta name="theme-color" content="#1dbf73">

    <!-- Structured Data - Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Website Development",
        "provider": {
            "@type": "Organization",
            "name": "GlideUps",
            "url": "https://glideups.com"
        },
        "description": "Professional website development services including custom web design, responsive development, SEO optimization, and ongoing maintenance.",
        "serviceType": "Website Development",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Website Development Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Custom Website Design"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "E-Commerce Development"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "WordPress Development"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Web Application Development"
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
                "name": "Website Development",
                "item": "https://glideups.com/services/website-development.php"
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
        <section aria-label="Website Development Services">
            <?php include '../components/services/web-service-hero.html'; ?>
        </section>

        <!-- Case Study Section -->
        <section aria-label="Our Website Development Portfolio">
            <?php include '../components/services/web-case-study.html'; ?>
        </section>

        <!-- Why You Need A Website Section -->
        <section aria-label="Benefits of Professional Website">
            <?php include '../components/why-need-website.html'; ?>
        </section>

        <!-- CTA Banner -->
        <section aria-label="Get Started">
            <?php include '../components/services/web-cta-banner.html'; ?>
        </section>

        <!-- What Makes GlideUps Different - Comparison Table -->
        <section aria-label="Why Choose GlideUps">
            <?php include '../components/services/web-comparison-table.html'; ?>
        </section>

        <!-- What Happens When You Work With Us -->
        <section aria-label="Our Development Process">
            <?php include '../components/services/web-work-process.html'; ?>
        </section>

        <!-- The Technology Behind Our Work -->
        <section aria-label="Technologies We Use">
            <?php include '../components/services/web-technology-stack.html'; ?>
        </section>

        <!-- Testimonials Section -->
        <section aria-label="Client Testimonials">
            <?php include '../components/testimonials.html'; ?>
        </section>

        <!-- FAQs Section -->
        <section aria-label="Frequently Asked Questions">
            <?php include '../components/services/web-faqs.html'; ?>
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
