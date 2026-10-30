<?php
$pageTitle = "Portfolio | Elegant Designers";
$pageDescription = "Browse through our collection of premium, award-winning kitchen designs, master bedrooms, modern living rooms, bespoke staircases, and garden features.";
include 'includes/header.php';
?>

<!-- 1. Inner Hero Section -->
<section class="inner-hero" style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80');">
    <div class="container">
        <div class="reveal reveal-up">
            <h1 class="inner-hero-title">Our Portfolio</h1>
            <p class="inner-hero-subtitle">A showcase of bespoke luxury environments crafted by our expert team.</p>
        </div>
    </div>
</section>

<!-- 2. Portfolio Gallery Section -->
<section class="portfolio-section">
    <div class="container">
        
        <!-- Gallery Filter Buttons -->
        <div class="portfolio-filter-container reveal reveal-up">
            <button class="filter-btn active" data-filter="all">All Designs</button>
            <button class="filter-btn" data-filter="kitchen">Kitchen</button>
            <button class="filter-btn" data-filter="bedroom">Bedroom</button>
            <button class="filter-btn" data-filter="livingroom">Living Room</button>
            <button class="filter-btn" data-filter="staircase">Staircase</button>
            <button class="filter-btn" data-filter="garden">Garden Utility</button>
        </div>

        <!-- Gallery Grid -->
        <div class="portfolio-grid">
            
            <!-- Project 1: Kitchen -->
            <div class="portfolio-item reveal reveal-up" data-category="kitchen">
                <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?auto=format&fit=crop&w=600&q=80" alt="Classic Gold Kitchen" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Classic Gold Kitchen</h3>
                    <span class="portfolio-item-cat">Kitchen</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 2: Bedroom -->
            <div class="portfolio-item reveal reveal-up" data-category="bedroom" style="transition-delay: 0.05s;">
                <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?auto=format&fit=crop&w=600&q=80" alt="Royal Master Suite" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Royal Master Suite</h3>
                    <span class="portfolio-item-cat">Bedroom</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 3: Living Room -->
            <div class="portfolio-item reveal reveal-up" data-category="livingroom" style="transition-delay: 0.1s;">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=600&q=80" alt="Minimalist Glass Lounge" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Minimalist Glass Lounge</h3>
                    <span class="portfolio-item-cat">Living Room</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 4: Staircase -->
            <div class="portfolio-item reveal reveal-up" data-category="staircase">
                <img src="https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=600&q=80" alt="Floating Marble Stairs" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Floating Marble Stairs</h3>
                    <span class="portfolio-item-cat">Staircase</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 5: Garden Utility -->
            <div class="portfolio-item reveal reveal-up" data-category="garden" style="transition-delay: 0.05s;">
                <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?auto=format&fit=crop&w=600&q=80" alt="Japanese Zen Garden" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Japanese Zen Garden</h3>
                    <span class="portfolio-item-cat">Garden Utility</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 6: Kitchen -->
            <div class="portfolio-item reveal reveal-up" data-category="kitchen" style="transition-delay: 0.1s;">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=600&q=80" alt="Contemporary Dual Kitchen" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Contemporary Dual Kitchen</h3>
                    <span class="portfolio-item-cat">Kitchen</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 7: Bedroom -->
            <div class="portfolio-item reveal reveal-up" data-category="bedroom">
                <img src="images/bedroom/velvet_cozy.jpg" alt="Velvet Cozy Bedroom" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Velvet Cozy Bedroom</h3>
                    <span class="portfolio-item-cat">Bedroom</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 8: Living Room -->
            <div class="portfolio-item reveal reveal-up" data-category="livingroom" style="transition-delay: 0.05s;">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=600&q=80" alt="Double Height Atrium" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Double Height Atrium</h3>
                    <span class="portfolio-item-cat">Living Room</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

            <!-- Project 9: Garden Utility -->
            <div class="portfolio-item reveal reveal-up" data-category="garden" style="transition-delay: 0.1s;">
                <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=600&q=80" alt="Terrace Sun Deck" class="portfolio-img" loading="lazy">
                <div class="portfolio-overlay">
                    <h3 class="portfolio-item-title">Terrace Sun Deck</h3>
                    <span class="portfolio-item-cat">Garden Utility</span>
                    <button class="portfolio-item-btn">View Project</button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Luxury Lightbox Container -->
<div class="lightbox" id="portfolioLightbox">
    <button class="lightbox-close" aria-label="Close Lightbox">&times;</button>
    <div class="lightbox-content">
        <img src="" alt="" class="lightbox-img">
        <div class="lightbox-caption">
            <h3 class="lightbox-title">Project Name</h3>
            <p class="lightbox-desc">Category</p>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
