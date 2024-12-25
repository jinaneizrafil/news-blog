<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Root route for the homepage
Route::get('/', [HomeController::class, 'render']);

// Route for viewing posts in a specific category


// A test route for debugging purposes
Route::get('/test', function () {
    \App\Models\Post::find(5)->delete();
});
