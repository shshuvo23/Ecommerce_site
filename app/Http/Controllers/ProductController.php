<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        return view('employee.product.index', ['brands' => Brand::all(), 'categories' => Category::all()]);
    }

    public function create(Request $request)
    {
        Product::createProduct($request);
        return redirect('/product/manage')->with('message', "Product Added");
    }

    public function manage()
    {
        return view('employee.product.manage', ['products' =>Product::where('employee_id', Session::get('employee_id'))->orderBy('id', 'desc')->get()]);
    }
    public function edit($id)
    {
        return view('employee.product.edit', ['brands' => Brand::all(), 'categories' => Category::all(), 'product' => Product::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        return redirect('/product/manage')->with('message', 'updated Product Info');
    }

    public function productList()
    {
        return view('admin.product.index', ['products' => Product::orderBy('id', 'desc')->get()]);
    }
}
