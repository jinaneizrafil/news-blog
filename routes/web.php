<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for category page
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// Route for single post
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');
// A test route for debugging purposes
Route::get('/test', function () {
    \App\Models\Post::find(5)->delete();
});
