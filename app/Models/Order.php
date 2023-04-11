<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
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

    public static function generateTrackingId()
    {
        $characterc = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $digits = '0123456789';
        $tracking_id = substr(str_shuffle($characterc), 0, 4) . '-' . substr(str_shuffle($digits), 0, 6) . '-' . substr(str_shuffle($characters), 0, 2);
        return $tracking_id;
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

    public static function markAsShipped($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'shipped';
        // $order->employee_id = [Session::get('employee_id')];
        $order->save();

        // $trackingId = Uuid::uuid4()->toString();
        $trackingId = Order::generateTrackingId();

        // Create a new shipment record
        $shipment = new Shipment([
            'order_id' => $order->id,
            'tracking_id' => $trackingId,
            'shipment_date' => now() // or you can set any other date/time you need
        ]);
        $shipment->save();
    }
    public static function markAsComplete($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'complete';
        $order->save();
    }


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function employee()
    {
        return $this->belongsTo(Empolyee::class, 'customer_id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function shipment()
    {
        return $this->hasOne(shipment::class);
    }
}
