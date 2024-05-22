<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    //
    public function store(Request $request, $productId)
    {
        $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = new Review([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        $review->save();

        return redirect()->route('product.show', $productId)->with('success', 'Review added successfully.');
    }
}