@extends('website.master')
@section('body')
    <div class="col-lg-8 mx-auto">
        <div class="axil-order-summery order-checkout-summery">
            <div class="summery-table-wrap">
                <table class="table summery-table">
                    @foreach ($orders as $order)
                        <tr>
                        <tr>
                            <th>Order Number:</th>
                            <td>{{ $order->order_number }}</td>
                        </tr>
                        <tr>
                            <th>Order Date:</th>
                            <td>{{ $order->created_at->format('d-M-Y') }}</td>
                        </tr>
                        <tr>
                            <th>Order Status:</th>
                            <td>{{ $order->status }}</td>
                        </tr>

                        <td>
                            <ul>
                                @foreach ($order->orderItems as $item)
                                    <table>
                                        {{-- <li>{{ $item->product->product_name }} ({{ $item->quantity }}) {{$item->price}}</li> --}}
                                        {{-- <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead> --}}
                                        <tbody>
                                            <tr>
                                                <td>{{ $item->product->product_name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->price }}</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                @endforeach
                            </ul>
                            <ul>Total: {{ $order->total }}</ul>
                          @if ($order->status == 'complete')
                          <p>Thank you for buying our product, Give us your feedback and stay with us</p>
                          <a href="{{route('home')}}">See Our Product</a>
                          @else
                            @if ($order->status == 'shipped')
                            <ul><a href="{{route('order.complete', ['id' => $order->id])}}">Receice Product</a></ul>
                            @endif
                          @endif

                        </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
