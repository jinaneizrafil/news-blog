<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
 
    public function render()
    {
        return view('pages.home');
    }
    public function index()
    {
        $categories = Category::with('posts')->get();
        return view('pages.home', compact('categories'));
    }
}

