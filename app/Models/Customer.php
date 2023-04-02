<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    private static $customer, $image, $extension, $directory, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'customer-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->password = bcrypt($request->password);
        self::$customer->mobile = $request->mobile;
        self::$customer->address = $request->address;
        self::$customer->image = self::getImageUrl($request);
        self::$customer->nid = $request->nid;
        self::$customer->save();
    }

    public static function updateCustomer($request, $id)
    {
        self::$customer = Customer::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$customer->image))
            {
                unlink(self::$customer->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$customer->image;
        }
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        if($request->password)
        {
            self::$customer->password = bcrypt($request->password);
        }
        self::$customer->mobile = $request->mobile;
        self::$customer->address = $request->address;
        self::$customer->image = self::$imageUrl;
        self::$customer->nid = $request->nid;
        self::$customer->save();
    }
}
