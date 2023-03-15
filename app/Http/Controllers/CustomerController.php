<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CustomerController extends Controller
{
    public function index()
    {
        Return view('admin.customer.customer_add');
    }

    public function create(Request $request)
    {
        Customer::newCustomer($request);
        return redirect('/customer/manage')->with('message', 'New Customer Added');
    }

    public function manage()
    {
        return view('admin.customer.customer_list',['customers' => Customer::orderBy('id', 'desc')->get()]);
    }
}
