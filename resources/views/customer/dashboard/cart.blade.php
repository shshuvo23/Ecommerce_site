@extends('website.master')

@section('body')

<div class="axil-product-cart-area axil-section-gap">
    <div class="container">
        <div class="axil-product-cart-wrap">
            <div class="product-table-heading">
                <h4 class="title">Your Cart</h4>
                <a href="#" class="cart-clear">Clear Shoping Cart</a>
            </div>
            <div class="table-responsive">
            @if ($cartItems->count() > 0)
            <form method="POST" action="{{ route('cart.update') }}">
                    @csrf
                <table class="table axil-product-table axil-cart-table mb--40">
                    <thead>
                        <tr>
                            <th scope="col" class="product-remove"></th>
                            <th scope="col" class="product-thumbnail"></th>
                            <th scope="col" class="product-title">Product Name</th>
                            <th scope="col" class="product-price">Price</th>
                            <th scope="col" class="product-quantity">Quantity</th>
                            <th scope="col" class="product-subtotal">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cartItem)
                        <tr>
                            <td class="product-remove">
                                <a href="#" class="remove-wishlist"><i class="fal fa-times"></i></a>
                            </td>
                            <td>
                                <img src="{{asset($cartItem->product->image)}}" alt="" height="200" width="150">
                            </td>
                            <td>{{ $cartItem->product->product_name }}</td>
                            <td>{{ $cartItem->product->price }}</td>
                            {{-- <td>{{ $cartItem->quantity }}</td> --}}
                            <td class="product-quantity" data-title="Qty">
                                <div class="pro-qty">
                                    <input type="number" class="quantity" value="{{ $cartItem->quantity }}" name="quantity[]" id="quantity_{{ $cartItem->id }}">
                                    <input type="hidden" name="cart_item_id[]" value="{{ $cartItem->id }}">
                                </div>
                            </td>
                            <td>{{ $cartItem->product->price * $cartItem->quantity }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" align="right">Total:</td>
                            <td>{{ $cartItems->sum(function ($cartItem) { return $cartItem->product->price * $cartItem->quantity; }) }}</td>
                        </tr>
                    </tfoot>

                </table>
                <div class="cart-update-btn-area">
                    <div class="input-group product-cupon">
                        <input placeholder="Enter coupon code" type="text">
                        <div class="product-cupon-btn">
                            <button type="submit" class="axil-btn btn-outline">Apply</button>
                        </div>
                    </div>
                    <div class="update-btn">
                        <button type="submit" class="axil-btn btn-outline">Update Cart</button>
                    </div>
                </div>
            </form>
                @else
                    <p>Your cart is empty. Start shopping now!</p>
                @endif
            </div>
           @if ($cartItems->count() > 0)
           <div class="row">
            <div class="col-xl-5 col-lg-7 offset-xl-7 offset-lg-5">
                <div class="axil-order-summery mt--80">
                    <h5 class="title mb--20">Order Summary</h5>
                    <div class="summery-table-wrap">
                        <table class="table summery-table mb--30">
                            @foreach ($cartItems as $cartItem)
                            <tbody>
                                <tr class="order-subtotal">
                                    <td>Subtotal</td>
                                    <td>{{ $cartItems->sum(function ($cartItem) { return $cartItem->product->price * $cartItem->quantity; }) }}</td>
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
                                    <td class="order-total-amount">{{ $cartItem->product->price * $cartItem->quantity }}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    <a href="checkout.html" class="axil-btn btn-bg-primary checkout-btn">Process to Checkout</a>
                </div>
            </div>
        </div>

       </div>
       @endif

    </div>
</div>
@endsection

<script>
    $(document).ready(function() {
        // Add an event listener to the quantity input field
        $('.quantity').on('change', function() {
            // Get the cart item id and new quantity
            var cartItemId = $(this).attr('id').split('_')[1];
            var newQuantity = $(this).val();
            // Send an AJAX request to update the cart
            $.ajax({
                url: '/cart/update',
                type: 'POST',
                data: { cart_item_id: cartItemId, quantity: newQuantity },
                dataType: 'json',
                success: function(response) {
                    // Update the subtotal and total on the page
                    $('#subtotal_' + cartItemId).text(response.subtotal);
                    $('#total').text(response.total);
                }
            });
        });
    });
</script>

