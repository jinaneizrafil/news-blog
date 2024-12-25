<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

// Root route for the homepage
Route::get('/', [HomeController::class, 'index']);

// Route::get('/posts/{slug}', [PostController::class, 'show'])->name('post.show');



// A test route for debugging purposes
Route::get('/test', function () {
    \App\Models\Post::find(5)->delete();
});
