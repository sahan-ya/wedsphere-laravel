<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Find Your Perfect Venue</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- Google Fonts (Poppins for elegance) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
  
</head>

<body class="venue-body">
    @include('layouts.header') 
  <div class="container">

  <a class="back-btn" href="features.php">back</a> 
    <!-- Search and Filter -->
    <div class="search-bar text-center">
      <h2 class="mb-4">Find Your Perfect Venue</h2>
      <div class="row g-2 justify-content-center">
        <div class="col-md-4">
          <input type="text" class="form-control" placeholder="Search by location or name...">
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option>All Capacities</option>
            <option>50-100</option>
            <option>100-200</option>
            <option>200-300</option>
          </select>
        </div>
        <div class="col-md-2">
          <button class="btn btn-primary w-100">Search</button>
        </div>
      </div>
    </div>

    <!-- Venue Cards -->
    <div class="venue-grid">

      <!-- Venue 1 -->
      <div class="venue-card">
        <img src="https://via.placeholder.com/400x180?text=Grand+Ballroom" alt="Venue" class="venue-img">
        <h5>Grand Ballroom</h5>
        <p>📍 Colombo</p>
        <p>👥 200 guests</p>
        <p>💵 $2000</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

      <!-- Venue 2 -->
      <div class="venue-card">
        <img src="https://via.placeholder.com/400x180?text=Beach+Resort" alt="Venue" class="venue-img">
        <h5>Beach Resort</h5>
        <p>📍 Galle</p>
        <p>👥 150 guests</p>
        <p>💵 $1500</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

      <!-- Venue 3 -->
      <div class="venue-card">
        <img src="https://via.placeholder.com/400x180?text=Beach+Resort" alt="Venue" class="venue-img">
        <h5>Beach Resort</h5>
        <p>📍 Galle</p>
        <p>👥 100 guests</p>
        <p>💵 $1500</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

      <!-- Venue 4 -->
      <div class="venue-card">
        <img src="https://via.placeholder.com/400x180?text=Beach+Resort" alt="Venue" class="venue-img">
        <h5>Beach Resort</h5>
        <p>📍 Galle</p>
        <p>👥 250 guests</p>
        <p>💵 $1500</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

      <!-- Venue 5 -->
      <div class="venue-card">
        <img src="https://via.placeholder.com/400x180?text=Beach+Resort" alt="Venue" class="venue-img">
        <h5>Beach Resort</h5>
        <p>📍 Galle</p>
        <p>👥 200 guests</p>
        <p>💵 $1500</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

      <!-- Venue 6 -->
      <div class="venue-card">
        <img src="https://via.placeholder.com/400x180?text=Beach+Resort" alt="Venue" class="venue-img">
        <h5>Beach Resort</h5>
        <p>📍 Galle</p>
        <p>👥 150 guests</p>
        <p>💵 $1500</p>
        <a href="#" class="btn btn-primary">Book Now</a>
      </div>

    </div>
  </div>
    @include('layouts.footer') 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
