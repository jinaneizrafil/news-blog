<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
{
    // Find the post by its slug
    $post = Post::where('slug', $slug)->firstOrFail();

    // Return the post details view
    return view('components.category', compact('post'));
}
}
