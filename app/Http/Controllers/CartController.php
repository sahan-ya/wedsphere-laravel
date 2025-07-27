<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $cart = $request->session()->get('cart', []);
        $item = [
            'name' => $request->input('name'),
            'price' => $request->input('price'),
        ];

        // Add item to cart
        $cart[] = $item;
        $request->session()->put('cart', $cart);

        return response()->json(['cartCount' => count($cart)]);
    }

    public function getCartItems()
    {
        $cart = session()->get('cart', []);
        return response()->json(['items' => $cart]);
    }
    
    public function removeFromCart(Request $request)
    {
        $request->validate([
            'index' => 'required|numeric',
        ]);

        $cart = $request->session()->get('cart', []);
        
        if (isset($cart[$request->input('index')])) {
            unset($cart[$request->input('index')]);
            $request->session()->put('cart', array_values($cart)); // Re-index array
        }

        return response()->json(['cartCount' => count($cart)]);
    }

    public function clearCart(Request $request)
    {
        $request->session()->forget('cart');
        return response()->json(['cartCount' => 0]);
    }
}