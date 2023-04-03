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
                            <form action="{{ route('product.all') }}" method="GET">
                                @csrf
                                <!-- Start Single Select  -->
                                <select class="single-select" name="category"  onchange="this.form.submit()">
                                    {{-- <option>Categories</option>
                                    <option>Fashion</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Beauty</option> --}}
                                    <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>All</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $selectedCategoryId == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <!-- End Single Select  -->
                            </form>
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
                                <div class="product-badget">{{$product->discount}}% Off</div>
                            @endif
                        </div>
                        <div class="product-hover-action">
                            <ul class="cart-action">
                                <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                <li class="select-option">
                                    <form action="{{route('cart', [$product->id])}}" method="post">
                                        @csrf
                                        <input type="number" value="1" min="1" style="100px" class="form-control" name="quantity" hidden>
                                        <input class="btn btn-primary btn-sm" type="submit" value="Add to Cart">
                                    </form>
                                </li>
                                <li class="quickview"><a href="{{route('product-detail', ['id' => $product->id])}}"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <h5 class="title"><a href="{{route('product-detail', ['id' => $product->id])}}">{{$product->product_name}}</a></h5>
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
