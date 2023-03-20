<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function login()
    {
        return view('website.auth.index');
    }

    public function slider()
    {
        return view('website.slider.slider', [
            'recent_products' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get()
        ]);
    }

}
