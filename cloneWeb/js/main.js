/**
 * Lusion Clone - Main JavaScript
 * Accurate implementation of interactions and animations
 */

document.addEventListener('DOMContentLoaded', () => {
    initLoader();
    initCursor();
    initNavigation();
    initMenu();
    initScrollEffects();
    initProjectCards();
    initSmoothScroll();
});

// ==========================================
// Loader
// ==========================================
function initLoader() {
    const loader = document.getElementById('loader');
    const loaderBar = document.getElementById('loader-bar');
    const loaderPercentage = document.getElementById('loader-percentage');

    if (!loader) return;

    let progress = 0;
    const duration = 2000;
    const startTime = Date.now();

    function updateProgress() {
        const elapsed = Date.now() - startTime;
        progress = Math.min((elapsed / duration) * 100, 100);

        if (loaderBar) loaderBar.style.width = `${progress}%`;
        if (loaderPercentage) loaderPercentage.textContent = `${Math.floor(progress)}%`;

        if (progress < 100) {
            requestAnimationFrame(updateProgress);
        } else {
            setTimeout(() => {
                loader.classList.add('hidden');
                document.body.classList.remove('loading');
                initAnimations();
            }, 300);
        }
    }

    updateProgress();
}

// ==========================================
// Custom Cursor
// ==========================================
function initCursor() {
    const cursor = document.getElementById('cursor');
    const follower = document.getElementById('cursor-follower');

    if (!cursor || !follower || 'ontouchstart' in window) return;

    let mouseX = 0, mouseY = 0;
    let cursorX = 0, cursorY = 0;
    let followerX = 0, followerY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    function animate() {
        // Cursor follows mouse directly
        cursorX += (mouseX - cursorX) * 0.5;
        cursorY += (mouseY - cursorY) * 0.5;

        // Follower has more delay
        followerX += (mouseX - followerX) * 0.15;
        followerY += (mouseY - followerY) * 0.15;

        cursor.style.left = `${cursorX}px`;
        cursor.style.top = `${cursorY}px`;
        follower.style.left = `${followerX}px`;
        follower.style.top = `${followerY}px`;

        requestAnimationFrame(animate);
    }
    animate();

    // Hover effects
    const hoverElements = document.querySelectorAll('a, button, .project-card, .header-menu-link');
    hoverElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('hover');
            follower.classList.add('hover');
        });
        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
            follower.classList.remove('hover');
        });
    });
}

// ==========================================
// Navigation
// ==========================================
function initNavigation() {
    const header = document.getElementById('header');

    if (!header) return;

    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;

        if (currentScroll > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        lastScroll = currentScroll;
    });
}

// ==========================================
// Menu
// ==========================================
function initMenu() {
    const menuBtn = document.getElementById('header-right-menu-btn');
    const menu = document.getElementById('header-menu');
    const menuLinks = document.querySelectorAll('.header-menu-link');

    if (!menuBtn || !menu) return;

    menuBtn.addEventListener('click', () => {
        menuBtn.classList.toggle('active');
        menu.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    });

    // Close menu when clicking a link
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            menuBtn.classList.remove('active');
            menu.classList.remove('active');
            document.body.classList.remove('menu-open');
        });
    });

    // Close menu with Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && menu.classList.contains('active')) {
            menuBtn.classList.remove('active');
            menu.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    });
}

// ==========================================
// Scroll Effects
// ==========================================
function initScrollEffects() {
    if (typeof gsap === 'undefined') return;

    // Register ScrollTrigger
    if (typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }

    // Hero title parallax
    const heroTitle = document.getElementById('home-hero-title');
    if (heroTitle) {
        gsap.to(heroTitle, {
            y: 100,
            opacity: 0.3,
            scrollTrigger: {
                trigger: '#home-hero',
                start: 'top top',
                end: 'bottom top',
                scrub: 1
            }
        });
    }

    // Scroll indicator fade
    const scrollIndicator = document.getElementById('home-hero-scroll-container');
    if (scrollIndicator) {
        gsap.to(scrollIndicator, {
            opacity: 0,
            scrollTrigger: {
                trigger: '#home-hero',
                start: '10% top',
                end: '30% top',
                scrub: 1
            }
        });
    }

    // Section animations
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        const title = section.querySelector('h1, h2, h3, .section-title');
        if (title) {
            gsap.from(title, {
                y: 50,
                opacity: 0,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                }
            });
        }
    });
}

// ==========================================
// Project Cards
// ==========================================
function initProjectCards() {
    const cards = document.querySelectorAll('.project-card');

    cards.forEach((card, index) => {
        // Stagger animation on scroll
        if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
            gsap.from(card, {
                y: 80,
                opacity: 0,
                duration: 0.8,
                delay: index * 0.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: '#home-work-grid',
                    start: 'top 80%'
                }
            });
        }

        // Initialize canvas scenes for each card
        const canvas = card.querySelector('.project-canvas');
        const projectType = card.dataset.project;
        if (canvas && projectType) {
            initProjectScene(canvas, projectType);
        }
    });
}

