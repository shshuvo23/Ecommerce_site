<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'recent_products' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'categories' => Category::all()
        ]);
    }
    public function login()
    {
        return view('website.auth.index');
    }

    // public function slider()
    // {
    //     return view('website.slider.slider', [
    //         'recent_products' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get()
    //     ]);
    // }

    // public function category()
    // {
    //     return view('website.category.product-category',  ['categories' => Category::all()]);
    // }

}
