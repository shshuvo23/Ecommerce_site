<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CustomerAuthMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(CustomerMiddleware::class)->only('index');
    // }

    public function add_to_cart(Request $request)
    {
        // Get the product details from the database
        $product = Product::find($request->input('product_id'));
        // return $product.' '.Session::get('customer_id');

        // Validate the request data
        // $request->validate([
        //     // 'product_id' => 'required|exists:products,id',
        //     // 'quantity' => 'required|integer|min:1'
        // ]);
        if($product->discount > 0){
            $price = $product->new_price;
        } else {
            $price = $product->price;
        }

        // Get the customer ID from the session
        $customerId = Session::get('customer_id');
        // return $customerId;

        // $cartItem = new Cart([
        //     'customer_id' => $customerId,
        //     'product_id' => $product->id,
        //     // 'quantity' => $request->quantity,
        //     'price' => $price,
        // ]);
        // if ($cartItem) {
        //     $cartItem->quantity += $request->input('quantity');
        //     $cartItem->save();
        //     // return $cartItem;
        // }
        // // If the product is not in the cart, create a new cart item
        // else {
        //     $cartItem = new Cart;
        //     $cartItem->customer_id = $customerId;
        //     $cartItem->product_id = $product->id;
        //     $cartItem->quantity = $request->input('quantity');
        //     $cartItem->save();
        // }

        // // Update the product quantity in the database
        // $product->quantity -= $request->input('quantity');
        // // $product->save();

        // $cartItem->save();
        ///////////////////////////////////////

        // Check if the user already has the same product in their cart
        $existingCartItem = Cart::where('customer_id', $customerId)
        ->where('product_id', $product->id)
        ->first();

        if ($existingCartItem) {
            // If the user already has the same product in their cart, update the quantity
            $existingCartItem->quantity += $request->quantity;
            $existingCartItem->save();
        } else {
            // Otherwise, create a new cart item
            $cartItem = new Cart([
                'customer_id' => $customerId,
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $price,
            ]);
            $cartItem->save();
        }

        return redirect('/product/cartItem')->with('message', 'added to Cart');


        // Check if the product is already in the cart for the customer
        // $cartItem = Cart::where('customer_id', $customerId)
        //     ->where('product_id', $product->id)
        //     ->first();

        // try {
        //     // If the product is already in the cart, update the quantity
        //     if ($cartItem) {
        //         $cartItem->quantity += $request->input('quantity');
        //         $cartItem->save();
        //     }
        //     // If the product is not in the cart, create a new cart item
        //     else {
        //         $cartItem = new Cart;
        //         $cartItem->customer_id = $customerId;
        //         $cartItem->product_id = $product->id;
        //         $cartItem->quantity = $request->input('quantity');
        //         $cartItem->save();
        //     }

        //     // Update the product quantity in the database
        //     $product->quantity -= $request->input('quantity');
        //     $product->save();

        //     // Redirect to the cart view page
        //     // return "save";
        //     return redirect()->route('cart.index');
        // } catch (\Exception $e) {
        //     // Log the error
        //     \Log::error($e->getMessage());

        //     // Flash an error message to the session
        //     $request->Session()->flash('error', 'An error occurred while adding the product to the cart. Please try again.');

        //     // Redirect back to the previous page
        //     return redirect()->back();
        // }
    }

    public function updateCart(Request $request)
    {
        $cartItem = Cart::with('product')->findOrFail($request->cartItem_id);
        $cartItem->quantity =  $request->quantity;
        $subtotal = $cartItem->product->price * $cartItem->quantity;
        $total = Cart::total();
        $cartItem->save();
        return response()->json(['subtotal' => $subtotal, 'total' => $total]);
    }



    public function index()
    {

        $cartItems = Cart::with('product')->where('customer_id', session('customer_id'))->get();
        // return session('product_id');
        return view('customer.dashboard.cart', ['cartItems' => $cartItems]);
    }
}
