<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
    public function processOrder(Request $request)
    {
        $validatedData = $request->validate([
            'shipping_address' => 'required|string',
            'notes' => 'nullable|string'
        ]);

        // Retrieve the customer ID from the session
        $customer_id = Session::get('customer_id');
        $order_number =

            // Create a new order using the customer ID and the input data
            $data = array_merge(['customer_id' => $customer_id], $validatedData);
        // dd($data);
        $order = Order::createOrder($data);
        // dd($order);

        // Redirect to the order confirmation page
        return redirect()->route('orders.show', $order->id);
    }

    public function order(Request $request)
    {
        $cartItems = Cart::getCartItems();
        $data = [
            'customer_id' =>Session::get('customer_id'),
            'status' => 'pending',
            'total' => Cart::getTotal(),
            'payment_method' => $request->payment_method,
            'shipping_address' => $request->shipping_address,
            'billing_address' => $request->billing_address,
            'notes' => $request->notes,
            'order_number' => generateOrderNumber(),
        ];

        $orderItem = new OrderItem();
        $orderItem->orderItemData($data, $cartItems);

        // Process the order
        $order = Order::where('order_number', $data['order_number'])->first();
        $order->processOrder();

        // Clear the cart
        Cart::clearCart();

        return redirect()->route('orders.show', $order);
    }

    // public function checkout(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'shipping_address' => 'required|string',
    //         'notes' => 'nullable|string'
    //     ]);

    //     // Get the current user
    //     $user = Session::get('customer_id');

    //     // Get the cart items for the current user
    //     $cartItems = $user->cartItems;

    //     // Create the order and order items
    //     $orderItem = new OrderItem();
    //     $orderItem->orderItemData($validatedData, $cartItems);

    //     // Clear the user's cart
    //     $user->cartItems()->delete();

    //     // Redirect to the order confirmation page
    //     return view('website.order.show-order');
    // }
}
