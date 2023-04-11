<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Mail\ShipmentConfirmationMail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipment;
use Carbon\Carbon;
use Session;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    private $emailData = [];

    public function orderList()
    {
        $orders = Cart::all();
        return view('admin.order.index', ['orders' => $orders]);
    }

    public function orderlistEmployee()
    {
        $orders = Order::all();
        return view('employee.order.order-list', ['orders' => $orders]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $orders = Order::where('order_number', 'LIKE', '%' . $search . '%')
            ->orWhereHas('customer', function ($query) use ($search) {
                $query->where('name', 'LIKE', '%' . $search . '%');
            })
            ->get();

        return view('employee.order.order-list', ['orders' => $orders]);
    }


    public function show($id)
    {

        $customerId = Session::get('customer_id');
        $carts = Cart::where('customer_id', $customerId)->get();
        if ($customerId) {
            $count = Cart::where('customer_id', $customerId)->count();
        } else {
            $count = 0;
        }

        $order = Order::findOrFail($id);
        return view('website.order.show-order', ['count' => $count, 'order' => $order]);
    }

    public function viewOrder()
    {
        // Retrieve the customer ID from the session
        $customerId = Session::get('customer_id');
        $carts = Cart::where('customer_id', $customerId)->get();
        if ($customerId) {
            $count = Cart::where('customer_id', $customerId)->count();
        } else {
            $count = 0;
        }
        // Retrieve the orders for the customer
        $orders = Order::where('customer_id', $customerId)->orderBy('id', 'desc')->get();

        return view('website.order.view-order', ['count' => $count, 'orders' => $orders]);
    }

    public function updateStatus(Request $request, $id)
    {

        Order::markAsShipped($id);
        $order = Order::find($id);
        // $shipped = Shipment::find($id);
        $orderItems = OrderItem::where('order_id', $id)->get();

        $orderNumber = $order->order_number;
        $customerName = $order->customer->name;
        $customerEmail = $order->customer->email;
        $total = $order->total;
        $address = $order->shipping_address;

        $trankingid = $order->shipment->tracking_id;
        $shipment_date = $order->shipment->shipment_date;

        $this->emailData = [
            'name'      => $customerName,
            'email'      => $customerEmail,
            'order_no'  => $orderNumber,
            'total' => $total,
            'address' => $address,
            'tracking_id' => $trankingid,
            'shipment_date' => $shipment_date,
            'products' => [],

        ];

        if ($orderItems) {
            foreach ($orderItems as $orderItem) {
                $productName = $orderItem->product->product_name ?? 'Unknown';
                $productPrice = $orderItem->product->price ?? 0;
                $quantity = $orderItem->quantity;
                $productData = [
                    'product_name' => $productName,
                    'product_price' => $productPrice,
                    'quantity' => $quantity
                ];
                $this->emailData['products'][] = $productData;
            }
        }
        // dd($this->emailData);
        Mail::to($customerEmail)->send(new ShipmentConfirmationMail($this->emailData));

        return back()->with('success', 'Order status updated successfully.');
    }

    public function orderComplete(Request $request, $id)
    {

        Order::markAsComplete($id);

        return back()->with('success', 'Order status updated successfully.');
    }
}
