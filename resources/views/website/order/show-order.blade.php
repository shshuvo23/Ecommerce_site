@extends('website.master')
@section('body')
    <div class="col-lg-8 mx-auto">
        <div class="axil-order-summery order-checkout-summery">
            <p>Thank you, <b>{{ session::get('customer_name') }}</b> for your order! Here are the details:</p>
            <h5 class="title mb--20">Your Order</h5>
            <h5>Order Number: {{ $order->order_number }}</h5>
            <div class="summery-table-wrap">
                <table class="table summery-table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $order_item)
                            <tr>
                                <td>{{ $order_item->product->product_name }}</td>
                                <td>{{ $order_item->quantity }}</td>
                                <td>{{ $order_item->price }}</td>
                                <td>{{ $order_item->quantity * $order_item->price }}</td>
                            </tr>
                        @endforeach

                        <tr class="order-shipping">
                            {{-- <td colspan="2">
                                <div class="shipping-amount">
                                    <span class="title">Shipping Method</span>
                                    <span class="amount">$35.00</span>
                                </div>
                                <div class="input-group">
                                    <input type="radio" id="radio1" name="shipping" checked>
                                    <label for="radio1">Free Shippping</label>
                                </div>
                                <div class="input-group">
                                    <input type="radio" id="radio2" name="shipping">
                                    <label for="radio2">Local</label>
                                </div>
                                <div class="input-group">
                                    <input type="radio" id="radio3" name="shipping">
                                    <label for="radio3">Flat rate</label>
                                </div> --}}
                            </td>
                        </tr>
                        <tr class="order-total">
                            <td>Total</td>
                            <td class="order-total-amount">{{ $order->total }} TK</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- <h1>Order Confirmation</h1>

    <p>Thank you for your order! Here are the details:</p>

    <h2>Order Number: {{ $order->order_number }}</h2>

    <h3>Shipping Address</h3>
    <p>{{ $order->shipping_address }}</p>

    <h3>Order Items</h3>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $order_item)
                <tr>
                    <td>{{ $order_item->product->product_name }}</td>
                    <td>{{ $order_item->quantity }}</td>
                    <td>{{ $order_item->price }}</td>
                    <td>{{ $order_item->quantity * $order_item->price }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr class="order-total">
                <td>Total</td>
                <td></td>
                <td></td>
                <td>{{ $order->total }}</td>
            </tr>
        </tfoot>
    </table>

    <h3>Order Notes</h3>
    <p>{{ $order->notes }}</p> --}}
@endsection
