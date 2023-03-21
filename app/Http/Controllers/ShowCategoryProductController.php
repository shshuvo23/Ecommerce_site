<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryProductController extends Controller
{
    public function showByCategory($id)
{
    $category = Category::find($id);
    $products = $category->products;

    return view('website.category.single-product', ['category' => $category, 'products'=> $products ]);
}
}
