/**
 * Navigation functionality
 */

(function() {
    'use strict';

    // Mobile Menu Toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (menuToggle && navigation) {
        menuToggle.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            navigation.classList.toggle('toggled');
        });
    }

    // Mega Menu Toggle
    const megaMenuToggle = document.querySelector('.mega-menu-toggle');
    const megaMenu = document.querySelector('.mega-menu');

    if (megaMenuToggle && megaMenu) {
        megaMenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            megaMenu.setAttribute('aria-hidden', expanded);
        });

        // Close mega menu when clicking outside (only if menu is open)
        document.addEventListener('click', function(e) {
            const isExpanded = megaMenuToggle.getAttribute('aria-expanded') === 'true';
            if (isExpanded && !megaMenuToggle.contains(e.target) && !megaMenu.contains(e.target)) {
                megaMenuToggle.setAttribute('aria-expanded', 'false');
                megaMenu.setAttribute('aria-hidden', 'true');
            }
        });

        // Close mega menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                megaMenuToggle.setAttribute('aria-expanded', 'false');
                megaMenu.setAttribute('aria-hidden', 'true');
            }
        });
    }

    // Sticky Header
    const siteHeader = document.querySelector('.site-header');
    let lastScrollTop = 0;

    if (siteHeader) {
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 100) {
                siteHeader.classList.add('scrolled');
            } else {
                siteHeader.classList.remove('scrolled');
            }

            lastScrollTop = scrollTop;
        });
    }

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Skip if href is just "#" or empty
            if (href === '#' || href === '') {
                return;
            }

            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                const headerOffset = siteHeader ? siteHeader.offsetHeight : 0;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

})();
