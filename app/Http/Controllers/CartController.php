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

            $cart = Cart::where('customer_id', $customerId)
                        ->where('product_id', $product->id)
                        ->first();

            if($cart){
                $cart->quantity += $request->quantity;
                // $cart->price += $price * $request->quantity;
                $cart->save();
            }else{
                $cart = new Cart();
                $cart->customer_id = $customerId;
                $cart->product_id = $product->id;
                $cart->quantity = $request->quantity;
                $cart->price = $price * $request->quantity;
                $cart->save();
            }

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

    public function updateCart(Request $request, $id)
    {
        $customerId = Session::get('customer_id');
        if($customerId)
        {
            $cart = Cart::find($id);

            if($cart)
            {
                // return $cart;
                $product = Product::find($cart->product_id);
                // return $product;
                if($product->discount > 0){
                    $price = $product->new_price;
                }else{
                    $price = $product->price;
                }
                $cart->quantity = $request->quantity;
                // $cart->price += $price * $request->quantity;
                $cart->save();
                // dd($request->quantity);
                // dd($cart);
                return redirect()->back();
            }else{
                return redirect('/cart/view')->with('message' , 'Try Again');
            }
        }else{
            return redirect('/customer-loginForm');
        }
    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back()->with('message', 'Deleted From Cart');
    }

}
