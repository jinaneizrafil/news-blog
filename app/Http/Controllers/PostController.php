<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {

        $categorySlug = request('category');

        //retreive post by its slug
        $post = Post::where('slug', $slug)->firstOrFail();

        //Checks if the post belongs to a specific category if not return 404 error
        $category = $post->categories()->where('slug', $categorySlug)->first();

        if (!$category) {
            abort(404, 'Category not found for this post.');
        }

        return view('pages.post', compact('post', 'category'));
    }
}
