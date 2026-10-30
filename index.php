<?php
$pageTitle = "Designing Luxury Spaces | Elegant Designers";
$pageDescription = "Elegant Designers crafts bespoke, luxury interior designs that inspire. Explore our premium kitchen, bedroom, and living space solutions.";
include 'includes/header.php';
?>

<!-- 1. Hero Banner Section -->
<section class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=80');">
    <div class="container">
        <div class="hero-content">
            <span class="hero-tag">Welcome to the Art of Space</span>
            <h1 class="hero-title">Designing Luxury Spaces That Inspire</h1>
            <p class="hero-subtitle">Premium interior design solutions crafted to elevate your daily living and represent your individual style.</p>
            <div class="hero-buttons">
                <a href="portfolio.php" class="btn btn-accent">Explore Designs</a>
                <a href="contact.php" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- 2. About Preview Section -->
<section class="about-preview">
    <div class="container">
        <div class="about-preview-grid">
            <div class="about-preview-img-wrapper reveal reveal-left">
                <img src="https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?auto=format&fit=crop&w=800&q=80" alt="Modern Luxury Living Room Detail" loading="lazy">
            </div>
            <div class="about-preview-content reveal reveal-right">
                <span class="section-tagline">Company Overview</span>
                <h2 class="section-title">Where Elegance Meets Exceptional Design</h2>
                <p class="section-desc">
                    At Elegant Designers, we believe that an interior space should be a true reflection of the people who inhabit it. For over a decade, we have been crafting bespoke luxury spaces that integrate refined aesthetics, premium materiality, and functional intelligence.
                </p>
                <p class="section-desc" style="margin-top: -30px; font-size: 15px;">
                    Our award-winning team collaborates with elite architectural networks and premium suppliers globally to ensure that every project executes seamlessly.
                </p>
                
                <!-- Tiny Stats Row -->
                <div class="about-preview-stats">
                    <div class="stat-preview-item">
                        <div class="stat-number">10+</div>
                        <div class="stat-lbl">Years Experience</div>
                    </div>
                    <div class="stat-preview-item">
                        <div class="stat-number">2000+</div>
                        <div class="stat-lbl">Happy Customers</div>
                    </div>
                </div>
                
                <a href="about.php" class="btn btn-primary" style="margin-top: 40px;">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- 3. Interior Categories Section -->
<section class="categories-section">
    <div class="container">
        <div class="text-center" style="text-align: center;">
            <span class="section-tagline">Bespoke Offerings</span>
            <h2 class="section-title">Interior Categories</h2>
            <p class="section-desc" style="margin-left: auto; margin-right: auto;">
                Explore our curated categories of premium custom-tailored residential and commercial designs.
            </p>
        </div>

        <div class="categories-grid">
            
            <!-- Card 1: Kitchen -->
            <div class="category-card reveal reveal-up">
                <div class="category-img-container">
                    <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=600&q=80" alt="Luxury Modular Kitchen" loading="lazy">
                </div>
                <div class="category-body">
                    <h3 class="category-title">Kitchen Designs</h3>
                    <p class="category-desc">Modular, ergonomically designed culinary spaces using state-of-the-art storage and premium anti-scratch finishes.</p>
                    <a href="services.php" class="btn-read-more">
                        <span>Read More</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 2: Bedroom -->
            <div class="category-card reveal reveal-up" style="transition-delay: 0.1s;">
                <div class="category-img-container">
                    <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?auto=format&fit=crop&w=600&q=80" alt="Luxury Bedroom Suite" loading="lazy">
                </div>
                <div class="category-body">
                    <h3 class="category-title">Bedroom Designs</h3>
                    <p class="category-desc">Serene personal sanctuaries featuring custom wardrobes, luxury headboards, and ambient architectural lighting.</p>
                    <a href="services.php" class="btn-read-more">
                        <span>Read More</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 3: Living Room -->
            <div class="category-card reveal reveal-up" style="transition-delay: 0.2s;">
                <div class="category-img-container">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=600&q=80" alt="Premium Living Room Interior" loading="lazy">
                </div>
                <div class="category-body">
                    <h3 class="category-title">Living Room Designs</h3>
                    <p class="category-desc">Grand spaces designed for entertainment and relaxation, incorporating premium seating, custom TV consoles, and wall paneling.</p>
                    <a href="services.php" class="btn-read-more">
                        <span>Read More</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 4: Staircase -->
            <div class="category-card reveal reveal-up">
                <div class="category-img-container">
                    <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=600&q=80" alt="Architectural Luxury Staircase" loading="lazy">
                </div>
                <div class="category-body">
                    <h3 class="category-title">Staircase Designs</h3>
                    <p class="category-desc">Stunning floating, spiral, and glass-paneled staircases engineered to serve as architectural centerpieces.</p>
                    <a href="services.php" class="btn-read-more">
                        <span>Read More</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 5: Garden Utility -->
            <div class="category-card reveal reveal-up" style="transition-delay: 0.1s;">
                <div class="category-img-container">
                    <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?auto=format&fit=crop&w=600&q=80" alt="Luxury Outdoor Garden Patio" loading="lazy">
                </div>
                <div class="category-body">
                    <h3 class="category-title">Garden Utility Designs</h3>
                    <p class="category-desc">Sophisticated outdoor lounges, terrace garden spaces, and custom water features for tranquil living.</p>
                    <a href="services.php" class="btn-read-more">
                        <span>Read More</span> &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 4. Why Elegant Designers Section -->
