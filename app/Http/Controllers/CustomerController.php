<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;
use PhpParser\Node\Stmt\Return_;

class CustomerController extends Controller
{
    public function index()
    {
        Return view('customer.register', [
        ]);
    }

    public function create(Request $request)
    {
        Customer::newCustomer($request);
        return redirect('/customer-loginForm');
    }
    public function customerDashoard()
    {
        return view('customer.dashboard.index');
    }

    public function accountDetail()
    {
        return view('customer.dashboard.account-detail',[
            'customer' => Customer::find(session('customer_id')),
        ]);
    }

    public function accountEdit()
    {
        return view('customer.dashboard.edit-account', [
            'customer' => Customer::find(session('customer_id'))
        ]);
    }

    public function manage()
    {
        return view('admin.customer.customer_list',['customer' => Customer::orderBy('id', 'desc')->get()]);
    }
}
