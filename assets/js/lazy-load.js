/**
 * Lazy Loading for Images
 * Using native lazy loading with fallback
 */

(function() {
    'use strict';

    // Check if browser supports native lazy loading
    if ('loading' in HTMLImageElement.prototype) {
        // Browser supports native lazy loading
        const images = document.querySelectorAll('img[data-src]');
        images.forEach(img => {
            img.src = img.dataset.src;
            if (img.dataset.srcset) {
                img.srcset = img.dataset.srcset;
            }
            img.removeAttribute('data-src');
            img.removeAttribute('data-srcset');
        });
    } else {
        // Fallback for older browsers
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
        document.body.appendChild(script);
    }

    // Add lazy loading to dynamically added images
    const config = {
        rootMargin: '50px 0px',
        threshold: 0.01
    };

    const imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                const image = entry.target;
                
                if (image.dataset.src) {
                    image.src = image.dataset.src;
                    image.removeAttribute('data-src');
                }
                
                if (image.dataset.srcset) {
                    image.srcset = image.dataset.srcset;
                    image.removeAttribute('data-srcset');
                }
                
                image.classList.remove('lazy');
                image.classList.add('loaded');
                imageObserver.unobserve(image);
            }
        });
    }, config);

    // Observe all images with lazy class
    const lazyImages = document.querySelectorAll('img.lazy');
    lazyImages.forEach(function(image) {
        imageObserver.observe(image);
    });

    // Lazy load background images
    const lazyBackgrounds = document.querySelectorAll('.lazy-background');
    const backgroundObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                const element = entry.target;
                element.classList.add('loaded');
                backgroundObserver.unobserve(element);
            }
        });
    }, config);

    lazyBackgrounds.forEach(function(background) {
        backgroundObserver.observe(background);
    });

    // Lazy load iframes (for videos, maps, etc.)
    const lazyIframes = document.querySelectorAll('iframe[data-src]');
    const iframeObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                const iframe = entry.target;
                iframe.src = iframe.dataset.src;
                iframe.removeAttribute('data-src');
                iframeObserver.unobserve(iframe);
            }
        });
    }, config);

    lazyIframes.forEach(function(iframe) {
        iframeObserver.observe(iframe);
    });

})();
