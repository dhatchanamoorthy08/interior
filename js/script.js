/**
 * ELEGANT DESIGNERS - PRIMARY INTERACTIONS LOGIC (script.js)
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // ==========================================
    // 1. Page Loader Animation
    // ==========================================
    const loader = document.getElementById('pageLoader');
    const loaderBar = document.getElementById('loaderBar');
    
    // Simulate loading progress
    let width = 0;
    const interval = setInterval(() => {
        if (width >= 100) {
            clearInterval(interval);
        } else {
            width += Math.random() * 15;
            if (width > 100) width = 100;
            if (loaderBar) loaderBar.style.width = width + '%';
        }
    }, 50);

    window.addEventListener('load', () => {
        clearInterval(interval);
        if (loaderBar) loaderBar.style.width = '100%';
        
        setTimeout(() => {
            if (loader) {
                loader.classList.add('fade-out');
                // Allow page scroll
                document.body.style.overflowY = 'auto';
            }
        }, 300);
    });

    // Fallback: hide loader if loading takes too long
    setTimeout(() => {
        if (loader && !loader.classList.contains('fade-out')) {
            loader.classList.add('fade-out');
        }
    }, 3000);


    // ==========================================
    // 2. Custom Premium Cursor (Desktop Only)
    // ==========================================
    const cursorDot = document.getElementById('customCursorDot');
    const cursorCircle = document.getElementById('customCursorCircle');
    
    let mouseX = 0, mouseY = 0;
    let circleX = 0, circleY = 0;
    let isMoving = false;

    // Track mouse coordinates
    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        if (!isMoving) {
            isMoving = true;
            if (cursorDot) cursorDot.style.opacity = '1';
            if (cursorCircle) cursorCircle.style.opacity = '1';
        }

        if (cursorDot) {
            cursorDot.style.left = mouseX + 'px';
            cursorDot.style.top = mouseY + 'px';
        }
    });

    // Smooth easing for outer cursor circle
    function animateCursorCircle() {
        // Easing calculations: 0.15 represents delay speed
        circleX += (mouseX - circleX) * 0.15;
        circleY += (mouseY - circleY) * 0.15;

        if (cursorCircle) {
            cursorCircle.style.left = circleX + 'px';
            cursorCircle.style.top = circleY + 'px';
        }

        requestAnimationFrame(animateCursorCircle);
    }
    animateCursorCircle();

    // Hover and active states
    document.addEventListener('mousedown', () => {
        document.body.classList.add('cursor-active');
    });

    document.addEventListener('mouseup', () => {
        document.body.classList.remove('cursor-active');
    });

    // Attach hover listener to interactive elements
    const updateHoverElements = () => {
        const hoverables = document.querySelectorAll('a, button, select, input, textarea, .portfolio-item, .category-card, .why-card');
        hoverables.forEach(item => {
            item.addEventListener('mouseenter', () => {
                document.body.classList.add('cursor-hover');
            });
            item.addEventListener('mouseleave', () => {
                document.body.classList.remove('cursor-hover');
            });
        });
    };
    updateHoverElements();

    // Hide custom cursor when cursor leaves window
    document.addEventListener('mouseleave', () => {
        if (cursorDot) cursorDot.style.opacity = '0';
        if (cursorCircle) cursorCircle.style.opacity = '0';
        isMoving = false;
    });

    // Detect touch device to fully bypass custom cursor
    window.addEventListener('touchstart', function detectTouch() {
        if (cursorDot) cursorDot.style.display = 'none';
        if (cursorCircle) cursorCircle.style.display = 'none';
        window.removeEventListener('touchstart', detectTouch);
    });


    // ==========================================
    // 3. Mobile Hamburger Menu Drawer
    // ==========================================
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');

    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
            
            // Prevent background body scroll when mobile menu is active
            if (navMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close menu when clicking nav links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }


    // ==========================================
    // 4. Premium Ripple Effect on Buttons
    // ==========================================
    const buttons = document.querySelectorAll('.btn, .btn-action');
    
    buttons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            // Only trigger if it isn't a direct submit causing page reload immediately
            const x = e.clientX - e.target.getBoundingClientRect().left;
            const y = e.clientY - e.target.getBoundingClientRect().top;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });


    // ==========================================
    // 5. Portfolio Grid Filter & Lightbox Popup
    // ==========================================
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');

    if (filterButtons.length > 0 && portfolioItems.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from other buttons
                filterButtons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const filterValue = btn.getAttribute('data-filter');
                
                portfolioItems.forEach(item => {
                    const itemCat = item.getAttribute('data-category');
                    if (filterValue === 'all' || itemCat === filterValue) {
                        item.classList.remove('hide');
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });
    }

    // Lightbox Setup
    const lightbox = document.getElementById('portfolioLightbox');
    const lightboxImg = lightbox ? lightbox.querySelector('.lightbox-img') : null;
    const lightboxTitle = lightbox ? lightbox.querySelector('.lightbox-title') : null;
    const lightboxDesc = lightbox ? lightbox.querySelector('.lightbox-desc') : null;
    const lightboxClose = lightbox ? lightbox.querySelector('.lightbox-close') : null;
    const viewButtons = document.querySelectorAll('.portfolio-item-btn, .portfolio-overlay');

    if (lightbox && lightboxImg && viewButtons.length > 0) {
        viewButtons.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                
                const item = btn.closest('.portfolio-item');
                if (!item) return;

                const img = item.querySelector('.portfolio-img');
                const title = item.querySelector('.portfolio-item-title');
                const cat = item.querySelector('.portfolio-item-cat');

                if (img) lightboxImg.src = img.src;
                if (title && lightboxTitle) lightboxTitle.textContent = title.textContent;
                if (cat && lightboxDesc) lightboxDesc.textContent = cat.textContent;

                lightbox.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close functions
        const closeLightbox = () => {
            lightbox.classList.remove('active');
            // Restore page scroll if mobile nav isn't open
            if (!navMenu.classList.contains('active')) {
                document.body.style.overflow = '';
            }
        };

        if (lightboxClose) {
            lightboxClose.addEventListener('click', closeLightbox);
        }
        
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeLightbox();
            }
        });
    }


    // ==========================================
    // 6. Sliding Testimonials Carousel
    // ==========================================
    const testimonialSlider = document.querySelector('.testimonials-wrapper');
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const testimonialDots = document.querySelectorAll('.testimonial-dot');
    
    if (testimonialSlider && testimonialSlides.length > 0 && testimonialDots.length > 0) {
        let currentIndex = 0;
        let slideInterval;

        const updateTestimonials = (index) => {
            currentIndex = index;
            testimonialSlider.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            testimonialDots.forEach(dot => dot.classList.remove('active'));
            testimonialDots[currentIndex].classList.add('active');
        };

        testimonialDots.forEach((dot, idx) => {
            dot.addEventListener('click', () => {
                updateTestimonials(idx);
                resetInterval();
            });
        });

        const startInterval = () => {
            slideInterval = setInterval(() => {
                let nextIdx = (currentIndex + 1) % testimonialSlides.length;
                updateTestimonials(nextIdx);
            }, 5000);
        };

        const resetInterval = () => {
            clearInterval(slideInterval);
            startInterval();
        };

        startInterval();
    }


    // ==========================================
    // 7. Statistic Counters Animation (IntersectionObserver)
    // ==========================================
    const statNumbers = document.querySelectorAll('.stat-number');
    
    if (statNumbers.length > 0) {
        const countUp = (el) => {
            const target = parseInt(el.getAttribute('data-target'), 10);
            let count = 0;
            const duration = 2000; // 2 seconds
            const stepTime = Math.max(Math.floor(duration / target), 10);
            
            const timer = setInterval(() => {
                count += Math.ceil(target / (duration / stepTime));
                if (count >= target) {
                    el.textContent = target + (el.textContent.includes('+') ? '+' : (el.textContent.includes('%') ? '%' : ''));
                    clearInterval(timer);
                } else {
                    el.textContent = count + (el.textContent.includes('+') ? '+' : (el.textContent.includes('%') ? '%' : ''));
                }
            }, stepTime);
        };

        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px'
        };

        const statObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    countUp(entry.target);
                    observer.unobserve(entry.target); // Run once
                }
            });
        }, observerOptions);

        statNumbers.forEach(num => {
            statObserver.observe(num);
        });
    }

    // Refresh cursor links for dynamic changes
    updateHoverElements();
});
