<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderList()
    {
        $orders = Cart::all();
        return view('admin.order.index', [ 'orders' => $orders]);
    }
}
