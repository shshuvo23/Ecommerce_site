<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerAuthController extends Controller
{
    private $customer;

    public function index()
    {
        return view('customer.login');
    }

    public function login(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if($this->customer)
        {
            if($this->customer->status == 1)
            {
                if(password_verify($request->password, $this->customer->password))
                {
                    Session::put('customer_id', $this->customer->id);
                    Session::put('customer_name', $this->customer->name);
                    Session::put('customer_image', $this->customer->image);
                    return redirect('/');
                }
                else
                {
                     return redirect()->back()->with('message', 'does not match password or email');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'Contact with Admin to Active your Account');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'Check Your Email... Email is iinvalid');
        }
    }

    public function dashboard()
    {
        return view('website.home.index');
    }

    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/login/registration');
    }
}
