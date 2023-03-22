@extends('admin.master')

@section('pageTitle')
    Product
@endsection

@section('pageDropDown')
    Product Detail
@endsection

@section('body')
<div class="row">
    <div class="col-12">
        <div class="white_card position-relative mb_20">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <img src="{{asset($product->image)}}" alt="" class="mx-auto d-block sm_w_100" height="300" />
                    </div>

                    <div class="col-lg-6 align-self-center">
                        <div class="single-pro-detail">
                            <p class="mb-1">Category Name:{{$product->category->name}}</p>
                            <p class="mb-1">Brand Name:{{$product->brand->name}}</p>
                            <div class="custom-border mb-3"></div>
                            <h3 class="pro-title">{{$product->product_name}}</h3>
                            <p class="text-muted mb-0">{{$product->barcode}}</p>
                            <ul class="list-inline mb-2 product-review">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star-half text-warning"></i></li>
                                <li class="list-inline-item">4.5 (9830 reviews)</li>
                            </ul>
                            <ul class="list-inline mb-2 product-review">
                                <li class="list-inline-item">{{$product->price}}</li>
                                <li class="list-inline-item">{{$product->discount}}</li>
                                <li class="list-inline-item">{{$product->new_price}}</li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star-half text-warning"></i></li>
                                <li class="list-inline-item">4.5 (9830 reviews)</li>
                            </ul>
                            {{-- <h2 class="pro-price">
                                {{$product->price}} <span><del>$180.00</del></span><span class="text-danger fw-bold ms-2">50%
                                    Off</span>
                            </h2> --}}
                            @if($product->discount > 0)
                                {{$product->new_price}} <span><del>{{$product->price}}</del></span><span class="text-danger fw-bold ms-2">{{$product->discount*100}}% Off</span>
                            @else
                                {{$product->price}}
                            @endif
                            <h6 class="text-muted font_s_13 mt-2 mb-1">Product Description :</h6>
                                <h4>{{$product->product_detail}}</h4>

                            <div class="quantity mt-3">
                                <input class="form-control form-control-sm" type="number" min="0" value="0"
                                    id="example-number-input" />
                                <a href="#" class="btn green_bg text-white px-4 d-inline-block ">
                                    <i class="fa fa-cart-plus me-2"></i>Add to Cart
                                </a>
                            </div>
                            <h5 class="mb-1">Uploaded By : {{ $product->employee->name }} </h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
