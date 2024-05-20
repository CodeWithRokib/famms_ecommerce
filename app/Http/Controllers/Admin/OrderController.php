<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function createOrder()
    {
        $user = Auth::user();
        $cart = $user->cart;

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $totalPrice = 0;
        $orderItems = [];

        foreach ($cart->cartItems as $cartItem) {
            $totalPrice += $cartItem->product->price * $cartItem->quantity;

            $orderItems[] = new OrderItem([
                'product_id' => $cartItem->product->id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        $order = new Order([
            'user_id' => $user->id,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        $order->save();
        $order->orderItems()->saveMany($orderItems);

        // Clear the cart
        $cart->cartItems()->delete();

        return redirect()->route('orders.index')->with('success', 'Order placed successfully.');
    }

    public function index()
    {
        $orders = Auth::user()->orders()->with('orderItems.product')->get();

        return view('frontend.order.order', compact('orders'));
    }
}