@extends('admin.master')

@section('pageTitle')
    Product
@endsection

@section('pageDropDown')
    order List
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
                <h4>Cart List</h4>
                <div class="box_right d-flex lms_block">
                    <div class="serach_field_2">
                        <div class="search_inner">
                            <form Active="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search content here...">
                                </div>
                                <button type="submit"> <i class="ti-search"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="QA_table mb_30">
                <h2>{{ Session::get('message') }}</h2>

                <div class="col-md-12">
                    <table class="table lms_table_active ">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th>Customer ID</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>price</th>
                                <th>Customer Name</th>
                                <th>Product Image</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <div class="col-md-2">
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{$order->customer->id}}</td>
                                    </div>
                                    <td class="col-md-2">{{$order->product->product_name}}</td>
                                    <div class="col-md-2">
                                        <td>{{$order->quantity}}</td>
                                        <td>{{$order->price}}</td>
                                    </div>

                                    <div class="col-md-2">
                                        <td>{{$order->customer->name}}</td>
                                    </div>
                                    <div class="col-md-2">
                                        <td>
                                            <img src="{{asset($order->product->image)}}" alt="" height="50" width="50">
                                        </td>
                                    </div>
                                    {{-- <td class="col-md-2">
                                   <div class="col-md-6">
                                        <a href="{{route('admin.product-detail', ['id' => $product->id])}}" class="badge rounded-pill bg-info">Detail</a>
                                        <a href="" class="badge rounded-pill bg-secondary">Edit</a>
                                        <a href="{{route('admin.product-Status', ['id' => $product->id])}}" class="badge rounded-pill bg-success">Status</a>
                                        <a href="{{route('admin.product-Offer-Status', ['id' => $product->id])}}" class="badge rounded-pill bg-success">Offer Status</a>
                                        <a href="" class="badge rounded-pill bg-danger">Delete</a>
                                   </div>
                                </td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
