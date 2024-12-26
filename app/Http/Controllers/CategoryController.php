<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show($slug)
    {
        // Fetch the category with its posts by slug
        $category = Category::with('posts')->where('slug', $slug)->firstOrFail();
        return view('pages.category', compact('category'));
    }
}
