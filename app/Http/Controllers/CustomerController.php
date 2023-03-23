<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CustomerController extends Controller
{
    public function index()
    {
        Return view('customer.register');
    }

    public function create(Request $request)
    {
        Customer::newCustomer($request);
        return redirect('/customer-loginForm');
    }

    public function manage()
    {
        return view('admin.customer.customer_list',['customers' => Customer::orderBy('id', 'desc')->get()]);
    }
}
