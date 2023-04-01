<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use Session;
use Illuminate\Http\Request;

class ShowCategoryProductController extends Controller
{
    public function showByCategory($id)
    {
        $category = Category::find($id);
        $products = $category->products;
        $customerId = Session::get('customer_id');
            if ($customerId) {
                $count = Cart::where('customer_id', $customerId)->count();
            } else {
                $count = 0;
            }

        return view('website.category.single-product', ['category' => $category, 'products'=> $products, 'count' => $count ]);
    }
}
