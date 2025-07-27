<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catering Services & Booking - Wedding Planning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href={{ asset('css/style.css') }} rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/cart.js') }}"></script>
   
</head>
<body class="Sbody">
    <div class="Scontainer">
        <header class="mb-10 relative">
            <a class="back-btn text-white" href="{{ url('/service') }}">back</a>
            <h1 class="section-title">Exquisite Wedding Catering</h1>
            <p class="section-subtitle">Delicious cuisine options from traditional to contemporary menus.</p>

            <div class="cart-icon-container">
                <a href="{{ url('/shop') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="cart-count">0</span>
                </a>
            </div>
        </header>

        <section class="mb-12">
            
            <h2 class="section-title text-2xl mb-8">Our Culinary Delights</h2>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src={{ asset('images/c2.jpeg') }} alt="Traditional Wedding Cuisine">
                    <div class="text-caption">Traditional Cuisine: Authentic flavors for a classic celebration.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/c3.jpeg') }} alt="Contemporary Wedding Menu">
                    <div class="text-caption">Contemporary Menus: Modern dishes with a gourmet touch.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/c4.jpeg') }} alt="Wedding Dessert Bar">
                    <div class="text-caption">Decadent Dessert Bars: Sweet endings to your perfect day.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/c5.jpeg') }} alt="Live Cooking Stations">
                    <div class="text-caption">Live Cooking Stations: Interactive culinary experiences for your guests.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/c6.jpeg') }} alt="Beverage Service">
                    <div class="text-caption">Premium Beverage Service: Curated drinks to complement your meal.</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
            </div>
        </section>

        <section class="mt-12 mb-12">
            <h2 class="section-title text-2xl mb-8">Select Catering Packages to Add to Cart</h2>
            <div class="max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Standard Buffet Package</h3>
                        <p class="text-gray-600">$50.00 / guest</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Standard Buffet Package" data-price="50">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Premium Plated Dinner</h3>
                        <p class="text-gray-600">$80.00 / guest</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Premium Plated Dinner" data-price="80">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Dessert Bar & Coffee Station</h3>
                        <p class="text-gray-600">$15.00 / guest</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Dessert Bar & Coffee Station" data-price="15">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Customized Live Stations</h3>
                        <p class="text-gray-600">$25.00 / guest</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Customized Live Stations" data-price="25">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Beverage Package (Non-Alcoholic)</h3>
                        <p class="text-gray-600">$10.00 / guest</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Beverage Package (Non-Alcoholic)" data-price="10">Add to Cart</button>
                </div>
            </div>
            <p class="text-center text-gray-600 mt-8">
                Prices are per guest and may vary based on customization and final headcount.
            </p>
        </section>


        <section class="mt-12">
            <h2 class="section-title text-2xl mb-8">Book Your Catering Service</h2>
            <p class="section-subtitle text-base mb-8">Fill out the form below to request a consultation for your catering needs.</p>
            <form class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md">
                <div class="mb-4">
                    <label for="fullName" class="form-label">Your Full Name</label>
                    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="John Doe" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="your.email@example.com" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-input" placeholder="+1234567890" required>
                </div>
                <div class="mb-4">
                    <label for="eventType" class="form-label">Type of Event</label>
                    <select id="eventType" name="eventType" class="form-input" required>
                        <option value="">Select Event Type</option>
                        <option value="wedding">Wedding</option>
                        <option value="engagement">Engagement</option>
                        <option value="reception">Reception</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="eventDate" class="form-label">Preferred Event Date</label>
                    <input type="date" id="eventDate" name="eventDate" class="form-input" required>
                </div>
                <div class="mb-4">
                    <label for="eventTime" class="form-label">Preferred Event Time</label>
                    <input type="time" id="eventTime" name="eventTime" class="form-input" required>
                </div>
                <div class="mb-4">
                    <label for="guestCount" class="form-label">Estimated Guest Count</label>
                    <input type="number" id="guestCount" name="guestCount" class="form-input" placeholder="e.g., 150" min="1" required>
                </div>
                <div class="mb-6">
                    <label for="cateringPreference" class="form-label">Catering Preferences (Select all that apply)</label>
                    <select id="cateringPreference" name="cateringPreference[]" class="form-input h-32" multiple>
                        <option value="traditional">Traditional Cuisine</option>
                        <option value="contemporary">Contemporary Menu</option>
                        <option value="vegetarian">Vegetarian Options</option>
                        <option value="vegan">Vegan Options</option>
                        <option value="gluten-free">Gluten-Free Options</option>
                        <option value="dessert-bar">Dessert Bar</option>
                        <option value="live-stations">Live Cooking Stations</option>
                        <option value="beverage-service">Beverage Service</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="notes" class="form-label">Additional Notes / Specific Requests</label>
                    <textarea id="notes" name="notes" class="form-textarea" placeholder="Describe your vision, dietary restrictions, etc."></textarea>
                </div>
                <button type="submit" class="submit-button bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">Submit Catering Request</button>
            </form>
        </section>
    </div>
<script src="{{ asset('js/script.js') }}"></script>
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
            // Event listeners for "Add to Cart" buttons
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const serviceName = this.dataset.name;
                    const servicePrice = parseFloat(this.dataset.price);
                    addItemToCart({ name: serviceName, price: servicePrice });
                    alert(`${serviceName} has been added to your cart!`);
                });
            });

            // Booking form submission for inquiry, not directly adding to cart now
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                const formData = {
                    fullName: document.getElementById('fullName').value,
                    email: document.getElementById('email').value,
                    phone: document.getElementById('phone').value,
                    eventType: document.getElementById('eventType').value,
                    eventDate: document.getElementById('eventDate').value,
                    eventTime: document.getElementById('eventTime').value,
                    guestCount: document.getElementById('guestCount').value,
                    cateringPreference: Array.from(document.getElementById('cateringPreference').selectedOptions).map(option => option.value),
                    notes: document.getElementById('notes').value
                };

                console.log('Catering Booking Request:', formData);

                alert('Thank you! Your catering request has been sent. We will contact you shortly to discuss your menu!');

                // Optionally, clear the form
                this.reset();
            });
        });

        function addItemToCart(item) {
            cart.push(item);
            saveCart();
        }
    </script>
</body>
</html>