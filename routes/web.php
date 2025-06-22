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

