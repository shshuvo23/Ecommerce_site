<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public $categories;

    public function index()
    {
        return view('admin.category.index');
    }

    public function create(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|unique:categories,name',
            ]);

            Category::createCategory($request);
            return redirect('/manage/category')->with('message', 'Category created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    public function manage()
    {
        $this->categories = Category::all();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage/category')->with('message', 'Updated category');
    }

    public function delete($id)
    {
        Category::categorydelete($id);
        return redirect('/manage/category')->with('message', "Deleted successfully");
    }

    public function categoryList()
    {
        return view('employee.category.category-list',['categories' => Category::orderBy('id', 'desc')->get()]);
    }
}
