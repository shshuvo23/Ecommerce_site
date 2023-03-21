<?php

namespace App\Http\Controllers;

use App\Mail\ProductAddConfirmationMail;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use Mail;

class ProductController extends Controller
{
    public $product, $emailData = [];
    public function index()
    {
        return view('employee.product.index', ['brands' => Brand::all(), 'categories' => Category::all()]);
    }

    public function create(Request $request)
    {
        Product::createProduct($request);

        // $this->emailData = [
        //     'product_name' => $request->input('product_name'),
        //     'product_detail' => $request->input('product_detail'),
        //     'price' => $request->input('price'),
        // ];

        // Mail::to('shshuvo44@gmail.com')->send(new ProductAddConfirmationMail($this->emailData));

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
