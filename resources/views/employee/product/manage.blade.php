@extends('employee.master')

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

            <table class="table lms_table_active ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">price</th>
                        <th scope="col">discount</th>
                        <th scope="col">New Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                        <tr>
                            <th scope="row"><a href="#" class="question_content">{{ $loop->iteration }}</a>
                            </th>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price}}</td>
                            <td>{{ $product->discount}}%</td>
                            <td>{{$product->new_price}}</td>
                            <td>
                                <img src="{{asset($product->image)}}" alt="" height="100" width="150">
                            </td>
                            <td>
                               <div class="col-md-6">
                                    <a href="{{route('product.detail', ['id' => $product->id])}}" class="badge rounded-pill bg-info">Detail</a>
                                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="badge rounded-pill bg-secondary">Edit</a>
                                    <a href="" class="badge rounded-pill bg-success">Status</a>
                                    <a href="{{route('product.discount-remove', ['id' => $product->id])}}" class="badge rounded-pill bg-success">Discount Remove</a>
                                    <a href="{{route('product.discount', ['id' =>$product->id])}}" class="badge rounded-pill bg-success">Discount</a>
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

@endsection

<script>
    setTimeout(function() {
      document.getElementById("my-div").style.opacity = "0";
      document.getElementById("my-div").style.visibility = "hidden";
    }, 5000);
  </script>

