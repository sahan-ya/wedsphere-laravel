<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty & Salon Slideshow & Booking - Wedding Planning</title>
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
            <h1 class="section-title">Beauty & Salon Services</h1>
            <p class="section-subtitle">Radiant transformations for your special day</p>

            <div class="cart-icon-container">
                <a href="{{ url('/shop') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="cart-count">0</span>
                </a>
            </div>
        </header>

        <section class="mb-12">
            <h2 class="section-title text-2xl mb-8">Our Signature Looks & Treatments</h2>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src={{ asset('images/s1.jpg') }}  alt="Bridal Makeup Example">
                    <div class="text-caption">Bridal Makeup: Flawless and stunning looks for your wedding day. Price: $250</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/s2.jpg') }}  alt="Elegant Hair Updo">
                    <div class="text-caption">Hair Styling: Elegant updos, flowing curls, and custom styles. Price: $180</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/s3.jpg') }}  alt="Pre-Wedding Skincare">
                    <div class="text-caption">Pre-Wedding Skincare: Treatments for a healthy, radiant glow. Price: $120</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/s4.jpg') }}  alt="Manicure and Pedicure">
                    <div class="text-caption">Manicure and Pedicure: Pampering for perfectly polished hands and feet. Price: $75</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/s6.jpg') }}  alt="Grooming for Groom">
                    <div class="text-caption">Grooming for Groom: Tailored services to ensure the groom looks his best. Price: $100</div>
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
            <h2 class="section-title text-2xl mb-8">Select Services to Add to Cart</h2>
            <div class="max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Bridal Makeup</h3>
                        <p class="text-gray-600">$250.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Bridal Makeup" data-price="250">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Hair Styling</h3>
                        <p class="text-gray-600">$180.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Hair Styling" data-price="180">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Pre-Wedding Skincare</h3>
                        <p class="text-gray-600">$120.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Pre-Wedding Skincare" data-price="120">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Manicure and Pedicure</h3>
                        <p class="text-gray-600">$75.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Manicure and Pedicure" data-price="75">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Grooming for Groom</h3>
                        <p class="text-gray-600">$100.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Grooming for Groom" data-price="100">Add to Cart</button>
                </div>
            </div>
        </section>

        <section class="mt-12">
            <h2 class="section-title text-2xl mb-8">Book Your Beauty & Salon Service</h2>
            <p class="section-subtitle text-base mb-8">Fill out the form below to schedule your appointment for selected services.</p>
            <form id="booking-form" class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md">
                <div class="mb-4">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Your Full Name" required>
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
                    <label for="preferredDate" class="form-label">Preferred Date</label>
                    <input type="date" id="preferredDate" name="preferredDate" class="form-input" required>
                </div>
                <div class="mb-6">
                    <label for="preferredTime" class="form-label">Preferred Time</label>
                    <input type="time" id="preferredTime" name="preferredTime" class="form-input" required>
                </div>
                <div class="mb-6">
                    <label for="specialRequests" class="form-label">Special Requests (Optional)</label>
                    <textarea id="specialRequests" name="specialRequests" class="form-textarea" placeholder="Any specific requirements or notes..."></textarea>
                </div>
                <button type="submit" class="submit-button bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">Submit Booking Request</button>
            </form>
        </section>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // --- Cart Functionality ---
        let cart = [];

        function saveCart() {
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
        }

        function loadCart() {
            const storedCart = localStorage.getItem('cart');
            if (storedCart) {
                cart = JSON.parse(storedCart);
                updateCartCount();
            }
        }

        function updateCartCount() {
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                const totalItems = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
                cartCountElement.textContent = totalItems;
                cartCountElement.style.display = totalItems > 0 ? 'inline-block' : 'none';
            }
        }

        function addItemToCart(item) {
            const existingItemIndex = cart.findIndex(cartItem => cartItem.name === item.name);
            if (existingItemIndex > -1) {
                cart[existingItemIndex].quantity = (cart[existingItemIndex].quantity || 1) + 1;
            } else {
                cart.push({ ...item, quantity: 1 });
            }
            saveCart();
        }

        // --- Event Listeners for Add to Cart Buttons ---
        document.addEventListener('DOMContentLoaded', () => {
            // Load cart on page load
            loadCart();

            const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    const itemName = event.target.dataset.name;
                    const itemPrice = parseFloat(event.target.dataset.price);

                    if (itemName && itemPrice) {
                        addItemToCart({ name: itemName, price: itemPrice });
                        alert(`${itemName} added to cart!`); // Optional: provide user feedback
                    } else {
                        console.error("Missing data-name or data-price attributes on the button.");
                    }
                });
            });
        });

    </script>
</body>
</html>