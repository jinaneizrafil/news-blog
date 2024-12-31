<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{

    // public function render()
    // {
    //     return view('pages.home');
    // }
    public function index()
    {
        $categories = Category::where('show_on_home', true)
            ->with(['posts' => function ($query) {
                $query->where('show_on_home', true);
            }])
            ->get();
        // $posts = Post::where('show_on_home', true)->get();
        return view('pages.home', compact('categories'));
    }
}
