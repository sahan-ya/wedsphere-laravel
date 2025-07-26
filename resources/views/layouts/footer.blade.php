<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<!-- Footer -->
  <footer class="text-white py-5 ">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4">
          <h5>About WedSphere</h5>
          <p>Your all-in-one platform for seamless wedding planning. Book venues, manage vendors, and track guests with ease.</p>
          <div class="social-icons">
            <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white me-2"><i class="fab fa-pinterest"></i></a>
          </div>
        </div>
        <div class="col-md-2 mb-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
            <li><a href="{{ url('/about') }}" class="text-white">About</a></li>
            <li><a href="{{ url('/home2') }}" class="text-white">Features</a></li>
            <li><a href="{{ url('/service') }}" class="text-white">Sevices</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-4">
          <h5>Support</h5>
          <ul class="list-unstyled">
            <li><a href="{{ url('/home2') }}" class="text-white">Contact Us</a></li>
            <li><a href="../faq.php" class="text-white">FAQ</a></li>
            <li><a href="../privacy.php" class="text-white">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-4">
          <h5>Newsletter</h5>
          <p>Subscribe for wedding tips and offers!</p>
          <form id="newsletterForm">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Your Email" required>
              <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
      <hr class="my-4 bg-light">
      <div class="text-center">
        <p class="mb-0">&copy; WedSphere. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS -->
  <script src="../assets/js/script.js"></script>
</body>
</html>