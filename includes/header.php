<?php
// Determine the current page filename to set active class in navigation
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo isset($pageTitle) ? $pageTitle : "Elegant Designers | Premium Luxury Interior Design"; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : "Elegant Designers offers premium, minimal, and custom luxury interior design solutions for residential and commercial spaces."; ?>">
    <meta name="keywords" content="luxury interior design, premium interior designer, home decor, modern kitchen design, bedroom interior, commercial office interior, custom wardrobes, modular kitchen Chennai">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.elegantdesigners.com/">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : "Elegant Designers | Premium Luxury Interior Design"; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : "Elegant Designers offers premium, minimal, and custom luxury interior design solutions."; ?>">
    <meta property="og:image" content="images/og-image.jpg">

    <!-- Google Fonts - Outfit & Inter for Apple-level premium typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!-- Premium Page Loader -->
    <div class="page-loader" id="pageLoader">
        <div class="loader-content">
            <div class="loader-logo">ELEGANT DESIGNERS</div>
            <div class="loader-bar-container">
                <div class="loader-bar" id="loaderBar"></div>
            </div>
        </div>
    </div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress-container">
        <div class="scroll-progress-bar" id="scrollProgressBar"></div>
    </div>

    <!-- Custom Cursor elements -->
    <div class="custom-cursor-dot" id="customCursorDot"></div>
    <div class="custom-cursor-circle" id="customCursorCircle"></div>

    <!-- Header Navigation -->
    <header class="main-header" id="mainHeader">
        <div class="header-container">
            <!-- Brand Logo -->
            <a href="index.php" class="logo">
                <span class="logo-text">ELEGANT <span class="accent-text">DESIGNERS</span></span>
            </a>

            <!-- Navigation Links -->
            <nav class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link <?php echo ($current_page == 'index.html' || $current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link <?php echo ($current_page == 'about.html' || $current_page == 'about.php') ? 'active' : ''; ?>">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="portfolio.html" class="nav-link <?php echo ($current_page == 'portfolio.html' || $current_page == 'portfolio.php') ? 'active' : ''; ?>">
                            Portfolio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link <?php echo ($current_page == 'services.html' || $current_page == 'services.php') ? 'active' : ''; ?>">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                            Contact
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Action Buttons (Right Side) -->
            <div class="header-actions">
                <a href="tel:+919876543210" class="btn-action btn-call-now">
                    <svg class="btn-icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.59.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.47.57 3.59.12.35.03.74-.24 1.02l-2.2 2.2z"/>
                    </svg>
                    <span>Call Now</span>
                </a>
                <a href="contact.php" class="btn-action btn-get-quote">
                    Get Quote
                </a>
                <!-- Mobile Navigation Toggle Button -->
                <button class="nav-toggle" id="navToggle" aria-label="Toggle Menu">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content Area Starts -->
    <main class="site-main">
