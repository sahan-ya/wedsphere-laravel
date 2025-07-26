<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



   <!-- custom admin css file link  -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>
<body>
 @include('layouts.header')
    <!-- Services Section -->
    <section class="services" id="services">
        <a class="back-btn inline-block bg-gray-200 text-gray-700 py-2 px-4 rounded-lg mb-8 hover:bg-gray-300 transition-colors duration-300" href="{{ url('/') }}">
                <i class="fas fa-arrow-left mr-2"></i> back
            </a>
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Professional wedding services at your fingertips</p>
            
            <div class="services-grid">
                <div class="service-item fade-in">
                    <a href="{{ url('/saloon') }}" class="text-2xl font-semibold text-white mb-2">💄 Beauty & Salon</a>
                    <p>Professional makeup artists and salon services for your special day</p>
                </div>
                
                <div class="service-item fade-in">
                    <a href="{{ url('/photo') }}" class="text-2xl font-semibold text-white mb-2">📸 Photography</a>
                    <p>Capture every precious moment with our professional photographers</p>
                </div>
                
                <div class="service-item fade-in">
                    <a href="{{ url('/catering') }}" class="text-2xl font-semibold text-white mb-2">🍽️ Catering</a>
                    <p>Delicious cuisine options from traditional to contemporary menus</p>
                </div>
                
                <div class="service-item fade-in">
                    <a href="{{ url('/entertainment') }}" class="text-2xl font-semibold text-white mb-2">🎵 Entertainment</a>
                    <p>DJs, live bands, and entertainment to make your celebration memorable</p>
                </div>
                
                <div class="service-item fade-in">
                    <a href="{{ url('/deco') }}" class="text-2xl font-semibold text-white mb-2">🌸 Decoration</a>
                    <p>Beautiful floral arrangements and venue decoration services</p>
                </div>
                
               <div class="service-item fade-in">
                <a href="{{ url('/venue') }}" class="text-2xl font-semibold text-white mb-2">🏛️ Venue Booking</h3></a> 
                <p class="feature-description">Browse and book stunning venues including hotels, banquet halls, and unique locations with 360° virtual tours.</p>
                </div>

                <div class="service-item fade-in">
                    <a href="{{ url('/outfit') }}" class="text-2xl font-semibold text-white mb-2">👗 Wedding Outfits</a>
                    <p class="feature-description">Coordinated dress selection for bride and groom with filters by size, theme, culture, and rental options.</p>
                </div>

                <div class="service-item fade-in">
                    <a href="{{ url('/invitation') }}" class="text-2xl font-semibold text-white mb-2">💌 Digital Invitations</a>
                    <p class="feature-description">Create stunning digital wedding cards with live location links and track RSVPs effortlessly.</p>
            </div>

            <div class="service-item fade-in">
                    <a href="{{ url('/guest') }}" class="text-2xl font-semibold text-white mb-2">📋 Guest Management</a>
                    <p class="feature-description">Upload guest lists, send invitations, manage seating arrangements, and track attendance all in one place.</p>
            </div>

            <div class="service-item fade-in">
                    <a href="{{ url('/budget') }}" class="text-2xl font-semibold text-white mb-2">💰 Budget Control</a>
                    <p class="feature-description">Track expenses, manage deposits, monitor balances, and stay within budget with our comprehensive financial tools.</p>
            </div>

            </div>
        </div>
    </section>

       @include('layouts.footer') 
</body>
</html>