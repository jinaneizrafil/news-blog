<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // Share header categories with the partials.header view
        view()->composer('partials.header', function ($view) {
            $headerCategories = Category::where('show_on_header', true)->get();
            $view->with('headerCategories', $headerCategories);
        });
    }
}