<section class="why-elegant-designers">
    <div class="container">
        <div class="text-center" style="text-align: center;">
            <span class="section-tagline">Our Advantages</span>
            <h2 class="section-title">Why Choose Us</h2>
            <p class="section-desc" style="margin-left: auto; margin-right: auto;">
                Experience the luxury standard in execution and post-installation support.
            </p>
        </div>

        <div class="why-us-grid">
            
            <!-- Advantage 1: Premium Materials -->
            <div class="why-card reveal reveal-up">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                        <polyline points="2 17 12 22 22 17"/>
                        <polyline points="2 12 12 17 22 12"/>
                    </svg>
                </div>
                <h3 class="why-title">Own Factory Materials</h3>
                <p class="why-desc">We manufacture wood works in our own hi-tech facilities, ensuring strict quality control and cost efficiency.</p>
            </div>

            <!-- Advantage 2: 10+ Years -->
            <div class="why-card reveal reveal-up" style="transition-delay: 0.1s;">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                </div>
                <h3 class="why-title">10+ Years Experience</h3>
                <p class="why-desc">A decade of delivering award-winning residential and high-end commercial projects across the country.</p>
            </div>

            <!-- Advantage 3: Support -->
            <div class="why-card reveal reveal-up" style="transition-delay: 0.2s;">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                        <path d="M12 8v4l3 3"/>
                    </svg>
                </div>
                <h3 class="why-title">Lifetime Service Support</h3>
                <p class="why-desc">Our relationship doesn't end at completion. Enjoy lifetime support and maintenance on all manufactured wood installations.</p>
            </div>

            <!-- Advantage 4: Satisfaction -->
            <div class="why-card reveal reveal-up" style="transition-delay: 0.3s;">
                <div class="why-icon">
                    <svg viewBox="0 0 24 24" width="30" height="30" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3 class="why-title">Absolute Satisfaction</h3>
                <p class="why-desc">Over 2000 happy clients who have trusted us to execute their vision with high fidelity and zero hassle.</p>
            </div>

        </div>
    </div>
</section>

<!-- 5. Our Process Section -->
<section class="process-section">
    <div class="container">
        <div class="text-center" style="text-align: center;">
            <span class="section-tagline">Execution Flow</span>
            <h2 class="section-title">Our Process</h2>
            <p class="section-desc" style="margin-left: auto; margin-right: auto;">
                From the first conversation to hand-over, we follow a transparent and meticulous methodology.
            </p>
        </div>

        <div class="process-timeline reveal reveal-up">
            
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-number">01</div>
                <h3 class="step-title">Consultation</h3>
                <p class="step-desc">A deep-dive session to understand your space requirements, design preferences, and budget expectations.</p>
            </div>

            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-number">02</div>
                <h3 class="step-title">Planning</h3>
                <p class="step-desc">Site analysis, structural spatial planning, and drafting detailed layouts defining zones and traffic flows.</p>
            </div>

            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-number">03</div>
                <h3 class="step-title">Design</h3>
                <p class="step-desc">Interactive 3D renderings, material selection, mood boards, and lighting scheme sign-offs.</p>
            </div>

            <!-- Step 4 -->
            <div class="process-step">
                <div class="step-number">04</div>
                <h3 class="step-title">Execution</h3>
                <p class="step-desc">Factory production of components, site prep, structural modifications, and direct implementation control.</p>
            </div>

            <!-- Step 5 -->
            <div class="process-step">
                <div class="step-number">05</div>
                <h3 class="step-title">Delivery</h3>
                <p class="step-desc">Deep cleaning, accessory styling, dynamic testing of all fittings, and handing over your luxury space.</p>
            </div>

        </div>
    </div>
