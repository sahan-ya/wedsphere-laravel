<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/features', function () {
    return view('features'); // loads resources/views/about.blade.php
});
Route::get('/about', function () {
    return view('about'); // loads resources/views/about.blade.php
});

Route::get('/service', function () {
    return view('service'); // loads resources/views/about.blade.php
});
Route::get('/shop', function () {
    return view('shop'); // loads resources/views/about.blade.php
});
Route::get('/venue', function () {
    return view('venue'); // loads resources/views/about.blade.php
});
Route::get('/header', function () {
    return view('header'); // loads resources/views/about.blade.php
});
Route::get('/footer', function () {
    return view('footer'); // loads resources/views/about.blade.php
});
Route::get('/home2', function () {
    return view('home2'); // loads resources/views/about.blade.php
});
Route::get('/vendor', function () {
    return view('vendor'); // loads resources/views/about.blade.php
});
Route::get('/outfit', function () {
    return view('outfit'); // loads resources/views/about.blade.php
});
Route::get('/invitation', function () {
    return view('invitation'); // loads resources/views/about.blade.php
});
Route::get('/guest', function () {
    return view('guest'); // loads resources/views/about.blade.php
});
Route::get('/budget', function () {
    return view('budget'); // loads resources/views/about.blade.php
});
Route::get('/saloon', function () {
    return view('saloon'); // loads resources/views/about.blade.php
});
Route::get('/photo', function () {
    return view('photo'); // loads resources/views/about.blade.php
});
Route::get('/catering', function () {
    return view('catering'); // loads resources/views/about.blade.php
});
Route::get('/deco', function () {
    return view('deco'); // loads resources/views/about.blade.php
});
Route::get('/entertainment', function () {
    return view('entertainment'); // loads resources/views/about.blade.php
});
Route::get('/checklist', function () {
    return view('checklist'); // loads resources/views/about.blade.php
});
Route::get('/register', function () {
    return view('register'); // loads resources/views/about.blade.php
});
Route::get('/login', function () {
    return view('login'); // loads resources/views/about.blade.php
});
Route::get('/welcome', function () {
    return view('welcome'); // loads resources/views/about.blade.php
});

use App\Http\Controllers\CartController;
// ... other routes

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/items', [CartController::class, 'getCartItems'])->name('cart.items');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

?>