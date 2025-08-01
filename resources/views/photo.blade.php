<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Slideshow & Booking - Wedding Planning</title>
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
            <h1 class="section-title">Professional Wedding Photography</h1>
            <p class="section-subtitle">Capturing your timeless moments with artistry and passion.</p>

                <div class="cart-icon-container">
                <a href="{{ url('/shop') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="cart-count">0</span>
                </a>
            </div>
        </header>



        <section class="mb-12">
            <h2 class="section-title text-2xl mb-8">Our Portfolio Highlights</h2>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src={{ asset('images/p1.jpg') }}  alt="Wedding Photography Moment 1">
                    <div class="text-caption">Cherished glances on your special day.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/p4.jpeg') }}  alt="Wedding Photography Moment 2">
                    <div class="text-caption">The joy of the first dance.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/p2.jpg') }}  alt="Wedding Photography Moment 3">
                    <div class="text-caption">Capturing every detail, big and small.</div>
                </div>

                <div class="mySlides fade">
                    <img src={{ asset('images/p3.jpg') }}  alt="Wedding Photography Moment 4">
                    <div class="text-caption">Beautiful portraits that last a lifetime.</div>
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
            </div>
        </section>

        <section class="mt-12 mb-12">
            <h2 class="section-title text-2xl mb-8">Select Services to Add to Cart</h2>
            <div class="max-w-2xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Full Day Photography Coverage</h3>
                        <p class="text-gray-600">$1500.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Full Day Photography Coverage" data-price="1500">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Engagement Photo Shoot</h3>
                        <p class="text-gray-600">$400.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Engagement Photo Shoot" data-price="400">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Wedding Album & Prints</h3>
                        <p class="text-gray-600">$600.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Wedding Album & Prints" data-price="600">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Additional Photographer</h3>
                        <p class="text-gray-600">$500.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Additional Photographer" data-price="500">Add to Cart</button>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Videography Add-on</h3>
                        <p class="text-gray-600">$1200.00</p>
                    </div>
                    <button class="add-to-cart-btn bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-900 transition duration-300"
                            data-name="Videography Add-on" data-price="1200">Add to Cart</button>
                </div>
            </div>
             <p class="text-center text-gray-600 mt-8">
                Prices are estimates and may vary based on package customization and duration.
            </p>
        </section>

        <section class="mt-12">
            <h2 class="section-title text-2xl mb-8">Book Your Photography Service</h2>
            <p class="section-subtitle text-base mb-8">Fill out the form below to inquire about availability and pricing.</p>

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
                    <label for="phone" class="form-label">Phone Number (Optional)</label>
                    <input type="tel" id="phone" name="phone" class="form-input" placeholder="+1 (555) 123-4567">
                </div>

                <div class="mb-4">
                    <label for="eventType" class="form-label">Type of Event</label>
                    <select id="eventType" name="eventType" class="form-input" required>
                        <option value="">Select Event Type</option>
                        <option value="wedding">Wedding</option>
                        <option value="engagement">Engagement</option>
                        <option value="pre-wedding">Pre-Wedding Shoot</option>
                        <option value="post-wedding">Post-Wedding Shoot</option>
                        <option value="other">Other (Specify in notes)</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="eventDate" class="form-label">Preferred Event Date</label>
                        <input type="date" id="eventDate" name="eventDate" class="form-input" required>
                    </div>
                    <div>
                        <label for="eventTime" class="form-label">Approx. Event Start Time</label>
                        <input type="time" id="eventTime" name="eventTime" class="form-input">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="interestedServices" class="form-label">Interested Photography Services (Select all that apply)</label>
                    <select id="interestedServices" name="interestedServices[]" class="form-input h-32" multiple>
                        <option value="full-day-coverage">Full Day Photography Coverage</option>
                        <option value="engagement-photo-shoot">Engagement Photo Shoot</option>
                        <option value="wedding-album-prints">Wedding Album & Prints</option>
                        <option value="additional-photographer">Additional Photographer</option>
                        <option value="videography-add-on">Videography Add-on</option>
                        <option value="other">Other (Please specify in notes)</option>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Hold Ctrl/Cmd to select multiple services.</p>
                </div>

                <div class="mb-6">
                    <label for="notes" class="form-label">Additional Details / Specific Requests</label>
                    <textarea id="notes" name="notes" class="form-textarea" placeholder="Tell us more about your vision, specific moments, or any questions you have..."></textarea>
                </div>

                <button type="submit" class="submit-button bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-300">
                    Request Photography Quote
                </button>
            </form>
        </section>
    </div>
<script src="{{ asset('js/script.js') }}"></script>
    <script>

        
</body>
</html>