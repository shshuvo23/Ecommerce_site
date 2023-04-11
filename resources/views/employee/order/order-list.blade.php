@extends('employee.master')

@section('pageTitle')
Dasboard
@endsection

@section('pageDropDown')
order-list
@endsection
@section('body')
<div class="box_header m-0">
    <div class="main-title">
        <h3 class="m-0"></h3>
    </div>
</div>
</div>
<div class="white_card_body">
    <div class="QA_section">
        <div class="white_box_tittle list_header">
            <h4>order List</h4>
            <div class="box_right d-flex lms_block">
                <div class="serach_field_2">
                    <div class="search_inner">
                        <form method="GET" action="{{ route('order.search') }}">
                            <div class="search_field">
                                <input type="text" name="search" placeholder="Search content here..." value="{{ old('search') }}">
                            </div>
                            <button type="submit"> <i class="ti-search"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="QA_table mb_30">
            <h2>{{Session::get('message')}}</h2>

            <table class="table lms_table_active ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">customer Id</th>
                        <th scope="col">order number</th>
                        <th scope="col">Price</th>
                        <th scope="col">status</th>
                        <th scope="col">order date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <th scope="row"><a href="#" class="question_content">{{ $loop->iteration }}</a>
                            </th>
                            <td>{{ $order->customer_id }}({{$order->customer->name}})</td>
                            <td>{{ $order->order_number}}</td>
                            <td>{{$order->total}}</td>
                            @if($order->status == 'pending')
                            <td class="badge bg-primary" style="color: white">{{ $order->status }}</td>
                            @elseif ($order->status == 'complete')
                            <td class="badge bg-success" style="color: black">{{ $order->status }}</td>
                            @else
                            <td class="badge bg-light text-dark" style="color: white">{{ $order->status }}</td>
                            @endif
                            {{-- <td>{{$order->status}}</td> --}}
                            <td>{{ $order->created_at->format('d-M-Y') }}</td>
                            <td>
                                @if ($order->status == 'shipped')
                                <div class="col-lg-12">
                                    <p class="badge rounded-pill bg-secondary">Shipped already</p>
                                    {{-- <a href="" class="badge rounded-pill bg-success">complete</a> --}}
                                </div>
                                @elseif ($order->status == 'complete')
                                <p class="badge rounded-pill bg-success">Completed</p>
                                @else
                                <div class="col-lg-12">
                                    <a href="{{route('order.status-shipment', ['id' => $order->id])}}" class="badge rounded-pill bg-success">Update status</a>
                                    {{-- <a href="" class="badge rounded-pill bg-success">complete</a> --}}
                                </div>
                                @endif
                               {{-- <div class="col-md-6">
                                    <a href="{{route('product.detail', ['id' => $product->id])}}" class="badge rounded-pill bg-info">Detail</a>
                                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="badge rounded-pill bg-secondary">Edit</a>
                                    <a href="" class="badge rounded-pill bg-success">Status</a>
                                    <a href="{{route('product.discount-remove', ['id' => $product->id])}}" class="badge rounded-pill bg-success">Discount Remove</a>
                                    <a href="{{route('product.discount', ['id' =>$product->id])}}" class="badge rounded-pill bg-success">Discount</a>
                                    <a href="" class="badge rounded-pill bg-danger">Delete</a>
                               </div> --}}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
