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

