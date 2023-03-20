<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Product extends Model
{
    use HasFactory;

    private static $product, $message, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time() . '.' . self::$extension;
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory . self::$imageName;
    }

    public static function createProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->brand_id = $request->brand_id;
        self::$product->employee_id = Session::get('employee_id');
        self::$product->product_name = $request->product_name;
        self::$product->product_detail = $request->product_detail;
        self::$product->barcode = $request->barcode;
        self::$product->price = $request->price;
        self::$product->image = self::getImageUrl($request);
        self::$product->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if (self::$product->employee->id == Session::get('employee_id')) {
            if ($request->file('image')) {
                if (file_exists(self::$product->image)) {
                    unlink(self::$product->image);
                }
                self::$imageUrl = self::getImageUrl($request);
            } else {
                self::$imageUrl = self::$product->image;
            }
            self::$product->category_id = $request->category_id;
            self::$product->brand_id = $request->brand_id;
            self::$product->product_name = $request->product_name;
            self::$product->product_detail = $request->product_detail;
            self::$product->barcode = $request->barcode;
            self::$product->price = $request->price;
            self::$product->image = self::$imageUrl;
            self::$product->save();
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function employee()
    {
        return $this->belongsTo(Empolyee::class);
    }
}
