<?php

namespace App\Http\Controllers;

use App\Models\Empolyee;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Session;

class EmployeeAuthController extends Controller
{
    private $employee;
    public function index()
    {
        return view('employee.auth.login');
    }

    public function login(Request $request)
    {
        $this->employee = Empolyee::where('email', $request->email)->first();
        if($this->employee)
        {
            if($this->employee->status == 1)
            {
                if(password_verify($request->password, $this->employee->password))
                {
                    Session::put('employee_id', $this->employee->id);
                    Session::put('employee_name', $this->employee->name);
                    // return $this->employee->name;

                    return redirect('/employee/dashboard');
                }
                else
                {
                    return redirect()->back()->with('message', 'password did not match');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'Contact with Admin to Active your Account');
            }
        }
        else
        {
            return redirect()->back()->with('message', 'your email did not match');
        }
    }

    public function dashboard()
    {
        return view('employee.dashboard.index', [Session('employee_name')]);
    }

    public function logout()
    {
        Session::forget('employee_id');
        Session::forget('employee_name');

        return redirect('/');
    }
}
