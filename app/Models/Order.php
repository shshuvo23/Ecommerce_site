<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'status',
        'total',
        'payment_method',
        'payment_status',
        'shipping_address',
        'note',
        'order_number'
    ];
    public static function generateOrderNumber()
    {
        $number = mt_rand(1000000000, 9999999999); // Generate a random 10-digit number
        if (self::where('order_number', $number)->exists()) {
            // If the order number already exists, generate a new one
            return self::generateOrderNumber();
        }
        return $number;
    }


    public static function createOrder(array $data)
    {
        $order = new static();
        $order->customer_id = $data['customer_id'];
        $order->status = 'pending';
        $order->total = 0; // Set the total to zero initially
        $order->payment_method = 'cash_on_delivery';
        $order->payment_status = 'unpaid';
        $order->shipping_address = $data['shipping_address'];
        $order->notes = $data['notes'] ?? '';
        $order->order_number = Order::generateOrderNumber();
        $order->save();

        return $order;
    }


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
