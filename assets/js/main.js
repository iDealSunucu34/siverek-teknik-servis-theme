/**
 * Main JavaScript functionality
 */

(function() {
    'use strict';

    // Add loaded class to body when page is fully loaded
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });

    // Add focus class to body when tabbing
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            document.body.classList.add('user-is-tabbing');
        }
    });

    document.addEventListener('mousedown', function() {
        document.body.classList.remove('user-is-tabbing');
    });

    // External Links - Open in new tab
    const links = document.querySelectorAll('a[href^="http"]');
    links.forEach(link => {
        const currentDomain = window.location.hostname;
        const linkDomain = new URL(link.href).hostname;
        
        if (currentDomain !== linkDomain && !link.getAttribute('target')) {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
        }
    });

    // Click to Call Tracking (Analytics Ready)
    const phoneLinks = document.querySelectorAll('a[href^="tel:"]');
    phoneLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Can be integrated with Google Analytics or other tracking
            console.log('Phone link clicked:', this.href);
        });
    });

    // WhatsApp Link Tracking (Analytics Ready)
    const whatsappLinks = document.querySelectorAll('a[href*="wa.me"]');
    whatsappLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Can be integrated with Google Analytics or other tracking
            console.log('WhatsApp link clicked:', this.href);
        });
    });

    // Add animation class when elements come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, observerOptions);

    // Observe elements with fade-in class
    const fadeElements = document.querySelectorAll('.fade-in, .service-card, .brand-card');
    fadeElements.forEach(el => observer.observe(el));

    // Form Validation Helper
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });
    });

    // Back to Top Button (if added to theme)
    const backToTop = document.querySelector('.back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        });

        backToTop.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

})();
