<?php

namespace App\Http\Controllers;

use App\Models\Empolyee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employee.employee_add');
    }

    public function create(Request $request)
    {
        Empolyee::newEmployee($request);
        return redirect('/employee/list')->with('message', 'A new employee added');
    }

    public function manage()
    {
        return view('admin.employee.employee_list', ['employees' => Empolyee::orderBy('id', 'desc')->get()]);
    }
    public function employeeStatus($id)
    {
        return redirect('/employee/list')->with('message', Empolyee::employeeStatusUpdate($id));
    }
}
