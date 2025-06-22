<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>
<body>
       @include('layouts.header') 

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Professional wedding services at your fingertips</p>
            
            <div class="services-grid">
                <div class="service-item fade-in">
                    <h3>💄 Beauty & Salon</h3>
                    <p>Professional makeup artists and salon services for your special day</p>
                </div>
                
                <div class="service-item fade-in">
                    <h3>📸 Photography</h3>
                    <p>Capture every precious moment with our professional photographers</p>
                </div>
                
                <div class="service-item fade-in">
                    <h3>🍽️ Catering</h3>
                    <p>Delicious cuisine options from traditional to contemporary menus</p>
                </div>
                
                <div class="service-item fade-in">
                    <h3>🎵 Entertainment</h3>
                    <p>DJs, live bands, and entertainment to make your celebration memorable</p>
                </div>
                
                <div class="service-item fade-in">
                    <h3>🌸 Decoration</h3>
                    <p>Beautiful floral arrangements and venue decoration services</p>
                </div>
                
                <div class="service-item fade-in">
                    <h3>📱 Live Location</h3>
                    <p>Share real-time venue location with your guests through digital invites</p>
                </div>
            </div>
        </div>
    </section>

       @include('layouts.footer') 
</body>
</html>