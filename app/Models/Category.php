<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.' . self::$extension;
        self::$directory = 'category-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function createCategory($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
    }
    public static function updateCategory($request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
        ]);

        self::$category = Category::find($id);

        if ($request->file('image')) {
            if (file_exists(self::$category->image)) {
                unlink(self::$category->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        } else {
            self::$imageUrl = self::$category->image;
        }
        self::$category->name = $request->name;
        self::$category->image = self::$imageUrl;
        self::$category->save();
    }

    public static function categorydelete($id)
    {
        self::$category = Category::find($id);

        self::$category->delete();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
