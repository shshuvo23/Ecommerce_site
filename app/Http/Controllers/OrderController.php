<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList()
    {
        $orders = Cart::all();
        return view('admin.order.index', [ 'orders' => $orders]);
    }

    public function show($id)
    {

        $order = Order::findOrFail($id);
        return view('website.order.show-order', ['order' => $order]);
    }
}