</section>

<!-- 6. Featured Projects Section -->
<section class="featured-projects">
    <div class="container">
        <div class="projects-header">
            <div>
                <span class="section-tagline">Portfolio Highlights</span>
                <h2 class="section-title">Featured Projects</h2>
                <p class="section-desc">Take a look at some of our curated, premium client design completions.</p>
            </div>
            <div>
                <a href="portfolio.php" class="btn btn-secondary">View All Projects</a>
            </div>
        </div>

        <div class="projects-grid">
            
            <!-- Project 1 -->
            <div class="project-card reveal reveal-up">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80" alt="Minimalist Living Area" class="project-img" loading="lazy">
                <div class="project-overlay">
                    <span class="project-cat">Living Room</span>
                    <h3 class="project-title">Minimalist Living Area</h3>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card reveal reveal-up" style="transition-delay: 0.1s;">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" alt="Modern Kitchen Concept" class="project-img" loading="lazy">
                <div class="project-overlay">
                    <span class="project-cat">Kitchen</span>
                    <h3 class="project-title">Modern Kitchen Concept</h3>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card reveal reveal-up" style="transition-delay: 0.2s;">
                <img src="https://images.unsplash.com/photo-1616594039976-bebe305d2331?auto=format&fit=crop&w=600&q=80" alt="Master Bedroom Retreat" class="project-img" loading="lazy">
                <div class="project-overlay">
                    <span class="project-cat">Bedroom</span>
                    <h3 class="project-title">Master Bedroom Retreat</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 7. Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="text-center" style="text-align: center;">
            <span class="section-tagline">Client Testimonials</span>
            <h2 class="section-title">What Our Clients Say</h2>
        </div>

        <div class="testimonials-slider-container reveal reveal-up">
            <div class="testimonials-wrapper">
                
                <!-- Slide 1 -->
                <div class="testimonial-slide">
                    <div class="quote-icon">&ldquo;</div>
                    <p class="testimonial-text">
                        Elegant Designers completely transformed our house into a luxury home. Their attention to detail, execution speed, and high-quality factory finishes surpassed all our expectations. Extremely satisfied.
                    </p>
                    <h4 class="testimonial-author">Rajesh Kumar</h4>
                    <p class="testimonial-role">Villa Owner, Chennai</p>
                </div>

                <!-- Slide 2 -->
                <div class="testimonial-slide">
                    <div class="quote-icon">&ldquo;</div>
                    <p class="testimonial-text">
                        The corporate office they designed for us is not only incredibly beautiful but exceptionally functional. Our clients are always wowed when they step in, and employees love the new ergonomic layout.
                    </p>
                    <h4 class="testimonial-author">Sarah D'Souza</h4>
                    <p class="testimonial-role">CEO, Tech Innovators</p>
                </div>

                <!-- Slide 3 -->
                <div class="testimonial-slide">
                    <div class="quote-icon">&ldquo;</div>
                    <p class="testimonial-text">
                        Their modular kitchen solutions are world-class. From anti-slam hinges to elegant stone worktops, cooking has become a joyful experience. Highly recommend their lifetime maintenance support.
                    </p>
                    <h4 class="testimonial-author">Meera Krishnan</h4>
                    <p class="testimonial-role">Homemaker, Chennai</p>
                </div>

            </div>

            <!-- Slide Dots navigation -->
            <div class="testimonial-dots">
                <button class="testimonial-dot active" aria-label="Slide 1"></button>
                <button class="testimonial-dot" aria-label="Slide 2"></button>
                <button class="testimonial-dot" aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</section>

<!-- 8. Call to Action Section -->
<section class="cta-section">
    <div class="container">
        <div class="reveal reveal-up">
            <span class="section-tagline" style="color: var(--color-accent)">Get In Touch</span>
            <h2 class="section-title">Ready to Design Your Dream Space?</h2>
            <p class="section-desc">
                Book a free virtual or in-person consultation with our luxury interior experts and take the first step towards transforming your environment.
            </p>
            <a href="contact.php" class="btn btn-accent">Book Free Consultation</a>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