// ==========================================
// Project Scene (Individual 3D backgrounds)
// ==========================================
function initProjectScene(canvas, type) {
    if (typeof THREE === 'undefined') return;

    const rect = canvas.getBoundingClientRect();
    const width = rect.width || 400;
    const height = rect.height || 300;

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(60, width / height, 0.1, 100);
    camera.position.z = 20;

    const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
        antialias: true,
        alpha: true
    });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setClearColor(0x000000, 0);

    // Create geometry based on project type
    let geometry;
    let color;

    switch (type) {
        case 'devin_ai':
            geometry = new THREE.IcosahedronGeometry(6, 1);
            color = 0x00ff88;
            break;
        case 'porsche':
            geometry = new THREE.TorusKnotGeometry(5, 1.5, 100, 16);
            color = 0xff3366;
            break;
        case 'synthetic':
            geometry = new THREE.OctahedronGeometry(6, 2);
            color = 0x00ffff;
            break;
        case 'meta':
            geometry = new THREE.TorusKnotGeometry(4, 1, 128, 32, 2, 3);
            color = 0x0077ff;
            break;
        case 'spaace':
            geometry = new THREE.DodecahedronGeometry(6, 0);
            color = 0x9945ff;
            break;
        case 'ddd':
            geometry = new THREE.TetrahedronGeometry(6, 1);
            color = 0xffaa00;
            break;
        case 'choo':
            geometry = new THREE.BoxGeometry(8, 8, 8, 2, 2, 2);
            color = 0x44ff44;
            break;
        case 'soda':
            geometry = new THREE.SphereGeometry(6, 32, 32);
            color = 0xff6600;
            break;
        default:
            geometry = new THREE.BoxGeometry(6, 6, 6);
            color = 0x666666;
    }

    const material = new THREE.MeshBasicMaterial({
        color: color,
        wireframe: true,
        transparent: true,
        opacity: 0.5
    });

    const mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);

    // Animation
    let animationId;
    const clock = new THREE.Clock();

    function animate() {
        animationId = requestAnimationFrame(animate);
        const elapsed = clock.getElapsedTime();

        mesh.rotation.x = elapsed * 0.3;
        mesh.rotation.y = elapsed * 0.5;

        renderer.render(scene, camera);
    }

    // Only animate when in viewport
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animate();
            } else {
                cancelAnimationFrame(animationId);
            }
        });
    }, { threshold: 0.1 });

    observer.observe(canvas);
}

// ==========================================
// Smooth Scroll
// ==========================================
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            e.preventDefault();
            const target = document.querySelector(href);

            if (target) {
                const headerHeight = document.getElementById('header')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ==========================================
// Animations (after loader)
// ==========================================
function initAnimations() {
    if (typeof gsap === 'undefined') return;

    // Hero title animation
    const heroTitle = document.getElementById('home-hero-title');
    if (heroTitle) {
        gsap.from(heroTitle, {
            y: 60,
            opacity: 0,
            duration: 1.2,
            ease: 'power3.out',
            delay: 0.2
        });
    }

    // Scroll indicator
    const scrollContainer = document.getElementById('home-hero-scroll-container');
    if (scrollContainer) {
        gsap.from(scrollContainer, {
            opacity: 0,
            y: 20,
            duration: 0.8,
            ease: 'power2.out',
            delay: 0.8
        });
    }
}

// ==========================================
// Newsletter Form
// ==========================================
document.addEventListener('DOMContentLoaded', () => {
    const newsletterForm = document.getElementById('header-menu-newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const input = document.getElementById('header-menu-newsletter-input-field');
            if (input && input.value) {
                input.value = '';
                input.placeholder = 'Thanks for subscribing!';
                setTimeout(() => {
                    input.placeholder = 'Your email';
                }, 3000);
            }
        });
    }
});

// ==========================================
// Play Reel Button
// ==========================================
document.addEventListener('DOMContentLoaded', () => {
    const playReelBtn = document.getElementById('play-reel-btn');
    if (playReelBtn) {
        playReelBtn.addEventListener('click', () => {
            // Open video modal or play video
            alert('Video reel would play here. Add your showreel.mp4 to the video folder.');
        });
    }
});

// ==========================================
// Active Menu Link
// ==========================================
function updateActiveMenuLink() {
    const sections = document.querySelectorAll('section[id], .page[id]');
    const menuLinks = document.querySelectorAll('.header-menu-link');

    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 200;
        if (window.scrollY >= sectionTop) {
            current = section.getAttribute('id');
        }
    });

    menuLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
}

window.addEventListener('scroll', updateActiveMenuLink);

// ==========================================
// Resize Handler
// ==========================================
function debounce(func, wait) {
    let timeout;
    return function (...args) {
        clearTimeout(timeout);
        timeout = setTimeout(() => func.apply(this, args), wait);
    };
}

window.addEventListener('resize', debounce(() => {
    // Recalculate dimensions if needed
    if (typeof ScrollTrigger !== 'undefined') {
        ScrollTrigger.refresh();
    }
}, 250));
