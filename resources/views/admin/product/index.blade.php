@extends('admin.master')

@section('pageTitle')
Product
@endsection

@section('pageDropDown')
Product List
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
            <h4>Product List</h4>
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
                <div class="add_button ms-2">
                    <a href="{{ route('product.add') }}" data-bs-toggle="modal" data-bs-target="#addcategory"
                        class="btn_1">Add New</a>
                </div>
            </div>
        </div>
        <div class="QA_table mb_30">
            <h2>{{Session::get('message')}}</h2>

            <div class="col-md-12">
                <table class="table lms_table_active ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th>Product ID</th>
                            <th >Product Name</th>
                            <th>Discount</th>
                            <th >price</th>
                            <th >Image</th>
                            <th >Uploaded By</th>
                            <th >Status</th>
                            <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="{{$product->discount > 0 ? 'bg-warning' : ''}}">
                                <div class="col-md-2">
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $product->id }}</td>
                                </div>
                                <td class="col-md-2">{{ $product->product_name }}</td>
                                <div class="col-md-2">
                                    <td>{{ $product->discount}}</td>
                                    <td>{{$product->price}}</td>
                                </div>
                                <td class="col-md-2">
                                    <img src="{{asset($product->image)}}" alt="" height="100" width="100">
                                </td>
                                <div class="col-md-2">
                                    <td>{{ $product->employee->name }}</td>
                                    <td>
                                        @if ($product->status == 1)
                                            @if (session('productId') == $product->id)
                                                <div id="my-div-{{ $product->id }}" style="opacity: 1; visibility: visible; transition: opacity 5s ease-out;">{{ session('messageStatus') }}</div>
                                            @endif
                                            <button class="badge bg-success">Available</button>
                                        @else
                                            @if (session('productId') == $product->id)
                                                <div id="my-div-{{ $product->id }}" style="opacity: 1; visibility: visible; transition: opacity 5s ease-out;">{{ session('messageStatus') }}</div>
                                            @endif
                                            <button class="badge bg-danger">Not Available</button>
                                        @endif
                                        @if ($product->Offer_status == 1)
                                            @if (session('productId') == $product->id)
                                                <div id="my-div-{{ $product->id }}" style="opacity: 1; visibility: visible; transition: opacity 5s ease-out;">{{ session('messageStatus') }}</div>
                                            @endif
                                            <button class="badge bg-success">offer</button>
                                        @else
                                            @if (session('productId') == $product->id)
                                                <div id="my-div-{{ $product->id }}" style="opacity: 1; visibility: visible; transition: opacity 5s ease-out;">{{ session('messageStatus') }}</div>
                                            @endif
                                            <button class="badge bg-danger">No offer</button>
                                        @endif
                                    </td>
                                </div>
                                <td class="col-md-2">
                                   <div class="col-md-6">
                                        <a href="{{route('admin.product-detail', ['id' => $product->id])}}" class="badge rounded-pill bg-info">Detail</a>
                                        <a href="" class="badge rounded-pill bg-secondary">Edit</a>
                                        <a href="{{route('admin.product-Status', ['id' => $product->id])}}" class="badge rounded-pill bg-success">Status</a>
                                        <a href="{{route('admin.product-Offer-Status', ['id' => $product->id])}}" class="badge rounded-pill bg-success">Offer Status</a>
                                        <a href="" class="badge rounded-pill bg-danger">Delete</a>
                                   </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

<script>
    function hideMessageDiv(productId) {
        document.getElementById("my-div-" + productId).style.opacity = "0";
        document.getElementById("my-div-" + productId).style.visibility = "hidden";
    }

    @foreach ($products as $product)
        setTimeout(function() {
            hideMessageDiv({{ $product->id }});
        }, 5000);
    @endforeach
</script>
