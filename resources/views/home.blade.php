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
  
<!--main section-->
<section class="hero m-0" id="home">
    <div class="container">
      <h1 class="logo">WedSphere</h1>
     <p class="tagline">Your Dream Wedding Starts Here</p>
      <a href="#features" class="cta-button">Start Planning Now</a>
    </div>
  

  <section class="image-carousel-section">
        <div class="container">
            <h2 class="section-title">Photo Highlights</h2>
            <div class="carousel-container">
                <div class="carousel-track">
                    <img src={{ asset('images/invite4.jpg') }} alt="Wedding Photo 1" class="carousel-image">
                    <img src={{ asset('images/invite5.jpg') }} alt="Wedding Photo 2" class="carousel-image">
                    <img src={{ asset('images/invite6.jpg') }} alt="Wedding Photo 3" class="carousel-image">
                    <img src={{ asset('images/invite5.jpg') }} alt="Wedding Photo 4" class="carousel-image">
                    <img src={{ asset('images/invite6.jpg') }} alt="Wedding Photo 5" class="carousel-image">
                </div>
                
            </div>
        </div>
    </section>

    </section>

   <!-- Hero Section -->
    <section class="hero02">
        <div class="container02">
            <div class="hero-content02">
                <h1 class="hero-h1">Your Fairy Tale Wedding Begins Here ✨</h1>
                <p class="hero-subtitle">Turn your dream wedding into reality with our magical planning platform that makes every moment perfect 💕</p>
                
                <div class="hero-buttons">
                    <a href="dashboard.php" class="btn-hero">🌟 Start Your Journey</a>
                    <a href="#features" class="btn-secondary">💖 Discover Magic</a>
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
</body>
</html>