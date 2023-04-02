<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $customerId = Session::get('customer_id');
        if ($customerId) {
            $count = Cart::where('customer_id', $customerId)->count();
        } else {
            $count = 0;
        }
        // return $count;
        return view('website.home.index', [
            'recent_products' => Product::where('status', 1)->orderBy('id', 'desc')->take(8)->get(),
            'categories' => Category::all(),
            'products' => Product::where('status', 1)->orderBy('id' , 'desc')->take(12)->get(),
            'populars' => Product::where('status', 1)->orderBy('hit_count', 'desc')->take(10)->get(),
            'count' =>$count,
        ]);
    }

    public function productdetails($id)
    {
        $customerId = Session::get('customer_id');
        if ($customerId) {
            $count = Cart::where('customer_id', $customerId)->count();
        } else {
            $count = 0;
        }
        $product = Product::updateHitCount($id);
        return view('website.product.product-detail', ['product' => $product, 'count' => $count]);
    }
    public function login()
    {
        return view('website.auth.index');
    }

    public function allProduct()
    {
        $customerId = Session::get('customer_id');
        if ($customerId) {
            $count = Cart::where('customer_id', $customerId)->count();
        } else {
            $count = 0;
        }
        return view('website.product.allproduct', ['products' => Product::where('status', 1)->simplePaginate(8) , 'count' =>$count]);
    }

    public function popularProduct()
    {
        return view('website.home.popular-product');
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
