<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'WedSphere')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- Google Fonts (Poppins for elegance) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- custom admin css file link  -->
   <link href={{ asset('css/style.css') }} rel="stylesheet">

</head>
<body>
    <!--navgation bar-->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <div class="nav-logo">💕WedSphere</div>
          
        <!-- Hamburger Button for Small Screens -->
        <button class="hamburger" id="hamburgerBtn">&#9776;</button>

      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
           <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>

          </li>
           <li class="nav-item">
           <a class="nav-link" href="{{ url('/features') }}">Features</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="{{ url('/service') }}">Services</a>
          </li>

        <div class="nav-auth">
                <a href="#" class="btn-login">Login</a>
                <a href="register.php" class="btn-signup">Sign Up</a>
            </div>
          
        </ul>
      </div>
      </div>
    </nav>

  <!-- JS to toggle menu -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburger = document.getElementById('hamburgerBtn');
        const navMenu = document.getElementById('navbarMenu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('show');
        });
    });
</script>
    
</body>
</html>