<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|unique:brands,name',
            ]);

            Brand::createBrand($request);
            return redirect('/manage/brand')->with('message', 'Category created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    public function manage()
    {
        return view('admin.brand.manage', ['brands' => Brand::all()]);
    }

    public function edit($id)
    {
        return view('admin.brand.edit', ['brand' => Brand::find($id)]);
    }

    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/manage/brand')->with('message', 'Brand Updated');
    }

    public function delete($id)
    {
        return redirect('/brand/manage')->with('message', 'Deleted');
    }
}
