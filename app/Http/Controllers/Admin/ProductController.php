<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('frontend.product.product', compact('products'));
    }
    public function index2(){
        $subcategories = SubCategory::all();
        $categories = Category::all();
        $products = Product::all();
        return view('backend.pages.product.product', compact('subcategories','categories','products'));
       }

       public function store(Request $request)
       {
           $request->validate([
               'category_name' => 'required|string|max:255',
               'subcategory_name' => 'required|string|max:255',
               'name' => 'required|string|max:255',
               'price' => 'required|numeric',
               'quantity' => 'required|integer',
               'description' => 'nullable|string',
               'code' => 'required|string|max:255|unique:products,code',
               'discount' => 'nullable|numeric',
               'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'status' => 'nullable|in:active,inactive',
           ]);
   
           $data = $request->all();
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('photos', 'public');
                $data['image'] = $imagePath;
            }

        try {
            Product::create($data);
            return redirect()->route('pages.product')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            // Handle potential database errors during product creation
            return back()->withErrors(['error' => $e->getMessage()]);
        }
       }

       public function show($id)
       {
           $product = Product::find($id);
           return view('frontend.product.productdetails', compact('product'));
       }
    
}