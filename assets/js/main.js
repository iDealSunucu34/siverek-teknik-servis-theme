/**
 * Main JavaScript
 * Siverek Yetkili Teknik Servis Theme
 */

(function() {
    'use strict';

    /**
     * Mega Menu Toggle
     */
    function initMegaMenu() {
        const megaMenuToggle = document.querySelector('.mega-menu-toggle');
        const megaMenuContent = document.querySelector('.mega-menu-content');
        
        if (megaMenuToggle && megaMenuContent) {
            megaMenuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('active');
                megaMenuContent.classList.toggle('active');
            });

            // Close mega menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.mega-menu-wrapper')) {
                    megaMenuToggle.classList.remove('active');
                    megaMenuContent.classList.remove('active');
                }
            });
        }
    }

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNavigation = document.querySelector('.main-navigation');
        
        if (menuToggle && mainNavigation) {
            menuToggle.addEventListener('click', function() {
                mainNavigation.classList.toggle('active');
                const expanded = mainNavigation.classList.contains('active');
                this.setAttribute('aria-expanded', expanded);
            });
        }
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                
                // Skip if it's just "#"
                if (href === '#') {
                    return;
                }
                
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                    
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const mainNavigation = document.querySelector('.main-navigation');
                    if (mainNavigation && mainNavigation.classList.contains('active')) {
                        mainNavigation.classList.remove('active');
                    }
                    
                    // Close mega menu if open
                    const megaMenuToggle = document.querySelector('.mega-menu-toggle');
                    const megaMenuContent = document.querySelector('.mega-menu-content');
                    if (megaMenuToggle && megaMenuContent) {
                        megaMenuToggle.classList.remove('active');
                        megaMenuContent.classList.remove('active');
                    }
                }
            });
        });
    }

    /**
     * Fade-in Animation on Scroll
     */
    function initScrollAnimations() {
        const elements = document.querySelectorAll('.service-card, .brand-card, .why-us-card');
        
        if (!elements.length) {
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in', 'visible');
                    // Optionally unobserve after animation
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        elements.forEach((element, index) => {
            element.classList.add('fade-in');
            // Stagger animations slightly
            element.style.transitionDelay = `${index * 0.05}s`;
            observer.observe(element);
        });
    }

    /**
     * Sticky Header on Scroll
     */
    function initStickyHeader() {
        const header = document.querySelector('.site-header');
        
        if (!header) {
            return;
        }

        let lastScroll = 0;
        
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
            }
            
            lastScroll = currentScroll;
        });
    }

    /**
     * Initialize all functions when DOM is ready
     */
    function init() {
        initMegaMenu();
        initMobileMenu();
        initSmoothScroll();
        initScrollAnimations();
        initStickyHeader();
    }

    // Run initialization when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
