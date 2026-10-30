<?php
$pageTitle = "About Us | Elegant Designers";
$pageDescription = "Learn more about Elegant Designers, our 10+ year history, our state-of-the-art wood manufacturing factory, and why we are Chennai's premium interior design firm.";
include 'includes/header.php';
?>

<!-- 1. Inner Page Hero Banner -->
<section class="inner-hero" style="background-image: url('https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1920&q=80');">
    <div class="container">
        <div class="reveal reveal-up">
            <h1 class="inner-hero-title">Our Story</h1>
            <p class="inner-hero-subtitle">Crafting luxury spaces with a focus on minimalism and functional excellence.</p>
        </div>
    </div>
</section>

<!-- 2. Company Story Section -->
<section class="company-story">
    <div class="container">
        <div class="story-grid">
            <div class="story-content reveal reveal-left">
                <span class="section-tagline">Est. 2016</span>
                <h2>Redefining Modern Luxury Interior Spaces</h2>
                <p>
                    Founded in 2016, Elegant Designers emerged from a vision to break away from standard, cookie-cutter templates. We set out to create bespoke architectural interiors that treat space not just as a container, but as a dynamic medium that dictates comfort, emotion, and productivity.
                </p>
                <p>
                    From humble beginnings as a boutique consulting firm in Chennai, we have scaled into a full-service, end-to-end design and manufacturing powerhouse. Our state-of-the-art modular factory houses computer-numerical machines that ensure millimeter-level precision across all panel works.
                </p>
                <p>
                    Today, we design and execute high-end residential apartments, luxury beachfront villas, and contemporary corporate headquarters. Our philosophy remains unaltered: deliver premium quality with absolute transparency.
                </p>
            </div>
            
            <div class="story-img-grid reveal reveal-right">
                <div class="story-img-item">
                    <img src="images/material_board.jpg" alt="Material Selection Board" loading="lazy">
                </div>
                <div class="story-img-item">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=600&q=80" alt="Architect Drawing Spatial Plan" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Why Choose Us Section -->
<section class="why-choose-us" style="background-color: var(--color-sec-bg);">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 50px;">
            <span class="section-tagline">Why Us</span>
            <h2 class="section-title">Why Choose Us?</h2>
            <p class="section-desc" style="margin-left: auto; margin-right: auto;">
                Discover the 8 pillars of our design ethos that guarantee an unparalleled customer experience.
            </p>
        </div>

        <div class="why-choose-grid">
            
            <!-- Card 1 -->
            <div class="why-choose-card reveal reveal-up">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">10+ Years Experience</h3>
                <p class="why-choose-desc">A decade of refinement, handling complex projects with ease and structural precision.</p>
            </div>

            <!-- Card 2 -->
            <div class="why-choose-card reveal reveal-up" style="transition-delay: 0.05s;">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">Own Factory Materials</h3>
                <p class="why-choose-desc">In-house manufacturing ensures premium wood grading and prevents middleman markups.</p>
            </div>

            <!-- Card 3 -->
            <div class="why-choose-card reveal reveal-up" style="transition-delay: 0.1s;">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">Lifetime Service</h3>
                <p class="why-choose-desc">Enjoy complete peace of mind with our dedicated lifetime service and support team.</p>
            </div>

            <!-- Card 4 -->
            <div class="why-choose-card reveal reveal-up" style="transition-delay: 0.15s;">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">2000+ Happy Customers</h3>
                <p class="why-choose-desc">Our long client ledger is a testament to the trust placed in our execution quality.</p>
            </div>

            <!-- Card 5 -->
            <div class="why-choose-card reveal reveal-up">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">Professional Designers</h3>
                <p class="why-choose-desc">Work directly with certified spatial planners and creative consultants.</p>
            </div>

            <!-- Card 6 -->
            <div class="why-choose-card reveal reveal-up" style="transition-delay: 0.05s;">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">Premium Quality</h3>
                <p class="why-choose-desc">Strict materials vetting ensures zero voids, anti-termite cores, and high structural durability.</p>
            </div>

            <!-- Card 7 -->
            <div class="why-choose-card reveal reveal-up" style="transition-delay: 0.1s;">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">On-Time Delivery</h3>
                <p class="why-choose-desc">We respect timelines. Delays are penalised, and execution schedules are rigidly mapped.</p>
            </div>

            <!-- Card 8 -->
            <div class="why-choose-card reveal reveal-up" style="transition-delay: 0.15s;">
                <div class="why-choose-icon">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/>
                    </svg>
                </div>
                <h3 class="why-choose-title">Customer Satisfaction</h3>
                <p class="why-choose-desc">We iterate designs until you are absolutely satisfied, ensuring zero compromise.</p>
            </div>

        </div>
    </div>
</section>

<!-- 4. Statistics Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            
            <div class="stat-item reveal reveal-up">
                <div class="stat-number" data-target="10">0+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            
            <div class="stat-item reveal reveal-up" style="transition-delay: 0.1s;">
                <div class="stat-number" data-target="2000">0+</div>
                <div class="stat-label">Happy Customers</div>
            </div>
            
            <div class="stat-item reveal reveal-up" style="transition-delay: 0.2s;">
                <div class="stat-number" data-target="500">0+</div>
                <div class="stat-label">Projects Completed</div>
            </div>
            
            <div class="stat-item reveal reveal-up" style="transition-delay: 0.3s;">
                <div class="stat-number" data-target="100">0%</div>
                <div class="stat-label">Client Satisfaction</div>
            </div>

        </div>
    </div>
</section>

<!-- 5. Our Clients / Partners Section -->
<section class="clients-section">
    <div class="container">
        <div class="text-center" style="text-align: center; margin-bottom: 40px;">
            <span class="section-tagline" style="color: var(--color-text-muted)">Elite Collaborators</span>
            <h3 style="font-size: 16px; text-transform: uppercase; letter-spacing: 0.1em; font-weight: 600; color: var(--color-text-muted);">
                Our Premium Material Partners
            </h3>
        </div>
        
        <div class="clients-grid reveal reveal-up">
            <span class="client-logo">HETTICH</span>
            <span class="client-logo">SAINT-GOBAIN</span>
            <span class="client-logo">REHAU</span>
            <span class="client-logo">KNAUF</span>
            <span class="client-logo">MARAZZI</span>
            <span class="client-logo">HAFLER</span>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
