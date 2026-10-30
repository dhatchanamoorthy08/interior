<?php
// Page setup variables for header
$pageTitle = "Contact Us | Let's Connect | Elegant Designers";
$pageDescription = "Get in touch with Elegant Designers Chennai. Book a free consultation for your luxury interior project. Fill out our form or call us today.";

// Initialize alert variables
$successMessage = "";
$errorMessage = "";

// Process form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Include database config
    require_once "database/config.php";
    
    // Extract and sanitize inputs
    $full_name = isset($_POST['full_name']) ? trim(strip_tags($_POST['full_name'])) : '';
    $phone_number = isset($_POST['phone_number']) ? trim(strip_tags($_POST['phone_number'])) : '';
    $whatsapp_reachable = isset($_POST['whatsapp_reachable']) ? 1 : 0;
    $interior_type = isset($_POST['interior_type']) ? trim(strip_tags($_POST['interior_type'])) : '';
    $email_address = isset($_POST['email_address']) ? trim(filter_var($_POST['email_address'], FILTER_SANITIZE_EMAIL)) : '';
    $property_location = isset($_POST['property_location']) ? trim(strip_tags($_POST['property_location'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
    
    // Simple Validation
    if(empty($full_name) || empty($phone_number) || empty($interior_type) || empty($email_address) || empty($property_location) || empty($message)){
        $errorMessage = "All fields are required. Please fill in the complete form.";
    } elseif(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
        $errorMessage = "Please enter a valid email address.";
    } elseif(!preg_match('/^[0-9\-\+\s\(\)]+$/', $phone_number)){
        $errorMessage = "Please enter a valid phone number.";
    } else {
        // Prepare insert statement
        $sql = "INSERT INTO contact_submissions (full_name, phone_number, whatsapp_reachable, interior_type, email_address, property_location, message) VALUES (?, ?, ?, ?, ?, ?, ?)";
        
        if($stmt = $link->prepare($sql)){
            // Bind variables to parameters
            $stmt->bind_param("ssissss", $param_name, $param_phone, $param_whatsapp, $param_type, $param_email, $param_location, $param_message);
            
            // Set parameters
            $param_name = $full_name;
            $param_phone = $phone_number;
            $param_whatsapp = $whatsapp_reachable;
            $param_type = $interior_type;
            $param_email = $email_address;
            $param_location = $property_location;
            $param_message = $message;
            
            // Execute prepared statement
            if($stmt->execute()){
                $successMessage = "Thank you! Your consultation request has been received. Our luxury design expert will connect with you in 24 hours.";
                
                // Clear post variables to clear form fields
                $_POST = array();
            } else {
                $errorMessage = "Oops! We encountered a system error. Please try again or call us directly.";
            }

            // Close statement
            $stmt->close();
        } else {
            $errorMessage = "Database prepared statement failed to execute.";
        }
    }
    
    // Close connection
    $link->close();
}

include 'includes/header.php';
?>

<!-- 1. Hero Section -->
<section class="inner-hero" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=80');">
    <div class="container">
        <div class="reveal reveal-up">
            <h1 class="inner-hero-title">Let's Connect</h1>
            <p class="inner-hero-subtitle">We would love to hear about your luxury space concept.</p>
        </div>
    </div>
</section>

<!-- 2. Split Contact Section -->
<section class="contact-page-section">
    <div class="container">
        <div class="contact-section-grid">
            
            <!-- Left Side: Luxury Contact Form -->
            <div class="contact-form-container reveal reveal-left">
                <h2 class="contact-form-title">Send a Request</h2>
                <p class="contact-form-desc">Fill out this secure form to schedule your initial consultation session.</p>
                
                <!-- Success/Error alert block -->
                <?php if(!empty($successMessage)): ?>
                    <div class="toast-msg toast-success">
                        <?php echo $successMessage; ?>
                    </div>
                <?php endif; ?>

                <?php if(!empty($errorMessage)): ?>
                    <div class="toast-msg toast-error">
                        <?php echo $errorMessage; ?>
                    </div>
                <?php endif; ?>

                <!-- Form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="luxury-form">
                    
                    <div class="form-group-row">
                        <!-- Full Name -->
                        <div class="form-group">
                            <label class="form-label" for="full_name">Full Name</label>
                            <input type="text" id="full_name" name="full_name" class="form-control" placeholder="John Doe" value="<?php echo isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : ''; ?>" required>
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="form-group">
                            <label class="form-label" for="phone_number">Phone Number</label>
                            <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="+91 98765 43210" value="<?php echo isset($_POST['phone_number']) ? htmlspecialchars($_POST['phone_number']) : ''; ?>" required>
                        </div>
                    </div>

                    <!-- WhatsApp unreachable Checkbox -->
                    <label class="checkbox-container">
                        You can reach me on WhatsApp
                        <input type="checkbox" name="whatsapp_reachable" value="1" <?php echo (isset($_POST['whatsapp_reachable'])) ? 'checked' : ''; ?>>
                        <span class="checkmark"></span>
                    </label>

                    <div class="form-group-row">
                        <!-- Type of Interior Select -->
                        <div class="form-group">
                            <label class="form-label" for="interior_type">Type of Interior</label>
                            <select id="interior_type" name="interior_type" class="form-control" required>
                                <option value="" disabled <?php echo !isset($_POST['interior_type']) ? 'selected' : ''; ?>>Select category</option>
                                <option value="Home Interior" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Home Interior') ? 'selected' : ''; ?>>Home Interior</option>
                                <option value="Kitchen Interior" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Kitchen Interior') ? 'selected' : ''; ?>>Kitchen Interior</option>
                                <option value="Bedroom Interior" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Bedroom Interior') ? 'selected' : ''; ?>>Bedroom Interior</option>
                                <option value="Living Room" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Living Room') ? 'selected' : ''; ?>>Living Room</option>
                                <option value="Commercial Interior" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Commercial Interior') ? 'selected' : ''; ?>>Commercial Interior</option>
                                <option value="Corporate Office" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Corporate Office') ? 'selected' : ''; ?>>Corporate Office</option>
                                <option value="Other" <?php echo (isset($_POST['interior_type']) && $_POST['interior_type'] == 'Other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label class="form-label" for="email_address">Email Address</label>
                            <input type="email" id="email_address" name="email_address" class="form-control" placeholder="name@domain.com" value="<?php echo isset($_POST['email_address']) ? htmlspecialchars($_POST['email_address']) : ''; ?>" required>
                        </div>
                    </div>

                    <!-- Property Location -->
                    <div class="form-group">
                        <label class="form-label" for="property_location">Property Location</label>
                        <input type="text" id="property_location" name="property_location" class="form-control" placeholder="e.g. Adyar, Chennai" value="<?php echo isset($_POST['property_location']) ? htmlspecialchars($_POST['property_location']) : ''; ?>" required>
                    </div>

                    <!-- Message -->
                    <div class="form-group">
                        <label class="form-label" for="message">Your Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Tell us about your space details and design goals..." required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary" style="width: 100%; border-radius: 8px;">
                        Submit Inquiry
                    </button>

                </form>
            </div>

            <!-- Right Side: Contact Information & Google Map -->
            <div class="contact-info-panel reveal reveal-right">
                
                <div class="info-cards">
                    <!-- Email Block -->
                    <div class="info-block">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div>
                            <div class="info-text-lbl">Our Email</div>
                            <a href="mailto:info@elegantdesigners.com" class="info-text-val">info@elegantdesigners.com</a>
                        </div>
                    </div>

                    <!-- Phone Block -->
                    <div class="info-block">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="info-text-lbl">Call Us</div>
                            <a href="tel:+919876543210" class="info-text-val">+91 98765 43210</a>
                        </div>
                    </div>

                    <!-- Address Block -->
                    <div class="info-block">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div>
                            <div class="info-text-lbl">Our Address</div>
                            <div class="info-text-val">
                                Elegant Designers<br>
                                No. 123, Main Road<br>
                                Adyar, Chennai - 600020<br>
                                Tamil Nadu, India
                            </div>
                        </div>
                    </div>

                    <!-- Hours Block -->
                    <div class="info-block">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div>
                            <div class="info-text-lbl">Hours of Operation</div>
                            <div class="info-text-val">
                                Monday - Saturday: 9:00 AM - 7:00 PM<br>
                                Sunday: Closed
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Google Map Embed -->
                <div class="map-wrapper">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.003662580196!2d80.2520330147929!3d12.997232990838968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1m3!2i25000!3d12.997232990838968!2d80.2520330147929!5m2!1sen!2sin" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
