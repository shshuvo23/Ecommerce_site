<?php

namespace App\Http\Controllers;

use App\Mail\OrderConfirmationMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class CheckoutController extends Controller
{
    public function processOrder(Request $request)
    {
        $validatedData = $request->validate([
            'shipping_address' => 'required|string',
            'notes' => 'nullable|string',
            'total' => 'nullable|string',
        ]);

        // Retrieve the customer ID from the session
        $customer_id = Session::get('customer_id');
        $cart_items = Cart::where('customer_id', $customer_id)->get();

        // Create a new order using the customer ID and the input data
        $data = array_merge(['customer_id' => $customer_id], $validatedData);
        // dd($data);
        $order = Order::createOrder($data);

        $order_total = 0;
        foreach ($cart_items as $cart_item) {
            // Retrieve the product information for the cart item
            $product = Product::find($cart_item->product_id);
            // Create a new OrderItem instance
            $order_item = new OrderItem();
            $order_item->product_id = $product->id;
            $order_item->quantity = $cart_item->quantity;
            $order_item->price = $product->price;
            $order_item->order_id = $order->id;
            $order_item->save();
            // Update the order total
            $order_total += $order_item->quantity * $order_item->price;
        }

        $order->total = $order_total;
        $order->save();
        Cart::where('customer_id', $customer_id)->delete();
        // dd($order_total);
        // Mail::to('shshuvo44@gmail.com')->send(new OrderConfirmationMail);
        // Redirect to the order confirmation page
        return redirect()->route('orders.show', $order->id);
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
