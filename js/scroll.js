/**
 * ELEGANT DESIGNERS - SCROLL ANIMATIONS AND EFFECTS (scroll.js)
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 1. Sticky Navigation Header State
    // ==========================================
    const header = document.getElementById('mainHeader');
    const scrollThreshold = 20;

    const checkHeaderScroll = () => {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    // Check initial state
    checkHeaderScroll();
    window.addEventListener('scroll', checkHeaderScroll);


    // ==========================================
    // 2. Scroll Progress Bar
    // ==========================================
    const progressIndicator = document.getElementById('scrollProgressBar');

    const updateScrollProgress = () => {
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        if (totalHeight <= 0) return;
        
        const scrollPercent = (window.scrollY / totalHeight) * 100;
        if (progressIndicator) {
            progressIndicator.style.width = scrollPercent + '%';
        }
    };

    window.addEventListener('scroll', updateScrollProgress);


    // ==========================================
    // 3. Scroll Reveal System (Fade Up/Left/Right)
    // ==========================================
    const revealElements = document.querySelectorAll('.reveal');

    if (revealElements.length > 0) {
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px' // Trigger slightly before element fully enters
        };

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target); // Animate once only
                }
            });
        }, observerOptions);

        revealElements.forEach(element => {
            revealObserver.observe(element);
        });
    }


    // ==========================================
    // 4. Back to Top Button
    // ==========================================
    const backToTopBtn = document.getElementById('backToTopBtn');
    const visibilityThreshold = 300;

    const checkBackToTopScroll = () => {
        if (window.scrollY > visibilityThreshold) {
            backToTopBtn.classList.add('active');
        } else {
            backToTopBtn.classList.remove('active');
        }
    };

    if (backToTopBtn) {
        // Check initial state
        checkBackToTopScroll();
        window.addEventListener('scroll', checkBackToTopScroll);

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // Lazy load images (Native or JS fallback)
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const image = entry.target;
                    // If a data-src attribute is defined, load it
                    if (image.dataset.src) {
                        image.src = image.dataset.src;
                    }
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyImages.forEach(image => {
            imageObserver.observe(image);
        });
    }
});
