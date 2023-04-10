<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Mail\ShipmentConfirmationMail;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Session;
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
        $orderIteam = OrderItem::find($id);
        $orderNumber = $order->order_number;
        $customerName = $order->customer->name;
        $productName = $orderIteam->product->product_name;
        $quantity = $orderIteam->quantity;
        $total = $order->total;
        $this->emailData = [
            'name'      => $customerName,
            'order_no'  => $orderNumber,
            'product_name' => $productName,
            'quantity' => $quantity,
            'total' => $total,
        ];

        Mail::to('shshuvo44@gmail.com')->send(new ShipmentConfirmationMail($this->emailData));

        return back()->with('success', 'Order status updated successfully.');
    }

    public function orderComplete(Request $request, $id)
    {

        Order::markAsComplete($id);

        return back()->with('success', 'Order status updated successfully.');
    }
}
