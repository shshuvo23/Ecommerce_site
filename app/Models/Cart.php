<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Cart extends Model
{
    use HasFactory;
    private static $product, $price, $customer, $cartItem;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'price',
    ];

    public static function addToCart($request)
    {
        // Fetch the product from the database using the product ID
        $product = Product::find($request->product_id);

        // Check if the product has a discount
        if ($product->discount > 0) {
            // If the product has a discount, use the discounted price
            $price = $product->new_price;
        } else {
            // If the product doesn't have a discount, use the regular price
            $price = $product->price;
        }

        // Retrieve the customer ID from the session
        $customer_id = session::get('customer_id');

        // Create a new Cart instance and fill its attributes with the customer ID, product ID, quantity, and price
        $cartItem = new Cart([
            'customer_id' => $customer_id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
            'price' => $price,
        ]);

        // Save the Cart instance to the database
        $cartItem->save();
    }
    public function getProductPriceAttribute()
    {
        self::$product = Product::find('product_id');
            // Check if the product has a discount
        if (self::$product->discount > 0) {
            // If the product has a discount, use the discounted price
            self::$price = self::$product->new_price;
        } else {
            // If the product doesn't have a discount, use the regular price
            self::$price = self::$product->price;
        }
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
