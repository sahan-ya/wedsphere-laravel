//slide show services
      let slideIndex = 1;
        showSlides(slideIndex);

        // Auto-play slides every 3 seconds (3000 milliseconds)
        let autoSlideInterval = setInterval(function() {
            plusSlides(1);
        }, 3000); // Change image every 3 seconds

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            // When a dot is clicked, clear the auto-play interval and restart it
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(function() {
                plusSlides(1);
            }, 3000);
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
 //outfit
        document.addEventListener('DOMContentLoaded', () => {
            const outfitsDisplay = document.getElementById('outfits-display');
            const applyFiltersBtn = document.getElementById('apply-filters-btn');
            const genderFilter = document.getElementById('gender-filter');
            const styleFilter = document.getElementById('style-filter');
            const priceRangeFilter = document.getElementById('price-range');
            const optionFilter = document.getElementById('option-filter');

            const modal = document.getElementById('outfit-details-modal');
            const closeButton = document.querySelector('.close-button');

            // Sample Outfit Data (in a real app, this would come from a backend/database)
            const allOutfits = [
                {
                    id: 1,
                    name: "Elegant Bridal Gown",
                    gender: "Bride",
                    style: "Traditional",
                    option: "Buy",
                    price: 2500,
                    description: "A breathtaking traditional bridal gown with intricate lace details and a long train. Perfect for a grand wedding.",
                    image: "https://placehold.co/400x500/fecaca/9f1239?text=Bride+Gown+1",
                    availability: "Available now"
                },
                {
                    id: 2,
                    name: "Modern Groom Suit",
                    gender: "Groom",
                    style: "Modern",
                    option: "Rental",
                    price: 350,
                    description: "A sharp, slim-fit modern suit in charcoal grey, ideal for a contemporary wedding. Includes jacket, trousers, and waistcoat.",
                    image: "https://placehold.co/400x500/bfdbfe/1e40af?text=Groom+Suit+1",
                    availability: "Available for rent from July 2025"
                },
                {
                    id: 3,
                    name: "Classic Ball Gown",
                    gender: "Bride",
                    style: "Traditional",
                    option: "Rental",
                    price: 700,
                    description: "A timeless ball gown with a voluminous skirt and delicate embroidery, perfect for a fairytale wedding.",
                    image: "https://placehold.co/400x500/fecaca/9f1239?text=Bride+Gown+2",
                    availability: "Available for rent, limited sizes"
                },
                {
                    id: 4,
                    name: "Royal Sherwani",
                    gender: "Groom",
                    style: "Traditional",
                    option: "Buy",
                    price: 1800,
                    description: "A majestic sherwani with gold embellishments, representing traditional elegance for the groom.",
                    image: "https://placehold.co/400x500/bfdbfe/1e40af?text=Groom+Sherwani",
                    availability: "Custom order, 4-6 weeks delivery"
                },
                {
                    id: 5,
                    name: "Bohemian Wedding Dress",
                    gender: "Bride",
                    style: "Modern",
                    option: "Buy",
                    price: 1200,
                    description: "A flowy, comfortable bohemian-style dress with a relaxed fit and unique lace patterns, great for outdoor weddings.",
                    image: "https://placehold.co/400x500/fecaca/9f1239?text=Bride+Boho",
                    availability: "In stock"
                },
                {
                    id: 6,
                    name: "Stylish Three-Piece Suit",
                    gender: "Groom",
                    style: "Modern",
                    option: "Buy",
                    price: 950,
                    description: "A versatile three-piece suit in a modern cut, suitable for various wedding themes. Available in multiple colors.",
                    image: "https://placehold.co/400x500/bfdbfe/1e40af?text=Groom+Suit+2",
                    availability: "Available in all standard sizes"
                },
                {
                    id: 7,
                    name: "Vintage Lace Gown",
                    gender: "Bride",
                    style: "Traditional",
                    option: "Buy",
                    price: 1600,
                    description: "An elegant vintage-inspired lace gown with a modest silhouette and timeless appeal.",
                    image: "https://placehold.co/400x500/fecaca/9f1239?text=Bride+Vintage",
                    availability: "Limited stock"
                },
                {
                    id: 8,
                    name: "Cultural Attire: Saree",
                    gender: "Bride",
                    style: "Traditional",
                    option: "Buy",
                    price: 800,
                    description: "A beautiful hand-embroidered traditional Indian saree, perfect for cultural ceremonies.",
                    image: "https://placehold.co/400x500/fecaca/9f1239?text=Bride+Saree",
                    availability: "Customizable, 2-3 weeks delivery"
                },
            ];

            // Function to render outfits
            const renderOutfits = (outfitsToRender) => {
                outfitsDisplay.innerHTML = ''; // Clear current display
                if (outfitsToRender.length === 0) {
                    outfitsDisplay.innerHTML = '<p class="text-center text-gray-600 col-span-full">No outfits found matching your criteria.</p>';
                    return;
                }
                outfitsToRender.forEach(outfit => {
                    const outfitCard = document.createElement('div');
                    outfitCard.className = 'outfit-card';
                    outfitCard.innerHTML = `
                        <img src="${outfit.image}" alt="${outfit.name}" class="w-full h-64 object-cover rounded-lg mb-4 shadow-sm">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">${outfit.name}</h3>
                        <p class="text-rose-600 font-semibold mb-2">${outfit.gender} - ${outfit.style}</p>
                        <p class="text-gray-600 mb-4 flex-grow">${outfit.description.substring(0, 100)}...</p>
                        <div class="mt-auto flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-700">$${outfit.price} <span class="text-base text-gray-500">(${outfit.option})</span></span>
                            <button class="view-details-btn px-6 py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                                data-outfit-id="${outfit.id}">
                                View Details
                            </button>
                        </div>
                    `;
                    outfitsDisplay.appendChild(outfitCard);
                });

                // Add event listeners to newly rendered "View Details" buttons
                document.querySelectorAll('.view-details-btn').forEach(button => {
                    button.addEventListener('click', (event) => {
                        const outfitId = parseInt(event.target.dataset.outfitId);
                        const selectedOutfit = allOutfits.find(o => o.id === outfitId);
                        if (selectedOutfit) {
                            showOutfitDetails(selectedOutfit);
                        }
                    });
                });
            };

            // Function to filter outfits
            const filterOutfits = () => {
                const selectedGender = genderFilter.querySelector('input[name="gender"]:checked').value;
                const selectedStyle = styleFilter.querySelector('input[name="style"]:checked').value;
                const selectedPriceRange = priceRangeFilter.value;
                const selectedOption = optionFilter.querySelector('input[name="option"]:checked').value;

                let filtered = allOutfits.filter(outfit => {
                    // Filter by Gender
                    if (selectedGender !== 'all' && outfit.gender !== selectedGender) {
                        return false;
                    }
                    // Filter by Style
                    if (selectedStyle !== 'all' && outfit.style !== selectedStyle) {
                        return false;
                    }
                    // Filter by Option (Rental/Buy)
                    if (selectedOption !== 'all' && outfit.option !== selectedOption) {
                        return false;
                    }
                    // Filter by Price Range
                    if (selectedPriceRange !== 'all') {
                        const [min, max] = selectedPriceRange.split('-').map(Number);
                        if (max) { // If there's a max value (e.g., 0-500, 501-1500)
                            if (outfit.price < min || outfit.price > max) {
                                return false;
                            }
                        } else { // If it's the 'max' range (e.g., 3001-max)
                            if (outfit.price < min) {
                                return false;
                            }
                        }
                    }
                    return true;
                });
                renderOutfits(filtered);
            };

            // Initial render of all outfits
            renderOutfits(allOutfits);

            // Event listener for apply filters button
            applyFiltersBtn.addEventListener('click', filterOutfits);

            // Event listeners for radio button changes to trigger filter
            genderFilter.addEventListener('change', filterOutfits);
            styleFilter.addEventListener('change', filterOutfits);
            optionFilter.addEventListener('change', filterOutfits);
            priceRangeFilter.addEventListener('change', filterOutfits);


            // Modal functionality
            const modalOutfitName = document.getElementById('modal-outfit-name');
            const modalOutfitImage = document.getElementById('modal-outfit-image');
            const modalOutfitGender = document.getElementById('modal-outfit-gender');
            const modalOutfitStyle = document.getElementById('modal-outfit-style');
            const modalOutfitOption = document.getElementById('modal-outfit-option');
            const modalOutfitPrice = document.getElementById('modal-outfit-price');
            const modalOutfitDescription = document.getElementById('modal-outfit-description');
            const modalOutfitAvailability = document.getElementById('modal-outfit-availability');

            const showOutfitDetails = (outfit) => {
                modalOutfitName.textContent = outfit.name;
                modalOutfitImage.src = outfit.image;
                modalOutfitGender.textContent = outfit.gender;
                modalOutfitStyle.textContent = outfit.style;
                modalOutfitOption.textContent = outfit.option;
                modalOutfitPrice.textContent = `$${outfit.price}`;
                modalOutfitDescription.textContent = outfit.description;
                modalOutfitAvailability.textContent = outfit.availability;
                modal.style.display = 'flex'; // Show modal
            };

            closeButton.addEventListener('click', () => {
                modal.style.display = 'none'; // Hide modal
            });

            // Close the modal if clicked outside of the modal content
            window.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                }
            });
        });




// --- Cart Functionality ---
let cart = [];

function saveCart() {
    localStorage.setItem('weddingCart', JSON.stringify(cart));
    updateCartCount();
}

function loadCart() {
    const storedCart = localStorage.getItem('weddingCart');
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

// Initialize slideshow and cart when the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    // Initialize slideshow if elements exist
    if (document.getElementsByClassName("mySlides").length > 0) {
        showSlides(slideIndex);
    }

    // Load cart
    loadCart();

    // Attach event listeners to all "Add to Cart" buttons
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const serviceName = this.dataset.name;
            const servicePrice = parseFloat(this.dataset.price);
            addItemToCart({ name: serviceName, price: servicePrice });
            alert(`${serviceName} has been added to your cart!`);
        });
    });
});

