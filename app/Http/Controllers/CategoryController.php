<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Livewire\WithPagination;

class CategoryController extends Controller
{
    use WithPagination;

    //    public function renderposts()
    // {
    //     return view('pages.category', [
    //         'posts' => Post::paginate(2),
    //     ]);
    // }



    public function show($slug)
    {

        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = $category->posts()->paginate(2);

        return view('pages.category', compact('category', 'posts'));
    }
}
