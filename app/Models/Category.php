<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;
    public static function createCategory($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->save();
    }
    public static function updateCategory($request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        self::$category = Category::find($id);
        self::$category->name = $request->name;
        self::$category->save();
    }

    public static function categorydelete($id)
    {
        self::$category = Category::find($id);

        self::$category->delete();
    }
}
