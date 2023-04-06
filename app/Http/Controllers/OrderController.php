<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
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
        $orders = Order::where('customer_id', $customerId)->get();

        return view('website.order.view-order', ['count' => $count, 'orders' => $orders]);
    }
}
