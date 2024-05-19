<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CartCount
{
    public function handle(Request $request, Closure $next)
    {
        $cart = session()->get('cart', []);
        $cartCount = array_sum(array_column($cart, 'quantity'));

        view()->share('cartCount', $cartCount);

        return $next($request);
    }
}