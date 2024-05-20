<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $user = Auth::user();
        
        // Get or create a cart for the user
        $cart = $user->cart ?? Cart::create(['user_id' => $user->id]);

        // Check if the product is already in the cart
        $cartItem = $cart->cartItems()->where('product_id', $product->id)->first();
        
        if ($cartItem) {
            // Update the quantity if the product is already in the cart
            $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
        } else {
            // Add the product to the cart
            $cart->cartItems()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart.');
    }

    public function viewCart()
    {
        $cart = Auth::user()->cart;

        return view('frontend.cart.cart', compact('cart'));
    }

    public function removeFromCart($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Product removed from cart.');
    }
        // public function addToCart(Request $request)
    // {
    //     $request->validate([
    //         'product_id' => 'required|integer|exists:products,id',
    //         'quantity' => 'required|integer|min:1',
    //     ]);

    //     $product = Product::find($request->product_id);
    //     $cart = session()->get('cart', []);

    //     // If product already in cart, update quantity
    //     if (isset($cart[$request->product_id])) {
    //         $cart[$request->product_id]['quantity'] += $request->quantity;
    //     } else {
    //         // Add new product to cart
    //         $cart[$request->product_id] = [
    //             "name" => $product->name,
    //             "quantity" => $request->quantity,
    //             "price" => $product->price,
    //             "image" => $product->image
    //         ];
    //     }

    //     session()->put('cart', $cart);

    //     return redirect()->back()->with('success', 'Product added to cart!');
    // }

    // // View Cart
    // public function viewCart()
    // {
    //     $cart = session()->get('cart', []);
    //     return view('frontend.cart.cart', compact('cart'));
    // }

    //    // Update Cart
    //    public function updateCart(Request $request)
    //    {
    //        $request->validate([
    //            'product_id' => 'required|integer|exists:products,id',
    //            'quantity' => 'required|integer|min:1',
    //        ]);
   
    //        $cart = session()->get('cart', []);
   
    //        if (isset($cart[$request->product_id])) {
    //            $cart[$request->product_id]['quantity'] = $request->quantity;
    //            session()->put('cart', $cart);
   
    //            return redirect()->route('cart.view')->with('success', 'Cart updated successfully');
    //        }
   
    //        return redirect()->route('cart.view')->with('error', 'Product not found in cart');
    //    }
   
    //    // Remove from Cart
    //    public function removeFromCart(Request $request)
    //    {
    //        $request->validate([
    //            'product_id' => 'required|integer|exists:products,id',
    //        ]);
   
    //        $cart = session()->get('cart', []);
   
    //        if (isset($cart[$request->product_id])) {
    //            unset($cart[$request->product_id]);
    //            session()->put('cart', $cart);
   
    //            return redirect()->route('cart.view')->with('success', 'Product removed from cart');
    //        }
   
    //        return redirect()->route('cart.view')->with('error', 'Product not found in cart');
    //    }
    
}