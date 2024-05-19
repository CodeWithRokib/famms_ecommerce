<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;


class CartController extends Controller
{
    //

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->product_id);
        $cart = session()->get('cart', []);

        // If product already in cart, update quantity
        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity'] += $request->quantity;
        } else {
            // Add new product to cart
            $cart[$request->product_id] = [
                "name" => $product->name,
                "quantity" => $request->quantity,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Product added to cart!');
    }

    // View Cart
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('frontend.cart.cart', compact('cart'));
    }

       // Update Cart
       public function updateCart(Request $request)
       {
           $request->validate([
               'product_id' => 'required|integer|exists:products,id',
               'quantity' => 'required|integer|min:1',
           ]);
   
           $cart = session()->get('cart', []);
   
           if (isset($cart[$request->product_id])) {
               $cart[$request->product_id]['quantity'] = $request->quantity;
               session()->put('cart', $cart);
   
               return redirect()->route('cart.view')->with('success', 'Cart updated successfully');
           }
   
           return redirect()->route('cart.view')->with('error', 'Product not found in cart');
       }
   
       // Remove from Cart
       public function removeFromCart(Request $request)
       {
           $request->validate([
               'product_id' => 'required|integer|exists:products,id',
           ]);
   
           $cart = session()->get('cart', []);
   
           if (isset($cart[$request->product_id])) {
               unset($cart[$request->product_id]);
               session()->put('cart', $cart);
   
               return redirect()->route('cart.view')->with('success', 'Product removed from cart');
           }
   
           return redirect()->route('cart.view')->with('error', 'Product not found in cart');
       }
    
}