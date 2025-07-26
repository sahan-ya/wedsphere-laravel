<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment Services & Booking - Wedding Planning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href={{ asset('css/style.css') }} rel="stylesheet">

</head>
<body class="Sbody">
    <div class="Scontainer">
        <header class="mb-10 relative">
            <a class="back-btn text-white" href="{{ url('/service') }}">back</a>
            <h1 class="section-title">Wedding Entertainment Services</h1>
            <p class="section-subtitle">DJs, live bands, and entertainment to make your celebration memorable.</p>

            <div class="cart-icon-container">
                <a href="{{ url('/shop') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="cart-count">0</span>
                </a>
            </div>
        </header>

        <section class="mb-12">
            <h2 class="section-title text-2xl mb-8">Our Entertainment Options</h2>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src={{ asset('images/e1.webp') }} alt="Live Wedding Band">
                    <div class="text-caption">Live Bands: From jazz to pop, set the perfect mood with live music.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/e2.webp') }} alt="Wedding DJ">
                    <div class="text-caption">Professional DJs: Keep the dance floor alive with custom playlists.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/e3.jpeg') }} alt="Cultural Performers">
                    <div class="text-caption">Cultural Performers: Add unique flair with traditional dances or acts.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/e4.webp') }} alt="Master of Ceremonies">
                    <div class="text-caption">Master of Ceremonies (MC): Engaging hosts to guide your event seamlessly.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/e5.webp') }} alt="Wedding Lighting Effects">
                    <div class="text-caption">Special Lighting & Effects: Enhance ambiance with custom lighting.</div>
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
            <h2 class="section-title text-2xl mb-8">Select Entertainment Services to Add to Cart</h2>
            <div class="max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Live Band Performance (3 hours)</h3>
                        <p class="text-gray-600">$1200.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Live Band Performance (3 hours)" data-price="1200">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Professional DJ Service (4 hours)</h3>
                        <p class="text-gray-600">$700.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Professional DJ Service (4 hours)" data-price="700">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Cultural Dance Performance</h3>
                        <p class="text-gray-600">$450.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Cultural Dance Performance" data-price="450">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Master of Ceremonies (MC)</h3>
                        <p class="text-gray-600">$300.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Master of Ceremonies (MC)" data-price="300">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Custom Lighting Effects Package</h3>
                        <p class="text-gray-600">$600.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Custom Lighting Effects Package" data-price="600">Add to Cart</button>
                </div>
            </div>
            <p class="text-center text-gray-600 mt-8">
                Prices are estimates and may vary based on duration and specific artist.
            </p>
        </section>

        <section class="mt-12">
            <h2 class="section-title text-2xl mb-8">Book Your Entertainment Service</h2>
            <p class="section-subtitle text-base mb-8">Let us help you create an unforgettable atmosphere for your wedding.</p>
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
                <div class="mb-6">
                    <label for="entertainmentPreference" class="form-label">Entertainment Preferences (Select all that apply)</label>
                    <select id="entertainmentPreference" name="entertainmentPreference[]" class="form-input h-32" multiple>
                        <option value="live-band">Live Band</option>
                        <option value="dj">Professional DJ</option>
                        <option value="cultural">Cultural Performers</option>
                        <option value="mc">Master of Ceremonies (MC)</option>
                        <option value="lighting">Special Lighting & Effects</option>
                        <option value="magician">Magician/Illusionist</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="notes" class="form-label">Additional Notes / Specific Requests</label>
                    <textarea id="notes" name="notes" class="form-textarea" placeholder="Describe your entertainment vision, preferred genres, etc."></textarea>
                </div>
                <button type="submit" class="submit-button bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">Submit Entertainment Request</button>
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
                    entertainmentPreference: Array.from(document.getElementById('entertainmentPreference').selectedOptions).map(option => option.value),
                    notes: document.getElementById('notes').value
                };

                console.log('Entertainment Booking Request:', formData);

                alert('Thank you! Your entertainment request has been sent. We will contact you shortly to discuss your event!');

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