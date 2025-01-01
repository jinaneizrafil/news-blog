<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->with('categories')->firstOrFail();
        $categories = $post->categories;

        return view('pages.post', compact('post', 'categories'));

   
    }
}
