<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Find Your Perfect Venue</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link href={{ asset('css/style.css') }} rel="stylesheet">

  <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/cart.js') }}"></script>
  <style>
        /* Add custom styles for the cart icon and count */
        .cart-icon-container {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 10;
        }
        .cart-icon {
            font-size: 2rem;
            color: #667eea; /* A nice purple/blue color */
            text-decoration: none;
            position: relative;
            transition: color 0.3s ease;
        }
        .cart-icon:hover {
            color: #5a67d8;
        }
        .cart-count {
            background: #e53e3e; /* Red background for the count */
            color: white;
            border-radius: 50%;
            padding: 4px 8px;
            font-size: 0.75rem;
            font-weight: 600;
            position: absolute;
            top: -10px;
            right: -10px;
            transform: translate(20%, -20%);
            display: none; /* Hidden by default, shown when items are added */
        }
        .back-btn {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #667eea;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #5a67d8;
        }
        .venue-card {
            position: relative; /* Needed for absolute positioning of button */
            padding-bottom: 60px; /* Space for button at the bottom */
        }
        .venue-card .btn-primary {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%; /* Make button wider */
            background-color: #667eea; /* Consistent button color */
            border-color: #667eea;
            transition: background-color 0.3s ease;
        }
        .venue-card .btn-primary:hover {
            background-color: #5a67d8;
            border-color: #5a67d8;
        }
  </style>
</head>

<body class="venue-body">
    @include('layouts.header') 
  <div class="container relative">

  <a class="back-btn" href="{{ url('/service') }}">back</a> 
    <div class="cart-icon-container">
        <a href="{{ url('/shop') }}" class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span id="cart-count" class="cart-count">0</span>
        </a>
    </div>

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

    <div class="venue-grid">
      <div class="venue-card">
        <img src={{ asset('images/venue8.png') }} alt="Venue" class="venue-img">
        <h5>Cinnamon Lakeside</h5>
        <p>📍 Colombo</p>
        <p>👥 up to 400 guests</p>
        <p>💵 $5000</p>
        <button class="btn btn-primary add-to-cart-btn" data-name="Cinnamon Lakeside" data-price="5000">
            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
        </button>
      </div>

      <div class="venue-card">
        <img src={{ asset('images/venue2.jpeg') }} alt="Venue" class="venue-img">
        <h5>Shangri-La Hotel</h5>
        <p>📍 Colombo</p>
        <p>👥 up to 700 guests</p>
        <p>💵 $8000</p>
        <button class="btn btn-primary add-to-cart-btn" data-name="Shangri-La Hotel" data-price="8000">
            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
        </button>
      </div>

      <div class="venue-card">
        <img src={{ asset('images/venue3.jpeg') }} alt="Venue" class="venue-img">
        <h5>Pegasus Reef Hotel</h5>
        <p>📍 Wattala</p>
        <p>👥 up to 500 guests</p>
        <p>💵 $2500</p>
        <button class="btn btn-primary add-to-cart-btn" data-name="Pegasus Reef Hotel" data-price="2500">
            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
        </button>
      </div>

      <div class="venue-card">
        <img src={{ asset('images/venue4.jpeg') }} alt="Venue" class="venue-img">
        <h5>Sankalana Flora</h5>
        <p>📍 Kandy</p>
        <p>👥 up to 300 guests</p>
        <p>💵 $3500</p>
        <button class="btn btn-primary add-to-cart-btn" data-name="Sankalana Flora" data-price="3500">
            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
        </button>
      </div>

      <div class="venue-card">
        <img src={{ asset('images/venue8.png') }} alt="Venue" class="venue-img">
        <h5>Tamarind Hill Gate</h5>
        <p>📍 Galle</p>
        <p>👥 up to 250 guests</p>
        <p>💵 $1500</p>
        <button class="btn btn-primary add-to-cart-btn" data-name="Tamarind Hill Gate" data-price="1500">
            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
        </button>
      </div>

      <div class="venue-card">
        <img src={{ asset('images/venue5.jpg') }} alt="Venue" class="venue-img">
        <h5>The Blue Water</h5>
        <p>📍 Wadduwa</p>
        <p>👥 up to 600 guests</p>
        <p>💵 $4000</p>
        <button class="btn btn-primary add-to-cart-btn" data-name="The Blue Water" data-price="4000">
            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
        </button>
      </div>
    </div>
  </div>

  <script>
    // Cart functionality
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCountIcon();
    }

    function updateCartCountIcon() {
        const cartCountElement = document.getElementById('cart-count');
        if (cartCountElement) {
            cartCountElement.textContent = cart.length;
            cartCountElement.style.display = cart.length > 0 ? 'inline-block' : 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        updateCartCountIcon(); // Update cart count on page load

        // "Add to Cart" functionality for venue cards
        document.querySelectorAll('.add-to-cart-btn').forEach(button => {
            button.addEventListener('click', function() {
                const venueName = this.dataset.name;
                const venuePrice = parseFloat(this.dataset.price);
                addItemToCart({ name: venueName, price: venuePrice });
                alert(`${venueName} has been added to your cart!`);
            });
        });
    });

    function addItemToCart(item) {
        cart.push(item);
        saveCart();
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>