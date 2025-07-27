document.addEventListener('DOMContentLoaded', function() {
    const cartCountElement = document.getElementById('cart-count');

    function updateCartCount(count) {
        if (cartCountElement) {
            cartCountElement.textContent = count;
            if (count > 0) {
                cartCountElement.style.display = 'inline-block';
            } else {
                cartCountElement.style.display = 'none';
            }
        }
    }

    async function fetchCartCount() {
        try {
            const response = await fetch('/cart/items');
            if (response.ok) {
                const data = await response.json();
                updateCartCount(data.items.length);
            }
        } catch (error) {
            console.error('Error fetching cart count:', error);
        }
    }

    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', async function(event) {
            event.preventDefault();
            const itemName = this.getAttribute('data-name');
            const itemPrice = this.getAttribute('data-price');

            try {
                const response = await fetch('/cart/add', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ name: itemName, price: itemPrice })
                });

                if (response.ok) {
                    const data = await response.json();
                    updateCartCount(data.cartCount);
                    alert(`${itemName} has been added to your cart.`);
                } else {
                    console.error('Failed to add item to cart.');
                }
            } catch (error) {
                console.error('Error adding item to cart:', error);
            }
        });
    });

    fetchCartCount();
});