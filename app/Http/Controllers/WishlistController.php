<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wishlist;
use App\Models\WishlistItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //
    public function index()
    {
        $wishlist = Auth::user()->wishlist;
        return view('frontend.wishlist.wishlist', compact('wishlist'));
    }

    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $wishlist = Auth::user()->wishlist ?? Wishlist::create(['user_id' => Auth::id()]);

        $wishlistItem = new WishlistItem([
            'product_id' => $product->id,
        ]);

        $wishlist->wishlistItems()->save($wishlistItem);

        return redirect()->back()->with('success', 'Product added to wishlist.');
    }

    public function destroy($id)
    {
        $wishlistItem = WishlistItem::find($id);

        if ($wishlistItem) {
            $wishlistItem->delete();
            return redirect()->back()->with('success', 'Product removed from wishlist.');
        }

        return redirect()->back()->with('error', 'Product not found in wishlist.');
    }
}