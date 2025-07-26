<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Outfits - WedSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href={{ asset('css/style.css') }} rel="stylesheet">

</head>
<body class="bg-gray-100 min-h-screen">


    <div class="container py-12 relative">
        <a class="back-btn" href="{{ url('/service') }}">back</a>
        <h1 class="text-5xl font-extrabold text-center text-rose-700 mb-12 drop-shadow-sm">Find Your Dream Wedding Outfit</h1>

        <div class="cart-icon-container">
            <a href="{{ url('/shop') }}" class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count" class="cart-count">0</span>
            </a>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md mb-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Filter Outfits</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">For Whom?</label>
                    <div class="flex flex-wrap gap-2 radio-button-group" id="gender-filter">
                        <input type="radio" id="gender-all" name="gender" value="all" checked><label for="gender-all">All</label>
                        <input type="radio" id="gender-bride" name="gender" value="Bride"><label for="gender-bride">Bride</label>
                        <input type="radio" id="gender-groom" name="gender" value="Groom"><label for="gender-groom">Groom</label>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Style</label>
                    <div class="flex flex-wrap gap-2 radio-button-group" id="style-filter">
                        <input type="radio" id="style-all" name="style" value="all" checked><label for="style-all">All</label>
                        <input type="radio" id="style-traditional" name="style" value="Traditional"><label for="style-traditional">Traditional</label>
                        <input type="radio" id="style-modern" name="style" value="Modern"><label for="style-modern">Modern</label>
                    </div>
                </div>

                <div>
                    <label for="price-range" class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>
                    <select id="price-range" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
                        <option value="all">All Prices</option>
                        <option value="0-500">$0 - $500</option>
                        <option value="501-1500">$501 - $1500</option>
                        <option value="1501-3000">$1501 - $3000</option>
                        <option value="3001-max">$3000+</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Option</label>
                    <div class="flex flex-wrap gap-2 radio-button-group" id="option-filter">
                        <input type="radio" id="option-all" name="option" value="all" checked><label for="option-all">All</label>
                        <input type="radio" id="option-rent" name="option" value="Rent"><label for="option-rent">Rent</label>
                        <input type="radio" id="option-buy" name="option" value="Buy"><label for="option-buy">Buy</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Coordinated Outfits Section -->
        <section class="bg-blue-50 p-6 rounded-xl shadow-md mb-8">
            <h2 class="text-2xl font-semibold text-blue-700 mb-4">Bride & Groom Coordinated Suggestions</h2>
            <div class="flex flex-col md:flex-row items-center justify-around gap-6">
                <div class="text-center">
                    <img src={{ asset('images/dress4.jpg') }} alt="Bride Coordinated Outfit" class="w-48 h-auto rounded-lg shadow-md mx-auto mb-3">
                    <p class="font-medium text-gray-800">Classic White Gown</p>
                    <p class="text-sm text-gray-600">Style: Traditional</p>
                </div>
                <div class="text-5xl text-blue-700 font-bold hidden md:block">&hearts;</div>
                <div class="text-center">
                    <img src={{ asset('images/dress4.jpg') }} alt="Groom Coordinated Outfit" class="w-48 h-auto rounded-lg shadow-md mx-auto mb-3">
                    <p class="font-medium text-gray-800">Navy Blue Tuxedo</p>
                    <p class="text-sm text-gray-600">Style: Modern</p>
                </div>
            </div>
            <p class="text-center text-sm text-gray-500 mt-4">These outfits are suggested for their complementary styles and colors.</p>
        </section>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="outfit-listings">
            <div class="outfit-card bg-white rounded-xl shadow-lg overflow-hidden" data-gender="Bride" data-style="Traditional" data-price="1800" data-option="Buy">
                <img src={{ asset('images/saree1.jpg') }} alt="Bridal Saree" class="w-auto h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Elegant Bridal Saree</h3>
                    <p class="text-gray-600 mb-2">For: Bride | Style: Traditional | Option: Buy</p>
                    <p class="text-rose-600 text-2xl font-bold mb-4">$1800</p>
                    <p class="text-gray-700 text-sm mb-4">A stunning, hand-embroidered bridal saree with intricate patterns, perfect for a traditional ceremony.</p>
                    <div class="flex justify-between items-center">
                        <button class="view-details-btn bg-rose-500 text-white px-5 py-2 rounded-lg hover:bg-rose-600 transition duration-300"
                                data-name="Elegant Bridal Saree" data-gender="Bride" data-style="Traditional" data-option="Buy" data-price="1800" data-description="A stunning, hand-embroidered bridal saree with intricate patterns, perfect for a traditional ceremony." data-availability="In Stock" data-image="https://placehold.co/400x300/e0e7ff/3f51b5?text=Bridal+Saree">
                            View Details
                        </button>
                        <button class="add-to-cart-btn bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                                data-name="Elegant Bridal Saree" data-price="1800">
                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="outfit-card bg-white rounded-xl shadow-lg overflow-hidden" data-gender="Groom" data-style="Modern" data-price="850" data-option="Rent">
                <img src={{ asset('images/dress4.jpg') }} alt="Groom Suit" class="w-auto h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Modern Groom's Suit</h3>
                    <p class="text-gray-600 mb-2">For: Groom | Style: Modern | Option: Rent</p>
                    <p class="text-rose-600 text-2xl font-bold mb-4">$850</p>
                    <p class="text-gray-700 text-sm mb-4">A sleek, tailor-fit modern suit for the groom, available for rent, perfect for a contemporary look.</p>
                    <div class="flex justify-between items-center">
                        <button class="view-details-btn bg-rose-500 text-white px-5 py-2 rounded-lg hover:bg-rose-600 transition duration-300"
                                data-name="Modern Groom's Suit" data-gender="Groom" data-style="Modern" data-option="Rent" data-price="850" data-description="A sleek, tailor-fit modern suit for the groom, available for rent, perfect for a contemporary look." data-availability="Available for Rent" data-image="https://placehold.co/400x300/d1e7dd/28a745?text=Groom+Suit">
                            View Details
                        </button>
                        <button class="add-to-cart-btn bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                                data-name="Modern Groom's Suit" data-price="850">
                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="outfit-card bg-white rounded-xl shadow-lg overflow-hidden" data-gender="Bride" data-style="Modern" data-price="2500" data-option="Buy">
                <img src={{ asset('images/dress5.jpg') }} alt="Wedding Gown" class="w-auto h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Chic Wedding Gown</h3>
                    <p class="text-gray-600 mb-2">For: Bride | Style: Modern | Option: Buy</p>
                    <p class="text-rose-600 text-2xl font-bold mb-4">$2500</p>
                    <p class="text-gray-700 text-sm mb-4">A contemporary wedding gown with minimalist design and elegant silhouette, perfect for a modern bride.</p>
                    <div class="flex justify-between items-center">
                        <button class="view-details-btn bg-rose-500 text-white px-5 py-2 rounded-lg hover:bg-rose-600 transition duration-300"
                                data-name="Chic Wedding Gown" data-gender="Bride" data-style="Modern" data-option="Buy" data-price="2500" data-description="A contemporary wedding gown with minimalist design and elegant silhouette, perfect for a modern bride." data-availability="In Stock" data-image="https://placehold.co/400x300/ffe0e6/c2185b?text=Wedding+Gown">
                            View Details
                        </button>
                        <button class="add-to-cart-btn bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                                data-name="Chic Wedding Gown" data-price="2500">
                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="outfit-card bg-white rounded-xl shadow-lg overflow-hidden" data-gender="Groom" data-style="Traditional" data-price="600" data-option="Rent">
                <img src={{ asset('images/L3.jpg') }} alt="Traditional Sherwani" class="w-auto h-90 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Classic Sherwani</h3>
                    <p class="text-gray-600 mb-2">For: Groom | Style: Traditional | Option: Rent</p>
                    <p class="text-rose-600 text-2xl font-bold mb-4">$600</p>
                    <p class="text-gray-700 text-sm mb-4">An elegantly designed traditional Sherwani for the groom, ideal for cultural ceremonies, available for rent.</p>
                    <div class="flex justify-between items-center">
                        <button class="view-details-btn bg-rose-500 text-white px-5 py-2 rounded-lg hover:bg-rose-600 transition duration-300"
                                data-name="Classic Sherwani" data-gender="Groom" data-style="Traditional" data-option="Rent" data-price="600" data-description="An elegantly designed traditional Sherwani for the groom, ideal for cultural ceremonies, available for rent." data-availability="Available for Rent" data-image="https://placehold.co/400x300/e6e6fa/6a5acd?text=Traditional+Sherwani">
                            View Details
                        </button>
                        <button class="add-to-cart-btn bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                                data-name="Classic Sherwani" data-price="600">
                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="outfit-card bg-white rounded-xl shadow-lg overflow-hidden" data-gender="Bride" data-style="Traditional" data-price="1500" data-option="Rent">
                <img src={{ asset('images/L2.jpg') }} alt="Lehenga Choli" class="w-auto h-90 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Grand Lehenga Choli</h3>
                    <p class="text-gray-600 mb-2">For: Bride | Style: Traditional | Option: Rent</p>
                    <p class="text-rose-600 text-2xl font-bold mb-4">$1500</p>
                    <p class="text-gray-700 text-sm mb-4">A magnificent Lehenga Choli with intricate embroidery, perfect for a grand traditional wedding, available for rent.</p>
                    <div class="flex justify-between items-center">
                        <button class="view-details-btn bg-rose-500 text-white px-5 py-2 rounded-lg hover:bg-rose-600 transition duration-300"
                                data-name="Grand Lehenga Choli" data-gender="Bride" data-style="Traditional" data-option="Rent" data-price="1500" data-description="A magnificent Lehenga Choli with intricate embroidery, perfect for a grand traditional wedding, available for rent." data-availability="Available for Rent" data-image="https://placehold.co/400x300/f0e68c/daa520?text=Lehenga+Choli">
                            View Details
                        </button>
                        <button class="add-to-cart-btn bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                                data-name="Grand Lehenga Choli" data-price="1500">
                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

             <div class="outfit-card bg-white rounded-xl shadow-lg overflow-hidden" data-gender="Groom" data-style="Modern" data-price="1100" data-option="Buy">
                <img src={{ asset('images/dress4.jpg') }} alt="Tuxedo" class="w-auto h-auto object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Designer Tuxedo</h3>
                    <p class="text-gray-600 mb-2">For: Groom | Style: Modern | Option: Buy</p>
                    <p class="text-rose-600 text-2xl font-bold mb-4">$1100</p>
                    <p class="text-gray-700 text-sm mb-4">A sophisticated designer tuxedo, perfect for a black-tie wedding or reception.</p>
                    <div class="flex justify-between items-center">
                        <button class="view-details-btn bg-rose-500 text-white px-5 py-2 rounded-lg hover:bg-rose-600 transition duration-300"
                                data-name="Designer Tuxedo" data-gender="Groom" data-style="Modern" data-option="Buy" data-price="1100" data-description="A sophisticated designer tuxedo, perfect for a black-tie wedding or reception." data-availability="In Stock" data-image="https://placehold.co/400x300/add8e6/4682b4?text=Tuxedo">
                            View Details
                        </button>
                        <button class="add-to-cart-btn bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                                data-name="Designer Tuxedo" data-price="1100">
                            <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="outfit-details-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h3 id="modal-outfit-name" class="text-3xl font-bold text-gray-800 mb-4"></h3>
            <img id="modal-outfit-image" src="" alt="Outfit Image" class="w-full h-64 object-cover rounded-lg mb-4 shadow-sm">
            <p class="text-gray-700 mb-2"><strong>For:</strong> <span id="modal-outfit-gender"></span></p>
            <p class="text-gray-700 mb-2"><strong>Style:</strong> <span id="modal-outfit-style"></span></p>
            <p class="text-gray-700 mb-2"><strong>Option:</strong> <span id="modal-outfit-option"></span></p>
            <p class="text-gray-700 mb-2"><strong>Price:</strong> <span id="modal-outfit-price" class="font-semibold text-rose-600"></span></p>
            <p class="text-gray-700 mb-4"><strong>Description:</strong> <span id="modal-outfit-description"></span></p>
            <p class="text-gray-700"><strong>Availability:</strong> <span id="modal-outfit-availability"></span></p>
            <button id="modal-add-to-cart-btn" class="mt-6 w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
            </button>
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

            // Outfit Filtering Logic (existing)
            const outfitCards = document.querySelectorAll('.outfit-card');
            const genderFilters = document.querySelectorAll('#gender-filter input[type="radio"]');
            const styleFilters = document.querySelectorAll('#style-filter input[type="radio"]');
            const priceRangeFilter = document.getElementById('price-range');
            const optionFilters = document.querySelectorAll('#option-filter input[type="radio"]');

            function filterOutfits() {
                const selectedGender = document.querySelector('#gender-filter input[type="radio"]:checked').value;
                const selectedStyle = document.querySelector('#style-filter input[type="radio"]:checked').value;
                const selectedPriceRange = priceRangeFilter.value;
                const selectedOption = document.querySelector('#option-filter input[type="radio"]:checked').value;

                outfitCards.forEach(card => {
                    const gender = card.dataset.gender;
                    const style = card.dataset.style;
                    const price = parseInt(card.dataset.price);
                    const option = card.dataset.option;

                    const matchesGender = (selectedGender === 'all' || gender === selectedGender);
                    const matchesStyle = (selectedStyle === 'all' || style === selectedStyle);
                    const matchesOption = (selectedOption === 'all' || option === selectedOption);

                    let matchesPrice = true;
                    if (selectedPriceRange !== 'all') {
                        const [min, max] = selectedPriceRange.split('-').map(Number);
                        if (selectedPriceRange === '3001-max') {
                            matchesPrice = price >= 3001;
                        } else {
                            matchesPrice = price >= min && price <= max;
                        }
                    }

                    if (matchesGender && matchesStyle && matchesPrice && matchesOption) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            genderFilters.forEach(filter => filter.addEventListener('change', filterOutfits));
            styleFilters.forEach(filter => filter.addEventListener('change', filterOutfits));
            priceRangeFilter.addEventListener('change', filterOutfits);
            optionFilters.forEach(filter => filter.addEventListener('change', filterOutfits));


            // Outfit Details Modal Logic (existing)
            const modal = document.getElementById('outfit-details-modal');
            const closeButton = document.querySelector('.close-button');
            const modalOutfitName = document.getElementById('modal-outfit-name');
            const modalOutfitImage = document.getElementById('modal-outfit-image');
            const modalOutfitGender = document.getElementById('modal-outfit-gender');
            const modalOutfitStyle = document.getElementById('modal-outfit-style');
            const modalOutfitOption = document.getElementById('modal-outfit-option');
            const modalOutfitPrice = document.getElementById('modal-outfit-price');
            const modalOutfitDescription = document.getElementById('modal-outfit-description');
            const modalOutfitAvailability = document.getElementById('modal-outfit-availability');
            const modalAddToCartBtn = document.getElementById('modal-add-to-cart-btn');


            document.querySelectorAll('.view-details-btn').forEach(button => {
                button.addEventListener('click', function() {
                    modalOutfitName.textContent = this.dataset.name;
                    modalOutfitImage.src = this.dataset.image;
                    modalOutfitGender.textContent = this.dataset.gender;
                    modalOutfitStyle.textContent = this.dataset.style;
                    modalOutfitOption.textContent = this.dataset.option;
                    modalOutfitPrice.textContent = `$${parseFloat(this.dataset.price).toFixed(2)}`;
                    modalOutfitDescription.textContent = this.dataset.description;
                    modalOutfitAvailability.textContent = this.dataset.availability;

                    // Set data attributes for the modal's Add to Cart button
                    modalAddToCartBtn.dataset.name = this.dataset.name;
                    modalAddToCartBtn.dataset.price = this.dataset.price;

                    modal.style.display = 'flex'; // Use flex to center the modal
                });
            });

            closeButton.addEventListener('click', () => {
                modal.style.display = 'none';
            });

            window.addEventListener('click', (event) => {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });

            // "Add to Cart" functionality for individual outfit cards
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const outfitName = this.dataset.name;
                    const outfitPrice = parseFloat(this.dataset.price);
                    addItemToCart({ name: outfitName, price: outfitPrice });
                    alert(`${outfitName} has been added to your cart!`);
                });
            });

            // "Add to Cart" functionality for the modal's button
            modalAddToCartBtn.addEventListener('click', function() {
                const outfitName = this.dataset.name;
                const outfitPrice = parseFloat(this.dataset.price);
                addItemToCart({ name: outfitName, price: outfitPrice });
                alert(`${outfitName} has been added to your cart!`);
                modal.style.display = 'none'; // Close modal after adding to cart
            });
        });

        function addItemToCart(item) {
            cart.push(item);
            saveCart();
        }
    </script>
</body>
</html>