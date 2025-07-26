<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart & Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

      <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 25px;
            text-align: center;
        }
        .section-subtitle {
            font-size: 1.1rem;
            color: #555;
            text-align: center;
            margin-bottom: 40px;
        }
        .cart-section {
            background: #f7fafc;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 40px;
            border: 2px solid #e2e8f0;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background: white;
            border-radius: 10px;
            margin-bottom: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .cart-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .cart-item-info {
            flex-grow: 1;
        }
        .cart-item-title {
            font-weight: 600;
            color: #2d3748;
            font-size: 1.1rem;
        }
        .cart-item-price {
            color: #667eea;
            font-weight: 700;
            font-size: 1.05rem;
        }
        .remove-btn {
            background: #e53e3e;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        .remove-btn:hover {
            background: #c53030;
        }
        .cart-total {
            text-align: right;
            font-size: 1.6rem;
            font-weight: 700;
            color: #2d3748;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #cbd5e0;
        }
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d3748;
        }
        .form-input, .form-textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-input:focus, .form-textarea:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
        }
        .form-textarea {
            height: 120px;
            resize: vertical;
        }
        .submit-button {
            background: #48bb78;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 5px 15px rgba(72, 187, 120, 0.3);
        }
        .submit-button:hover {
            background: #38a169;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(56, 161, 105, 0.4);
        }
        .submit-button:disabled {
            background: #a0aec0;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        .cart-count {
            background: #e53e3e;
            color: white;
            border-radius: 50%;
            padding: 3px 9px;
            font-size: 0.85rem;
            margin-left: 10px;
            vertical-align: super;
            display: inline-block;
        }
        .empty-cart {
            text-align: center;
            color: #718096;
            font-style: italic;
            padding: 30px;
            font-size: 1.1rem;
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
        /* Payment Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(5px);
        }
        .modal-overlay.show {
            display: flex;
        }
        .payment-modal {
            background: white;
            border-radius: 20px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            transform: scale(0.9);
            transition: transform 0.3s ease;
        }
        .modal-overlay.show .payment-modal {
            transform: scale(1);
        }
        .payment-step {
            display: none;
        }
        .payment-step.active {
            display: block;
        }
        .payment-method {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .payment-method:hover {
            border-color: #667eea;
            background: #f8f9ff;
        }
        .payment-method.selected {
            border-color: #667eea;
            background: #f8f9ff;
        }
        .payment-method input[type="radio"] {
            margin-right: 15px;
        }
        .payment-method i {
            font-size: 1.5rem;
            margin-right: 15px;
            width: 30px;
            text-align: center;
        }
        .card-input {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px;
            margin: 10px 0;
            width: 100%;
            font-size: 1rem;
            position: relative;
        }
        .card-input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
        }
        .card-input.valid {
            border-color: #48bb78;
            background: #f0fff4;
        }
        .card-input.invalid {
            border-color: #e53e3e;
            background: #fff5f5;
        }
        .card-input-container {
            position: relative;
        }
        .card-type-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5rem;
            pointer-events: none;
        }
        .real-time-validation {
            font-size: 0.875rem;
            margin-top: 5px;
            padding: 5px;
            border-radius: 4px;
        }
        .validation-success {
            color: #48bb78;
            background: #f0fff4;
        }
        .validation-error {
            color: #e53e3e;
            background: #fff5f5;
        }
        .processing-animation {
            text-align: center;
            padding: 40px;
        }
        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #667eea;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            margin: 20px 0;
            overflow: hidden;
        }
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            width: 0%;
            transition: width 0.5s ease;
            border-radius: 4px;
        }

        /* Enhanced Success Animation Styles */
        .success-modal {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 50px 40px;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }
        .success-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            animation: bounceIn 0.8s ease-out;
        }
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #ffd700;
            animation: confetti-fall 3s ease-in-out infinite;
        }
        .confetti:nth-child(2n) { 
            background: #ff6b6b; 
            animation-delay: 0.2s;
            left: 20%;
        }
        .confetti:nth-child(3n) { 
            background: #4ecdc4; 
            animation-delay: 0.4s;
            left: 40%;
        }
        .confetti:nth-child(4n) { 
            background: #45b7d1; 
            animation-delay: 0.6s;
            left: 60%;
        }
        .confetti:nth-child(5n) { 
            background: #96ceb4; 
            animation-delay: 0.8s;
            left: 80%;
        }
        @keyframes bounceIn {
            0% { transform: scale(0.3); opacity: 0; }
            50% { transform: scale(1.05); }
            70% { transform: scale(0.9); }
            100% { transform: scale(1); opacity: 1; }
        }
        @keyframes confetti-fall {
            0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
        }
        .success-text {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .success-subtext {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
            animation: slideInUp 1s ease-out 0.5s both;
        }
        @keyframes slideInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .booking-details {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
            text-align: left;
            animation: fadeInScale 1s ease-out 1s both;
        }
        @keyframes fadeInScale {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        .close-success-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            animation: glow 2s ease-in-out infinite alternate;
        }
        @keyframes glow {
            from { box-shadow: 0 0 5px rgba(255, 255, 255, 0.5); }
            to { box-shadow: 0 0 25px rgba(255, 255, 255, 0.8), 0 0 50px rgba(255, 255, 255, 0.6); }
        }
        .close-success-btn:hover {
            background: white;
            color: #667eea;
            transform: scale(1.05);
        }
        .creative-message {
            font-size: 1.1rem;
            margin: 20px 0;
            animation: typewriter 3s steps(60) 2s both;
            white-space: nowrap;
            overflow: hidden;
            border-right: 2px solid white;
        }
        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }
        .floating-hearts {
            position: absolute;
            font-size: 2rem;
            animation: float-hearts 4s ease-in-out infinite;
            opacity: 0.7;
        }
        @keyframes float-hearts {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-20px) rotate(10deg); }
            50% { transform: translateY(-10px) rotate(-5deg); }
            75% { transform: translateY(-30px) rotate(15deg); }
        }
        .card-preview {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 20px;
            border-radius: 15px;
            margin: 15px 0;
            font-family: 'Courier New', monospace;
            position: relative;
            min-height: 120px;
        }
        .card-number-display {
            font-size: 1.2rem;
            letter-spacing: 2px;
            margin: 10px 0;
        }
        .card-holder-display {
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-top: 15px;
        }
        .card-expiry-display {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body class="shopbody">
    
    <div class="container">
    
        <a class="back-btn inline-block bg-gray-200 text-pink-700 py-2 px-4 rounded-lg mb-8 hover:bg-pink-300 transition-colors duration-300" href="/service">
            <i class="fas fa-arrow-left mr-2"></i>Back to Services
        </a>

        <section class="cart-section">
            <h2 class="section-title text-2xl mb-6">
                Your Shopping Cart
                <span id="cart-count-display" class="cart-count">0</span>
            </h2>
            <div id="cart-items">
                <div class="empty-cart">
                    Your cart is empty. Add some services to get started!
                </div>
            </div>
            <div id="cart-total" class="cart-total" style="display: none;">
                Total: $<span id="total-amount">0.00</span>
            </div>
        </section>

        <section class="mt-12">
            <h2 class="section-title text-2xl mb-8">Complete Your Booking</h2>
            <p class="section-subtitle text-base mb-8">Fill out the form below to finalize your appointment with your selected services.</p>
            <form id="booking-form" class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md">
                <div class="mb-5">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Your Full Name" required>
                </div>
                <div class="mb-5">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="your.email@example.com" required>
                </div>
                <div class="mb-5">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-input" placeholder="+1234567890" required>
                </div>
                <div class="mb-5">
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
                <button type="submit" class="submit-button">
                    <i class="fas fa-credit-card mr-2"></i>Proceed to Payment
                </button>
            </form>
        </section>
    </div>

     <!-- Payment Modal -->
    <div id="payment-modal" class="modal-overlay">
        <div class="payment-modal">
            <!-- Step 1: Payment Method Selection -->
            <div id="payment-step-1" class="payment-step active">
                <h3 class="text-2xl font-bold text-center mb-6">Choose Payment Method</h3>
                <div class="payment-methods">
                    <div class="payment-method" data-method="card">
                        <input type="radio" name="payment-method" value="card" checked>
                        <i class="fas fa-credit-card text-blue-600"></i>
                        <span class="font-semibold">Credit/Debit Card</span>
                    </div>
                    <div class="payment-method" data-method="paypal">
                        <input type="radio" name="payment-method" value="paypal">
                        <i class="fab fa-paypal text-blue-800"></i>
                        <span class="font-semibold">PayPal</span>
                    </div>
                    <div class="payment-method" data-method="apple">
                        <input type="radio" name="payment-method" value="apple">
                        <i class="fab fa-apple-pay text-gray-800"></i>
                        <span class="font-semibold">Apple Pay</span>
                    </div>
                    <div class="payment-method" data-method="google">
                        <input type="radio" name="payment-method" value="google">
                        <i class="fab fa-google-pay text-green-600"></i>
                        <span class="font-semibold">Google Pay</span>
                    </div>
                </div>
                <div class="flex justify-between mt-8">
                    <button type="button" id="cancel-payment" class="px-6 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition-colors">Cancel</button>
                    <button type="button" id="continue-payment" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">Continue</button>
                </div>
            </div>

            <!-- Step 2: Payment Details -->
            <div id="payment-step-2" class="payment-step">
                <h3 class="text-2xl font-bold text-center mb-6">Payment Details</h3>
                
                <!-- Real-time Card Preview -->
                <div id="card-preview" class="card-preview">
                    <div class="card-number-display" id="preview-number">•••• •••• •••• ••••</div>
                    <div class="card-holder-display" id="preview-name">CARD HOLDER NAME</div>
                    <div class="card-expiry-display" id="preview-expiry">MM/YY</div>
                </div>

                <div id="card-form">
                    <div class="card-input-container">
                        <input type="text" class="card-input" placeholder="Card Number" maxlength="19" id="card-number">
                        <i id="card-type-icon" class="card-type-icon fas fa-credit-card"></i>
                    </div>
                    <div id="card-number-validation" class="real-time-validation"></div>
                    
                    <div class="flex gap-4">
                        <div class="flex-1">
                            <input type="text" class="card-input" placeholder="MM/YY" maxlength="5" id="card-expiry">
                            <div id="card-expiry-validation" class="real-time-validation"></div>
                        </div>
                        <div class="flex-1">
                            <input type="text" class="card-input" placeholder="CVV" maxlength="4" id="card-cvv">
                            <div id="card-cvv-validation" class="real-time-validation"></div>
                        </div>
                    </div>
                    
                    <input type="text" class="card-input" placeholder="Cardholder Name" id="card-name">
                    <div id="card-name-validation" class="real-time-validation"></div>
                </div>
                
                <div class="text-center mt-6">
                    <p class="text-lg font-semibold">Total: $<span id="payment-total">0.00</span></p>
                </div>
                <div class="flex justify-between mt-8">
                    <button type="button" id="back-payment" class="px-6 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition-colors">Back</button>
                    <button type="button" id="process-payment" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors" disabled>
                        <i class="fas fa-lock mr-2"></i>Pay Now
                    </button>
                </div>
            </div>

            <!-- Step 3: Processing -->
            <div id="payment-step-3" class="payment-step">
                <div class="processing-animation">
                    <div class="spinner"></div>
                    <h3 class="text-xl font-semibold mb-4">Processing Your Payment</h3>
                    <p class="text-gray-600 mb-4">Please wait while we securely process your transaction...</p>
                    <div class="progress-bar">
                        <div class="progress-fill" id="progress-fill"></div>
                    </div>
                    <p id="processing-status" class="text-sm text-gray-500">Verifying payment information...</p>
                </div>
            </div>

            <!-- Step 4: Success -->
            <div id="payment-step-4" class="payment-step">
                <div class="success-modal">
                    <div class="confetti" style="left: 10%;"></div>
                    <div class="confetti" style="left: 30%;"></div>
                    <div class="confetti" style="left: 50%;"></div>
                    <div class="confetti" style="left: 70%;"></div>
                    <div class="confetti" style="left: 90%;"></div>
                    
                    <div class="floating-hearts" style="top: 20%; left: 15%;">💕</div>
                    <div class="floating-hearts" style="top: 30%; right: 20%; animation-delay: 1s;">💖</div>
                    <div class="floating-hearts" style="top: 40%; left: 80%; animation-delay: 2s;">💝</div>
                    
                    <div class="success-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="success-text" id="dynamic-success-title">🎉 Payment Successful! 🎉</div>
                    <div class="success-subtext" id="dynamic-success-subtitle">Your dream wedding services are booked!</div>
                    
                    <div class="creative-message" id="creative-message">
                        ✨ Your magical moment is now secured! ✨
                    </div>
                    
                    <div class="booking-details">
                        <h4 class="font-bold mb-3">🌟 Booking Confirmation 🌟</h4>
                        <div id="booking-summary"></div>
                        <p class="mt-3"><strong>💳 Payment Method:</strong> <span id="payment-method-display"></span></p>
                        <p><strong>🔒 Transaction ID:</strong> <span id="transaction-id"></span></p>
                    </div>
                    
                    <p class="text-sm opacity-90 mb-6" id="creative-email-message">
                        📧 A beautifully crafted confirmation email is flying to your inbox right now! 📧
                    </p>
                    
                    <button type="button" id="close-success" class="close-success-btn">
                        Continue Planning Your Perfect Day ✨
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Use a consistent key for localStorage across all pages for the cart
        const CART_STORAGE_KEY = 'weddingCart';
        let cart = JSON.parse(localStorage.getItem(CART_STORAGE_KEY)) || [];
        let totalAmount = 0;
        let selectedPaymentMethod = 'card';
        let currentPaymentStep = 1;
        let cardValidation = {
            number: false,
            expiry: false,
            cvv: false,
            name: false
        };

        // Sample cart data for demonstration
        if (cart.length === 0) {
            cart = [
                { name: "Bridal Makeup & Hair", price: 299.99, quantity: 1 },
                { name: "Photography Package", price: 899.99, quantity: 1 },
                { name: "Floral Arrangements", price: 450.00, quantity: 1 }
            ];
            saveCart();
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateCartDisplay();
            updateGlobalCartCount();
            document.getElementById('preferredDate').min = new Date().toISOString().split('T')[0];
            setupPaymentModal();
            setupRealTimeCardValidation();
        });

        function saveCart() {
            localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cart));
            updateGlobalCartCount();
        }

        function updateCartDisplay() {
            const cartItemsContainer = document.getElementById('cart-items');
            cartItemsContainer.innerHTML = '';
            totalAmount = 0;

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<div class="empty-cart">Your cart is empty. Add some services to get started!</div>';
                document.getElementById('cart-total').style.display = 'none';
                document.getElementById('cart-count-display').style.display = 'none';
                document.querySelector('.submit-button').disabled = true;
                return;
            }

            cart.forEach((item, index) => {
                const cartItemDiv = document.createElement('div');
                cartItemDiv.classList.add('cart-item');
                const itemQuantity = item.quantity ? ` (x${item.quantity})` : '';
                cartItemDiv.innerHTML = `
                    <div class="cart-item-info">
                        <div class="cart-item-title">${item.name}${itemQuantity}</div>
                        <div class="cart-item-price">$${(item.price * (item.quantity || 1)).toFixed(2)}</div>
                    </div>
                    <button class="remove-btn" data-index="${index}">Remove</button>
                `;
                cartItemsContainer.appendChild(cartItemDiv);
                totalAmount += (item.price * (item.quantity || 1));
            });

            document.getElementById('total-amount').textContent = totalAmount.toFixed(2);
            document.getElementById('cart-total').style.display = 'block';
            document.getElementById('cart-count-display').style.display = 'inline-block';
            
            document.getElementById('cart-count-display').textContent = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);
            
            document.querySelector('.submit-button').disabled = false;

            // Add event listeners to new remove buttons
            document.querySelectorAll('.remove-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const index = parseInt(this.dataset.index);
                    
                    if (cart[index].quantity > 1) {
                        cart[index].quantity--;
                    } else {
                        cart.splice(index, 1);
                    }
                    
                    saveCart();
                    updateCartDisplay();
                });
            });
        }

        function updateGlobalCartCount() {
            const totalItemsInCart = cart.reduce((sum, item) => sum + (item.quantity || 1), 0);

            const saloonCartCountElement = document.getElementById('cart-count');
            if (saloonCartCountElement) {
                saloonCartCountElement.textContent = totalItemsInCart;
                saloonCartCountElement.style.display = totalItemsInCart > 0 ? 'inline-block' : 'none';
            }

            const shopCartCountDisplayElement = document.getElementById('cart-count-display');
            if (shopCartCountDisplayElement) {
                shopCartCountDisplayElement.textContent = totalItemsInCart;
                shopCartCountDisplayElement.style.display = totalItemsInCart > 0 ? 'inline-block' : 'none';
            }
        }

        // Real-time Card Validation Functions
        function setupRealTimeCardValidation() {
            const cardNumber = document.getElementById('card-number');
            const cardExpiry = document.getElementById('card-expiry');
            const cardCvv = document.getElementById('card-cvv');
            const cardName = document.getElementById('card-name');

            // Card number validation and formatting
            cardNumber.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\s+/g, '').replace(/[^0-9]/gi, '');
                let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
                e.target.value = formattedValue;
                
                validateCardNumber(value);
                updateCardPreview();
                updateCardType(value);
            });

            // Expiry date validation and formatting
            cardExpiry.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.length >= 2) {
                    value = value.substring(0, 2) + '/' + value.substring(2, 4);
                }
                e.target.value = value;
                
                validateCardExpiry(value);
                updateCardPreview();
            });

            // CVV validation
            cardCvv.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                e.target.value = value;
                validateCardCvv(value);
            });

            // Name validation
            cardName.addEventListener('input', function(e) {
                let value = e.target.value.replace(/[^a-zA-Z\s]/g, '');
                e.target.value = value;
                validateCardName(value);
                updateCardPreview();
            });
        }

        function validateCardNumber(number) {
            const validation = document.getElementById('card-number-validation');
            const input = document.getElementById('card-number');
            
            if (number.length === 0) {
                validation.textContent = '';
                input.classList.remove('valid', 'invalid');
                cardValidation.number = false;
            } else if (number.length < 13) {
                validation.textContent = '❌ Card number is too short';
                validation.className = 'real-time-validation validation-error';
                input.classList.remove('valid');
                input.classList.add('invalid');
                cardValidation.number = false;
            } else if (!luhnCheck(number)) {
                validation.textContent = '❌ Invalid card number';
                validation.className = 'real-time-validation validation-error';
                input.classList.remove('valid');
                input.classList.add('invalid');
                cardValidation.number = false;
            } else {
                const lastFour = number.slice(-4);
                validation.textContent = `✅ Valid card ending in ${lastFour}`;
                validation.className = 'real-time-validation validation-success';
                input.classList.remove('invalid');
                input.classList.add('valid');
                cardValidation.number = true;
            }
            
            updatePaymentButton();
        }

        function validateCardExpiry(expiry) {
            const validation = document.getElementById('card-expiry-validation');
            const input = document.getElementById('card-expiry');
            
            if (expiry.length === 0) {
                validation.textContent = '';
                input.classList.remove('valid', 'invalid');
                cardValidation.expiry = false;
            } else if (expiry.length < 5) {
                validation.textContent = '❌ Enter MM/YY format';
                validation.className = 'real-time-validation validation-error';
                input.classList.remove('valid');
                input.classList.add('invalid');
                cardValidation.expiry = false;
            } else {
                const [month, year] = expiry.split('/');
                const currentDate = new Date();
                const currentYear = currentDate.getFullYear() % 100;
                const currentMonth = currentDate.getMonth() + 1;
                
                if (parseInt(month) < 1 || parseInt(month) > 12) {
                    validation.textContent = '❌ Invalid month';
                    validation.className = 'real-time-validation validation-error';
                    input.classList.remove('valid');
                    input.classList.add('invalid');
                    cardValidation.expiry = false;
                } else if (parseInt(year) < currentYear || (parseInt(year) === currentYear && parseInt(month) < currentMonth)) {
                    validation.textContent = '❌ Card has expired';
                    validation.className = 'real-time-validation validation-error';
                    input.classList.remove('valid');
                    input.classList.add('invalid');
                    cardValidation.expiry = false;
                } else {
                    validation.textContent = '✅ Valid expiry date';
                    validation.className = 'real-time-validation validation-success';
                    input.classList.remove('invalid');
                    input.classList.add('valid');
                    cardValidation.expiry = true;
                }
            }
            
            updatePaymentButton();
        }

        function validateCardCvv(cvv) {
            const validation = document.getElementById('card-cvv-validation');
            const input = document.getElementById('card-cvv');
            
            if (cvv.length === 0) {
                validation.textContent = '';
                input.classList.remove('valid', 'invalid');
                cardValidation.cvv = false;
            } else if (cvv.length < 3) {
                validation.textContent = '❌ CVV too short';
                validation.className = 'real-time-validation validation-error';
                input.classList.remove('valid');
                input.classList.add('invalid');
                cardValidation.cvv = false;
            } else if (cvv.length >= 3) {
                validation.textContent = '✅ Valid CVV';
                validation.className = 'real-time-validation validation-success';
                input.classList.remove('invalid');
                input.classList.add('valid');
                cardValidation.cvv = true;
            }
            
            updatePaymentButton();
        }

        function validateCardName(name) {
            const validation = document.getElementById('card-name-validation');
            const input = document.getElementById('card-name');
            
            if (name.length === 0) {
                validation.textContent = '';
                input.classList.remove('valid', 'invalid');
                cardValidation.name = false;
            } else if (name.length < 3) {
                validation.textContent = '❌ Name too short';
                validation.className = 'real-time-validation validation-error';
                input.classList.remove('valid');
                input.classList.add('invalid');
                cardValidation.name = false;
            } else {
                validation.textContent = '✅ Valid name';
                validation.className = 'real-time-validation validation-success';
                input.classList.remove('invalid');
                input.classList.add('valid');
                cardValidation.name = true;
            }
            
            updatePaymentButton();
        }

        function updateCardType(number) {
            const icon = document.getElementById('card-type-icon');
            
            if (number.startsWith('4')) {
                icon.className = 'card-type-icon fab fa-cc-visa';
                icon.style.color = '#1A1F71';
            } else if (number.startsWith('5') || number.startsWith('2')) {
                icon.className = 'card-type-icon fab fa-cc-mastercard';
                icon.style.color = '#EB001B';
            } else if (number.startsWith('3')) {
                icon.className = 'card-type-icon fab fa-cc-amex';
                icon.style.color = '#006FCF';
            } else if (number.startsWith('6')) {
                icon.className = 'card-type-icon fab fa-cc-discover';
                icon.style.color = '#FF6000';
            } else {
                icon.className = 'card-type-icon fas fa-credit-card';
                icon.style.color = '#666';
            }
        }

        function updateCardPreview() {
            const number = document.getElementById('card-number').value || '•••• •••• •••• ••••';
            const name = document.getElementById('card-name').value || 'CARD HOLDER NAME';
            const expiry = document.getElementById('card-expiry').value || 'MM/YY';
            
            document.getElementById('preview-number').textContent = number;
            document.getElementById('preview-name').textContent = name.toUpperCase();
            document.getElementById('preview-expiry').textContent = expiry;
        }

        function updatePaymentButton() {
            const button = document.getElementById('process-payment');
            const allValid = Object.values(cardValidation).every(valid => valid);
            
            button.disabled = !allValid;
            if (allValid) {
                button.classList.remove('bg-gray-400');
                button.classList.add('bg-green-600', 'hover:bg-green-700');
            } else {
                button.classList.remove('bg-green-600', 'hover:bg-green-700');
                button.classList.add('bg-gray-400');
            }
        }

        // Luhn algorithm for card validation
        function luhnCheck(cardNumber) {
            let sum = 0;
            let alternate = false;
            
            for (let i = cardNumber.length - 1; i >= 0; i--) {
                let n = parseInt(cardNumber.charAt(i), 10);
                
                if (alternate) {
                    n *= 2;
                    if (n > 9) {
                        n = (n % 10) + 1;
                    }
                }
                
                sum += n;
                alternate = !alternate;
            }
            
            return (sum % 10) === 0;
        }

        function setupPaymentModal() {
            // Payment method selection
            document.querySelectorAll('.payment-method').forEach(method => {
                method.addEventListener('click', function() {
                    document.querySelectorAll('.payment-method').forEach(m => m.classList.remove('selected'));
                    this.classList.add('selected');
                    this.querySelector('input[type="radio"]').checked = true;
                    selectedPaymentMethod = this.dataset.method;
                });
            });

            // Modal navigation
            document.getElementById('cancel-payment').addEventListener('click', closePaymentModal);
            document.getElementById('continue-payment').addEventListener('click', () => showPaymentStep(2));
            document.getElementById('back-payment').addEventListener('click', () => showPaymentStep(1));
            document.getElementById('process-payment').addEventListener('click', processPayment);
            document.getElementById('close-success').addEventListener('click', closePaymentModal);
        }

        function showPaymentModal() {
            document.getElementById('payment-modal').classList.add('show');
            document.getElementById('payment-total').textContent = totalAmount.toFixed(2);
            showPaymentStep(1);
        }

        function closePaymentModal() {
            document.getElementById('payment-modal').classList.remove('show');
            currentPaymentStep = 1;
            showPaymentStep(1);
            
            // Reset form
            document.getElementById('card-number').value = '';
            document.getElementById('card-expiry').value = '';
            document.getElementById('card-cvv').value = '';
            document.getElementById('card-name').value = '';
            updateCardPreview();
            
            // Reset validation
            cardValidation = { number: false, expiry: false, cvv: false, name: false };
            updatePaymentButton();
        }

        function showPaymentStep(step) {
            document.querySelectorAll('.payment-step').forEach(s => s.classList.remove('active'));
            document.getElementById(`payment-step-${step}`).classList.add('active');
            currentPaymentStep = step;
        }

        function processPayment() {
            showPaymentStep(3);
            
            const progressSteps = [
                { progress: 20, status: "🔐 Encrypting payment data..." },
                { progress: 40, status: "🏦 Contacting bank..." },
                { progress: 60, status: "💳 Verifying card details..." },
                { progress: 80, status: "✅ Authorization approved..." },
                { progress: 100, status: "🎉 Payment successful!" }
            ];

            let stepIndex = 0;
            const progressInterval = setInterval(() => {
                if (stepIndex < progressSteps.length) {
                    const step = progressSteps[stepIndex];
                    document.getElementById('progress-fill').style.width = step.progress + '%';
                    document.getElementById('processing-status').textContent = step.status;
                    stepIndex++;
                } else {
                    clearInterval(progressInterval);
                    setTimeout(() => {
                        showPaymentSuccess();
                    }, 1000);
                }
            }, 1200);
        }

        function getCreativeSuccessMessage() {
            const messages = [
                "✨ Your magical moment is now secured! ✨",
                "💫 Dreams do come true, and yours just did! 💫",
                "🌟 Your perfect day is officially booked! 🌟",
                "💖 Love is in the air and your wedding is confirmed! 💖",
                "🎭 The stage is set for your fairy tale wedding! 🎭",
                "🌸 Your happily ever after starts now! 🌸",
                "💐 Every petal, every moment, perfectly planned! 💐",
                "🦋 Your wedding butterfly effect has begun! 🦋"
            ];
            return messages[Math.floor(Math.random() * messages.length)];
        }

        function getCreativeTitle() {
            const titles = [
                "🎉 Payment Successful! 🎉",
                "💰 Cha-Ching! You're All Set! 💰",
                "✅ Mission Accomplished! ✅",
                "🎊 Woohoo! Payment Complete! 🎊",
                "🌟 Success! Your Dream is Secured! 🌟",
                "💳 Payment Magic Complete! 💳"
            ];
            return titles[Math.floor(Math.random() * titles.length)];
        }

        function getCreativeSubtitle() {
            const subtitles = [
                "Your dream wedding services are booked!",
                "Time to celebrate - everything's confirmed!",
                "Your perfect day awaits!",
                "All systems go for your magical moment!",
                "Your wedding dreams are now reality!",
                "The countdown to your perfect day begins!"
            ];
            return subtitles[Math.floor(Math.random() * subtitles.length)];
        }

        function getCreativeEmailMessage() {
            const messages = [
                "📧 A beautifully crafted confirmation email is flying to your inbox right now! 📧",
                "💌 Your confirmation email is being delivered by digital cupid! 💌",
                "📮 Check your inbox - a magical confirmation awaits! 📮",
                "✉️ Your confirmation email is arriving faster than you can say 'I do!' ✉️",
                "📨 A shower of confirmation details is heading to your email! 📨"
            ];
            return messages[Math.floor(Math.random() * messages.length)];
        }

        function showPaymentSuccess() {
            // Generate transaction ID
            const transactionId = 'WED' + Date.now().toString().slice(-8);
            document.getElementById('transaction-id').textContent = transactionId;
            
            // Set creative messages
            document.getElementById('dynamic-success-title').textContent = getCreativeTitle();
            document.getElementById('dynamic-success-subtitle').textContent = getCreativeSubtitle();
            document.getElementById('creative-message').textContent = getCreativeMessage();
            document.getElementById('creative-email-message').textContent = getCreativeEmailMessage();
            
            // Generate booking summary
            const formData = {
                fullName: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                preferredDate: document.getElementById('preferredDate').value,
                preferredTime: document.getElementById('preferredTime').value,
                services: cart,
                totalAmount: totalAmount
            };

            // Get payment method display
            const cardNumber = document.getElementById('card-number').value;
            const lastFour = cardNumber.replace(/\s/g, '').slice(-4);
            let paymentMethodDisplay = '';
            
            if (selectedPaymentMethod === 'card') {
                paymentMethodDisplay = `Card ending in ${lastFour}`;
            } else {
                paymentMethodDisplay = selectedPaymentMethod.charAt(0).toUpperCase() + selectedPaymentMethod.slice(1);
            }
            
            document.getElementById('payment-method-display').textContent = paymentMethodDisplay;

            const bookingSummary = `
                <p><strong>👰 Name:</strong> ${formData.fullName}</p>
                <p><strong>📅 Date:</strong> ${formData.preferredDate}</p>
                <p><strong>⏰ Time:</strong> ${formData.preferredTime}</p>
                <p><strong>💅 Services:</strong> ${cart.length} service(s)</p>
                <p><strong>💰 Total Paid:</strong> ${totalAmount.toFixed(2)}</p>
            `;
            document.getElementById('booking-summary').innerHTML = bookingSummary;
            
            showPaymentStep(4);
            
            // Clear form and cart after successful payment
            setTimeout(() => {
                document.getElementById('booking-form').reset();
                cart = [];
                saveCart();
                updateCartDisplay();
            }, 8000);
        }

        document.getElementById('booking-form').addEventListener('submit', function(event) {
            event.preventDefault();

            if (cart.length === 0) {
                alert('Please add at least one service to your cart before booking.');
                return;
            }

            showPaymentModal();
        });

        // Initial call to update global cart count on page load
        updateGlobalCartCount();
    </script>
</body>
</html>