@extends('website.master')

@section('contain')

<div class="axil-breadcrumb-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="inner">
                    <ul class="axil-breadcrumb">
                        <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="separator"></li>
                        <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                    </ul>
                    <h1 class="title">Explore All Products</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Area  -->
<!-- Start Shop Area  -->
<div class="axil-shop-area axil-section-gap bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="axil-shop-top">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="category-select">

                                <!-- Start Single Select  -->
                                <select class="single-select">
                                    <option>Categories</option>
                                    <option>Fashion</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Beauty</option>
                                </select>
                                <!-- End Single Select  -->

                                <!-- Start Single Select  -->
                                <!-- End Single Select  -->

                                <!-- Start Single Select  -->
                                <select class="single-select">
                                    <option>Price Range</option>
                                    <option>0 - 100</option>
                                    <option>100 - 500</option>
                                    <option>500 - 1000</option>
                                    <option>1000 - 1500</option>
                                </select>
                                <!-- End Single Select  -->

                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                <!-- Start Single Select  -->
                                <select class="single-select">
                                    <option>Sort by Latest</option>
                                    <option>Sort by Name</option>
                                    <option>Sort by Price</option>
                                    <option>Sort by Viewed</option>
                                </select>
                                <!-- End Single Select  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row--15">
            @foreach ($products as $product)
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="axil-product product-style-one has-color-pick mt--40">
                    <div class="thumbnail">
                        <a href="single-product.html">
                            <img src="{{asset($product->image)}}" alt="Product Images">
                        </a>
                        <div class="label-block label-right">
                            @if ($product->discount > 0)
                                <div class="product-badget">{{$product->discount*100}}% Off</div>
                            @endif
                        </div>
                        <div class="product-hover-action">
                            <ul class="cart-action">
                                <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <h5 class="title"><a href="single-product.html">{{$product->product_name}}</a></h5>
                            <div class="product-price-variant">

                                @if ($product->discount > 0)
                                <span class="price current-price">{{$product->new_price}}</span>
                                <span class="price old-price">{{$product->price}}</span>
                                @else
                                <span class="price current-price">{{$product->price}}</span>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Product  -->

        </div>
        <div class="text-center pt--30">
            {{ $products->links() }}
            {{-- <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a> --}}
        </div>
    </div>
    <!-- End .container -->
</div>

@endsection
