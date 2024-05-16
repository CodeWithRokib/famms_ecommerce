<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{
    //
   public function index(){
    $subcategories = SubCategory::all();
    $categories = Category::all();
    return view('backend.pages.subcategroy.subcategory', compact('subcategories','categories'));
   }


    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'subcategory_name' => 'required|string|max:255',
        ]);

        SubCategory::create($request->all());

        return redirect()->route('pages.subcategory')
                         ->with('success', 'Category created successfully.');
    }
    
}