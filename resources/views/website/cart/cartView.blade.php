@extends('website.master')


@section('body')
<div class="axil-product-cart-area axil-section-gap">
    <div class="container">
        <div class="axil-product-cart-wrap">
            <div class="product-table-heading">
                <h4 class="title">Your Cart</h4>
                <a href="#" class="cart-clear">Clear Shoping Cart</a>

            </div>
            <h2>{{session()->get('message')}}</h2>
            @if ($carts->count() > 0)
            <div class="table-responsive">
                <table class="table axil-product-table axil-cart-table mb--40">

                    <thead>
                        <tr>
                            <th scope="col" class="product-remove"></th>
                            <th scope="col" class="product-thumbnail">Product Image</th>
                            <th scope="col" class="product-title">PRoduct Name</th>
                            <th scope="col" class="product-price">Price</th>
                            <th scope="col" class="product-quantity">Quantity</th>
                            <th scope="col" class="product-subtotal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                        <tr>
                            <td class="product-remove"><a href="{{route('cart.delete', ['id' => $cart->id])}}" class="remove-wishlist"><i class="fal fa-times"></i></a></td>
                            <td class="product-thumbnail"><a href="single-product.html"><img src="{{asset($cart->product->image)}}" alt="Digital Product"></a></td>
                            <td class="product-title"><a href="single-product.html">{{$cart->product->product_name}}</a></td>
                            <td class="product-price" data-title="Price"><span class="currency-symbol">$</span>{{$cart->price}}</td>
                           <form action="{{route('cart.update', ['id' => $cart->id])}}" method="POST">
                            @csrf
                            <td class="product-quantity" data-title="Qty">
                                <div class="pro-qty">
                                    <input type="number" class="quantity-input" name="quantity" value="{{$cart->quantity}}">
                                </div>
                                <div>
                                    <button type="submit">Update</button>
                                </div>
                            </td>
                            </form>
                            <td class="product-subtotal" data-title="Subtotal"><span class="currency-symbol">$</span>{{$cart->price * $cart->quantity}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                        <div class="axil-order-summery mt--80">
                            <h5 class="title mb--20">Order Summary</h5>
                            <div class="summery-table-wrap">
                                <table class="table summery-table mb--30">
                                    <tbody>
                                        <tr class="order-subtotal">
                                            <td>Subtotal</td>
                                            <td>{{ $carts->sum(function ($cart) { return $cart->price * $cart->quantity; }) }}</td>
                                        </tr>
                                        <tr class="order-shipping">
                                            <td>Shipping</td>
                                            <td>
                                                <div class="input-group">
                                                    <input type="radio" id="radio1" name="shipping" checked>
                                                    <label for="radio1">Free Shippping</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio2" name="shipping">
                                                    <label for="radio2">Local: $35.00</label>
                                                </div>
                                                <div class="input-group">
                                                    <input type="radio" id="radio3" name="shipping">
                                                    <label for="radio3">Flat rate: $12.00</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="order-tax">
                                            <td>State Tax</td>
                                            <td>$8.00</td>
                                        </tr>
                                        <tr class="order-total">
                                            <td>Total</td>
                                            <td class="order-total-amount">{{ $carts->sum(function ($cart) { return $cart->price * $cart->quantity; }) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-update-btn-area">
                <div class="input-group product-cupon">
                    <input placeholder="Enter coupon code" type="text">
                    <div class="product-cupon-btn">
                        <button type="submit" class="axil-btn btn-outline">Apply</button>
                    </div>
                </div>
                <div class="update-btn">
                    <a href="#" class="axil-btn btn-outline">Update Cart</a>
                </div>
            </div>
            @else
                <p>Your cart is empty. Start shopping now!</p>
            @endif

        </div>
    </div>
</div>

@endsection
