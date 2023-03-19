<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    private static $brand;

    public static function createBrand($request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:brands,name',
        ]);

        self::$brand = new Brand();
        self::$brand->name = $request->name;
        self::$brand->save();
    }
    public static function updateBrand($request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:brands,name,' . $id,
        ]);

        self::$brand = Brand::find($id);
        self::$brand->name = $request->name;
        self::$brand->save();
    }

    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);

        self::$brand->delete();
    }
}
