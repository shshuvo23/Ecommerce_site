<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerAuthController extends Controller
{
    private $customer;

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
                    return redirect('/customer-dashboard');
                }
                else
                {
                    ret return redirect()->back()->with('message', 'does not match password or email');
                }
            }
            else
            {
                return redirect()->back()-with('message', 'Contact with Admin to Active your Account');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'Check Your Email... Email is iinvalid');
        }
    }
    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');

        return redirect('/login/registration');
    }
}
