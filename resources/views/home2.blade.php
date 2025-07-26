<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WedSphere - Plan Your Perfect Wedding</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts (Poppins for elegance) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>
<body>
     @include('layouts.header')
    <!-- Hero Section -->
    <section class="hero02">
        <div class="container02">
            <div class="hero-content02">
                <h1 class="hero-h1">Your Fairy Tale Wedding Begins Here ✨</h1>
                <p class="hero-subtitle">Turn your dream wedding into reality with our magical planning platform that makes every moment perfect 💕</p>
                
                <div class="hero-buttons">
                    <a href="dashboard.php" class="btn-hero">🌟 Start Your Journey</a>
                    <a href="{{ url('/features') }}" class="btn-secondary">💖 Discover Magic</a>
                </div>

                <div class="stats">
                    <div class="stat-item">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">💕 Happy Couples</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">🏰 Dream Venues</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">✨ Perfect Days</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="contact-h2">Get in Touch With Us 💌</h2>
                <p class="contact-subtitle">We're here to help make your wedding dreams come true! Reach out to us anytime 💕</p>
            </div>
            
            <div class="row g-4">
                <!-- Contact Cards -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h4>Call Us 📞</h4>
                        <p><a href="tel:+94771234567">+94 77 123 4567</a></p>
                        <p><a href="tel:+94112345678">+94 11 234 5678</a></p>
                        <small>Mon - Sat: 9:00 AM - 8:00 PM</small>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Email Us ✉️</h4>
                        <p><a href="mailto:hello@wedsphere.lk">hello@wedsphere.lk</a></p>
                        <p><a href="mailto:support@wedsphere.lk">support@wedsphere.lk</a></p>
                        <small>We reply within 24 hours</small>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h4>Visit Us 🏢</h4>
                        <p>123 Wedding Lane,<br>
                        Colombo 03,<br>
                        Sri Lanka</p>
                        <small>By appointment only</small>
                    </div>
                </div>
            </div>
            
            <!-- Social Media Links -->
            <div class="social-contact text-center mt-5">
                <h4 class="mb-4">Follow Our Love Story 💕</h4>
                <div class="social-links">
                    <a href="https://facebook.com/wedsphere" target="_blank" class="social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://instagram.com/wedsphere" target="_blank" class="social-link instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/wedsphere" target="_blank" class="social-link twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://youtube.com/wedsphere" target="_blank" class="social-link youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://wa.me/94771234567" target="_blank" class="social-link whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <p class="mt-3">Get wedding inspiration and tips daily! 🌟</p>
            </div>
            
            <!-- Quick Contact Form -->
            <div class="quick-contact mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-form-card">
                            <h4 class="text-center mb-4">Quick Message 💌</h4>
                            <form class="contact-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="tel" class="form-control" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control">
                                            <option>Wedding Planning</option>
                                            <option>Venue Booking</option>
                                            <option>Vendor Services</option>
                                            <option>Other Inquiry</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="4" placeholder="Tell us about your dream wedding..."></textarea>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn-hero">💕 Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="terminol-h2">Love Stories From Happy Couples 💕</h2>
            </div>
            
            <div class="testimonial-slider">
                <div class="testimonial active">
                    <div class="testimonial-text">"WedSphere made our dream wedding come true! Everything was so easy and beautiful. We couldn't have asked for a more perfect day! 💖"</div>
                    <div class="testimonial-author">- Sarah & Mike ✨</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="section-header">
                <h2>Ready to Create Magic? ✨</h2>
                <p>Join thousands of happy couples who planned their perfect wedding with WedSphere! Your fairy tale starts here 💕</p>
                <br>
                <a href="dashboard.php" class="btn-hero">🌟 Start Planning for Free</a>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- Additional CSS for Contact Section -->
    <style>
        
    </style>
</body>
</html>