<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'WedSphere')</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

   <link href={{ asset('css/style.css') }} rel="stylesheet">

    <style>
        /* Add this to your style.css or within a <style> tag in the header */
        .nav-link.active {
            color: #ff69b4 !important; /* A distinct color, e.g., pink */
            font-weight: bold;
            border-bottom: 2px solid #ff69b4; /* A bottom border for emphasis */
            padding-bottom: 3px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <div class="nav-logo">💕WedSphere</div>

        <button class="hamburger" id="hamburgerBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>

      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
           <a class="nav-link" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
          </li>
           <li class="nav-item">
           <a class="nav-link" href="{{ url('/home2') }}">Features</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="{{ url('/service') }}">Services</a>
          </li>

        <div class="nav-auth">
                <a href="{{ url('/register') }}" class="btn-login">Register</a>
                <a href="{{ url('/login') }}" class="btn-signup">Login</a>
            </div>

        </ul>
      </div>
      </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname; // Get the path of the current URL
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link'); // Select all nav-links

            navLinks.forEach(link => {
                // Get the href attribute of the link
                const linkPath = new URL(link.href).pathname;

                // Check if the current path matches the link's path
                // Handle the root path '/' explicitly as it might be 'index.php' or similar in some setups
                if (currentPath === linkPath || (currentPath === '/' && linkPath === '/')) {
                    link.classList.add('active'); // Add the 'active' class
                }
            });

            // Existing function for the login button (if you still want it)
            const loginButton = document.getElementById('loginButton');
            if (loginButton) { // Check if the element exists
                loginButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    if (this.style.textDecoration === 'underline overline') {
                        this.style.textDecoration = 'none';
                        this.style.color = '';
                        this.style.fontWeight = '';
                    } else {
                        this.style.textDecoration = 'underline overline';
                        this.style.color = '#ff69b4';
                        this.style.fontWeight = 'bold';
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>