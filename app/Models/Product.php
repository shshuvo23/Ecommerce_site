<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Product extends Model
{
    use HasFactory;

    private static $product, $discountPrice, $originalPrice, $message, $image, $extension, $directory, $imageName, $imageUrl;

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
    public static function addDiscount($request, $id)
    {
        self::$product = Product::find($id);
        self::$product->discount = $request->discount;
        self::$discountPrice = self::$product->price - (self::$product->price * (self::$product->discount / 100));
        self::$product->new_price = self::$discountPrice;
        self::$product->save();
    }

    public static function removeDiscount($id)
    {
        self::$product = Product::find($id);

        // Check if the product has a discount
        if (self::$product->discount > 0) {
            // Calculate the original price
            self::$originalPrice = self::$product->new_price / (1 - self::$product->discount);

            // Set the product's price and discount to their original values
            self::$product->price = self::$originalPrice;
            self::$product->discount = 0;
            self::$product->new_price = 0;
            self::$product->save();
        }
    }


    public static function productStatusUpdate($id)
    {
        self::$product = Product::find($id);
        if (self::$product->status == 1) {
            self::$product->status = 0;
            self::$message = 'This Product Currently Stock out';
        } else {
            self::$product->status = 1;
            self::$message = 'Status on';
        }
        self::$product->save();
        return self::$message;
    }

    public static function productOfferStatus($id)
    {
        self::$product = Product::find($id);
        if (self::$product->Offer_status == 1) {
            self::$product->Offer_status = 0;
            self::$message = 'This Product have no Offer Now';
        } else {
            self::$product->Offer_status = 1;
            self::$message = 'This Product has ' . self::$product->discount . '% discount now';
        }
        self::$product->save();
        return self::$message;
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
