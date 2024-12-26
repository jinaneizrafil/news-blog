<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        // Find the post by its slug
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.post', compact('post'));
    }
}
