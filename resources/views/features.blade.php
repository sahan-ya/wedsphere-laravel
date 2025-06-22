<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>
<body>
   @include('layouts.header') 
    <!-- Features Grid -->
  <section class="features ">
    <div class="container">
        <h2 class="section-title fade-in">Complete Wedding Solution</h2>
        <p class="section-subtitle fade-in">Everything you need to plan your perfect wedding, all in one place</p>
      
        <div class="features-grid">
            <div class="feature-card fade-in">
                <span class="feature-icon">🏛️</span>
               <a href="{{ url('/venue') }}" class="feature-title">Venue Booking</h3></a> 
                <p class="feature-description">Browse and book stunning venues including hotels, banquet halls, and unique locations with 360° virtual tours.</p>
            </div>

           <div class="feature-card fade-in">
                    <span class="feature-icon">👥</span>
                    <a href="#" class="feature-title">Vendor Management</a>
                    <p class="feature-description">Connect with trusted caterers, photographers, decorators, DJs, and all wedding service providers in one platform.</p>
            </div>

            <div class="feature-card fade-in">
                    <span class="feature-icon">👗</span>
                    <a href="#" class="feature-title">Wedding Outfits</a>
                    <p class="feature-description">Coordinated dress selection for bride and groom with filters by size, theme, culture, and rental options.</p>
            </div>

            <div class="feature-card fade-in">
                    <span class="feature-icon">💌</span>
                    <a href="#" class="feature-title">Digital Invitations</a>
                    <p class="feature-description">Create stunning digital wedding cards with live location links and track RSVPs effortlessly.</p>
            </div>

            <div class="feature-card fade-in">
                    <span class="feature-icon">📋</span>
                    <a href="#" class="feature-title">Guest Management</a>
                    <p class="feature-description">Upload guest lists, send invitations, manage seating arrangements, and track attendance all in one place.</p>
            </div>

            <div class="feature-card fade-in">
                    <span class="feature-icon">💰</span>
                    <a href="#" class="feature-title">Budget Control</a>
                    <p class="feature-description">Track expenses, manage deposits, monitor balances, and stay within budget with our comprehensive financial tools.</p>
            </div>

        </div>
    </div>
  </section>
     @include('layouts.footer') 
</body>
</html>