/**
 * GlideUps Main JavaScript
 * Contains all interactive functionality for the landing page
 */

// ==========================================
// Smooth Scrolling for Navigation Links
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');

            // Don't prevent default for accordion/collapse triggers
            if (href === '#' || this.hasAttribute('data-bs-toggle')) {
                return;
            }

            e.preventDefault();
            const target = document.querySelector(href);

            if (target) {
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                const targetPosition = target.offsetTop - navbarHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});

// ==========================================
// Navbar Background on Scroll
// ==========================================
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        if (window.scrollY > 100) {
            navbar.classList.add('navbar-scrolled');
            navbar.style.backgroundColor = 'rgba(20, 20, 20, 0.95)';
            navbar.style.backdropFilter = 'blur(10px)';
        } else {
            navbar.classList.remove('navbar-scrolled');
            navbar.style.backgroundColor = 'transparent';
            navbar.style.backdropFilter = 'none';
        }
    }
});

// ==========================================
// Contact Form Submission
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                number: document.getElementById('number').value,
                project: document.getElementById('project').value
            };

            // Validate form
            if (validateForm(formData)) {
                // Show success message
                showNotification('Thank you! Your message has been sent successfully.', 'success');

                // Reset form
                contactForm.reset();

                // Here you would typically send the data to your backend
                console.log('Form submitted:', formData);
            }
        });
    }
});

// Form Validation
function validateForm(data) {
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
        showNotification('Please enter a valid email address.', 'error');
        return false;
    }

    // Phone validation (basic)
    const phoneRegex = /^[\d\s\+\-\(\)]+$/;
    if (!phoneRegex.test(data.number) || data.number.length < 10) {
        showNotification('Please enter a valid phone number.', 'error');
        return false;
    }

    // Check if all fields are filled
    if (!data.name || !data.email || !data.number || !data.project) {
        showNotification('Please fill in all fields.', 'error');
        return false;
    }

    return true;
}

// ==========================================
// Notification System
// ==========================================
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotification = document.querySelector('.custom-notification');
    if (existingNotification) {
        existingNotification.remove();
    }

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `custom-notification alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
    notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; animation: slideIn 0.3s ease;';
    notification.innerHTML = `
        <div class="d-flex align-items-center justify-content-between">
            <span>${message}</span>
            <button type="button" class="btn-close ms-3" onclick="this.parentElement.parentElement.remove()"></button>
        </div>
    `;

    // Add animation
    const style = document.createElement('style');
    style.innerHTML = `
        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    `;
    document.head.appendChild(style);

    // Add to page
    document.body.appendChild(notification);

    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentElement) {
            notification.style.animation = 'slideIn 0.3s ease reverse';
            setTimeout(() => notification.remove(), 300);
        }
    }, 5000);
}

// ==========================================
// Intersection Observer for Animations
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe sections
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
});

// ==========================================
// Pause animations on hover for sliders
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    // Case Study Slider
    const caseStudyTrack = document.querySelector('.case-study-track');
    if (caseStudyTrack) {
        caseStudyTrack.addEventListener('mouseenter', function() {
            this.style.animationPlayState = 'paused';
        });
        caseStudyTrack.addEventListener('mouseleave', function() {
            this.style.animationPlayState = 'running';
        });
    }

    // Testimonials Sliders - Now using GSAP drag-only in testimonials.html component
});

// ==========================================
// Mobile Menu Close on Link Click
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });
});

// ==========================================
// Initialize Tooltips and Popovers
// ==========================================
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize Bootstrap popovers
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});

// ==========================================
// Active Navigation Link Highlighting
// ==========================================
window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (window.pageYOffset >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// ==========================================
// Case Study Carousel with Auto-Scroll & Drag
// ==========================================
// DISABLED - Using GSAP animation in component instead
/*
document.addEventListener('DOMContentLoaded', function() {
    // Wait a bit for the component to load
    setTimeout(initCaseStudyCarousel, 100);
});

function initCaseStudyCarousel() {
    const carousel = document.querySelector('.case-study-carousel');
    if (!carousel) return;

    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID;
    let isDragging = false;
    let startPos = 0;
    let currentIndex = 0;
    let hasMoved = false;

    // Auto-scroll settings
    const autoScrollSpeed = 0.5; // pixels per frame
    let isAutoScrolling = false; // DISABLED

    // Set initial cursor
    carousel.style.cursor = 'grab';

    // Mouse Events
    carousel.addEventListener('mousedown', dragStart);
    carousel.addEventListener('mouseup', dragEnd);
    carousel.addEventListener('mouseleave', dragEnd);
    carousel.addEventListener('mousemove', drag);

    // Touch Events
    carousel.addEventListener('touchstart', dragStart, { passive: false });
    carousel.addEventListener('touchend', dragEnd);
    carousel.addEventListener('touchmove', drag, { passive: false });

    function dragStart(e) {
        isDragging = true;
        hasMoved = false;
        isAutoScrolling = false;
        startPos = getPositionX(e);
        carousel.style.cursor = 'grabbing';
        carousel.style.userSelect = 'none';

        cancelAnimationFrame(animationID);
    }

    function drag(e) {
        if (!isDragging) return;
        e.preventDefault();

        const currentPosition = getPositionX(e);
        const diff = currentPosition - startPos;

        if (Math.abs(diff) > 5) {
            hasMoved = true;
        }

        currentTranslate = prevTranslate + diff;
        setSliderPosition();
    }

    function dragEnd() {
        isDragging = false;
        carousel.style.cursor = 'grab';

        prevTranslate = currentTranslate;

        // Resume auto-scrolling after a delay
        setTimeout(() => {
            isAutoScrolling = true;
            autoScroll();
        }, 1000);
    }

    function getPositionX(e) {
        return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
    }

    function setSliderPosition() {
        carousel.style.transform = `translateX(${currentTranslate}px)`;
    }

    // Auto-scroll function
    function autoScroll() {
        if (!isAutoScrolling || isDragging) {
            animationID = requestAnimationFrame(autoScroll);
            return;
        }

        currentTranslate -= autoScrollSpeed;
        prevTranslate = currentTranslate;

        // Reset position when scrolled too far (for infinite loop effect)
        const carouselWidth = carousel.offsetWidth;
        if (Math.abs(currentTranslate) >= carouselWidth / 2) {
            currentTranslate = 0;
            prevTranslate = 0;
        }

        setSliderPosition();
        animationID = requestAnimationFrame(autoScroll);
    }

    // Prevent image dragging
    const images = carousel.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('dragstart', (e) => e.preventDefault());
    });

    // Prevent click on links if dragged
    const links = carousel.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            if (hasMoved) {
                e.preventDefault();
                e.stopPropagation();
            }
        });
    });

    // Start auto-scrolling - DISABLED
    // autoScroll();
}
*/

// ==========================================
// Console Welcome Message
// ==========================================
console.log('%c Welcome to GlideUps! ', 'background: #1dbf73; color: white; font-size: 20px; padding: 10px;');
console.log('%c Every Experience Begins With a Feeling ', 'color: #1dbf73; font-size: 14px;');
