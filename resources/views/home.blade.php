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
      <a href="{{ url('/features') }}" class="cta-button">Start Planning Now</a>
    </div>
  

  <section class="image-carousel-section">
        <div class="container">
            <h2 class="section-title"></h2>
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

   

 @include('layouts.footer')
</body>
</html>