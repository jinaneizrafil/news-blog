<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/test', function () {
    \App\Models\Post::find(5)->delete();
});
