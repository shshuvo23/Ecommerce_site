<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function index(Request $request, $id)
    {
        $customerId = Session::get('customer_id');
        if($customerId)
        {
            $product = Product::find($id);
            if($product->discount > 0){
                $price = $product->new_price;
            }else{
                $price = $product->price;
            }
            // return $price;
            $cart = new Cart();
            $cart->customer_id = $customerId;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->price = $price;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('/customer-loginForm');
        }
    }

    public function viewCart()
    {
        $customerId = Session::get('customer_id');
        $carts = Cart::where('customer_id', $customerId)->get();
        if ($customerId) {
            $count = Cart::where('customer_id', $customerId)->count();
        } else {
            $count = 0;
        }

        return view('website.cart.cartView', ['count' => $count, 'carts' => $carts]);
    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Deleted From Cart');
    }

}
