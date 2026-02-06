<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>About Us | GlideUps - Your Digital Transformation Partner</title>
    <meta name="title" content="About Us | GlideUps - Your Digital Transformation Partner">
    <meta name="description" content="Learn about GlideUps - a leading software development company specializing in web development, mobile apps, UI/UX design, and AI solutions. Discover our vision, values, and the team behind your digital success.">
    <meta name="keywords" content="about GlideUps, software development company, digital transformation, web development team, mobile app developers, UI/UX designers, AI developers, tech company, software agency, development partner">
    <meta name="author" content="GlideUps">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://glideups.com/about">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://glideups.com/about">
    <meta property="og:title" content="About Us | GlideUps - Your Digital Transformation Partner">
    <meta property="og:description" content="Learn about GlideUps - a leading software development company specializing in web development, mobile apps, UI/UX design, and AI solutions. Meet the team behind your digital success.">
    <meta property="og:image" content="https://glideups.com/assets/images/about-og.jpg">
    <meta property="og:site_name" content="GlideUps">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://glideups.com/about">
    <meta name="twitter:title" content="About Us | GlideUps - Your Digital Transformation Partner">
    <meta name="twitter:description" content="Learn about GlideUps - a leading software development company specializing in web development, mobile apps, UI/UX design, and AI solutions.">
    <meta name="twitter:image" content="https://glideups.com/assets/images/about-twitter.jpg">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#1dbf73">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">


     <link rel="icon" type="image/svg+xml" href="assets/logo-icon.svg">
    <link rel="apple-touch-icon" href="assets/logo-icon.svg">


    <!-- Structured Data - Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "GlideUps",
        "url": "https://glideups.com",
        "logo": "https://glideups.com/assets/logo-icon.svg",
        "description": "GlideUps is a leading software development company specializing in web development, mobile apps, UI/UX design, and AI solutions. We transform businesses through innovative digital solutions.",
        "foundingDate": "2020",
        "founders": [
            {
                "@type": "Person",
                "name": "GlideUps Team"
            }
        ],
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "Worldwide"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "availableLanguage": ["English"]
        },
        "sameAs": [
            "https://www.linkedin.com/company/glideups",
            "https://twitter.com/glideups",
            "https://www.facebook.com/glideups",
            "https://www.instagram.com/glideups"
        ],
        "knowsAbout": [
            "Web Development",
            "Mobile App Development",
            "UI/UX Design",
            "Artificial Intelligence",
            "E-Commerce Solutions",
            "Custom Software Development"
        ]
    }
    </script>

    <!-- Structured Data - AboutPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AboutPage",
        "name": "About GlideUps",
        "description": "Learn about GlideUps, our vision, mission, and the talented team dedicated to delivering exceptional digital solutions.",
        "url": "https://glideups.com/about",
        "mainEntity": {
            "@type": "Organization",
            "name": "GlideUps",
            "description": "A leading software development company transforming businesses through innovative digital solutions."
        }
    }
    </script>

    <!-- Breadcrumb Structured Data -->
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
                "name": "About Us",
                "item": "https://glideups.com/about"
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
                            DEFAULT: '#707070',
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

    <!-- Navigation Bar -->
    <?php include 'components/navbar.html'; ?>

    <!-- About Hero Section -->
    <?php include 'components/about/about-hero.html'; ?>

    <!-- GlideUps Vision Section -->
    <?php include 'components/about/about-vision.html'; ?>

    <!-- Life at GlideUps Section -->
    <?php include 'components/about/about-life.html'; ?>

    <!-- CTA Banner -->
    <?php include 'components/cta-banner.html'; ?>

    <!-- Testimonials Section -->
    <?php include 'components/testimonials.html'; ?>

    <!-- Contact Form Section -->
    <?php include 'components/contact.html'; ?>

    <!-- Footer -->
    <?php include 'components/footer.html'; ?>

    <!-- Custom JS -->
    <script src="js/main.js"></script>

</body>
</html>
