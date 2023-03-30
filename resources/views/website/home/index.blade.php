@extends('website.master')


@section('body')
<div class="axil-main-slider-area main-slider-style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-sm-6">
                <div class="main-slider-content">
                    <div class="slider-content-activation-one">
                        @foreach ($recent_products as $recent_product)
                        <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="400" data-sal-duration="800">
                            <span class="subtitle"><i class="fas fa-fire"></i> Hot Deal In This Week</span>
                            <h1 class="title">{{$recent_product->product_name}}</h1>
                            <div class="slide-action">
                                <div class="shop-btn">
                                    <a href="shop.html" class="axil-btn btn-bg-white"><i class="fal fa-shopping-cart"></i>Shop Now</a>
                                </div>
                                <div class="item-rating">
                                    <div class="thumb">
                                        <ul>
                                            <li><img src="{{asset('/')}}website/assets/images/others/author1.png" alt="Author"></li>
                                            <li><img src="{{asset('/')}}website/assets/images/others/author2.png" alt="Author"></li>
                                            <li><img src="{{asset('/')}}website/assets/images/others/author3.png" alt="Author"></li>
                                            <li><img src="{{asset('/')}}website/assets/images/others/author4.png" alt="Author"></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <span class="rating-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fal fa-star"></i>
                                </span>
                                        <span class="review-text">
                                    <span>100+</span> Reviews
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="main-slider-large-thumb">
                    <div class="slider-thumb-activation-one axil-slick-dots">
                        @foreach ( $recent_products as $recent_product )
                        <div class="single-slide slick-slide" data-sal="slide-up" data-sal-delay="600" data-sal-duration="1500">
                            <img src="{{asset($recent_product->image)}}" alt="Product" height="600" width="100">
                            <div class="product-price">
                                <span class="text">From</span>
                                <span class="price-amount">{{$recent_product->price}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="shape-group">
        <li class="shape-1"><img src="{{asset('/')}}website/assets/images/others/shape-1.png" alt="Shape"></li>
        <li class="shape-2"><img src="{{asset('/')}}website/assets/images/others/shape-2.png" alt="Shape"></li>
    </ul>
</div>
<!-- Start Categorie Area  -->
<div class="axil-categorie-area bg-color-white axil-section-gapcommon">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-secondary"> <i class="far fa-tags"></i> Categories</span>
            <h2 class="title">Browse by Category</h2>
        </div>
        <div class="categrie-product-activation slick-layout-wrapper--15 axil-slick-arrow  arrow-top-slide">
            @foreach ($categories as $category)
            <div class="slick-single-layout">
                <div class="categrie-product" data-sal="zoom-out" data-sal-delay="200" data-sal-duration="500">
                    <div class="card-body">
                            <img class="img-fluid" src="{{asset($category->image)}}" alt="product categorie">
                            <a href="{{ route('category.product-show', $category->id) }}" class="cat-title">{{$category->name}}</a>
                    </div>
                </div>
                <!-- End .categrie-product -->
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('product')

<div class="axil-product-area bg-color-white axil-section-gap">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"> <i class="far fa-shopping-basket"></i> Our Products</span>
            <h2 class="title">Explore our Products</h2>
        </div>
        <div class="explore-product-activation slick-layout-wrapper slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout">
                <div class="row row--15">
                    @foreach ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 mb--30">
                        <div class="axil-product product-style-one">
                            <div class="thumbnail" style="height: 140px; width: 90%;">
                                <a href="single-product.html">
                                    <img data-sal="zoom-out" data-sal-delay="200" data-sal-duration="800" loading="lazy" class="main-img" src="{{asset($product->image)}}" alt="{{$product->product_name}}">
                                    <img class="hover-img" src="{{asset($product->image)}}" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    @if ($product->discount > 0)
                                        <div class="product-badget">{{$product->discount}}%</div>
                                    @endif

                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                        <li class="select-option">
                                            <form action="{{route('cart', [$product->id])}}" method="post">
                                                @csrf
                                                <input type="number" value="1" min="1" style="100px" class="form-control" name="quantity">
                                                <input class="btn btn-primary btn-sm" type="submit" value="Add to Cart">
                                            </form>


                                            {{-- <a href="{{route('product.cart')}}">
                                                Add to Cart
                                            </a> --}}
                                        </li>
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <div class="product-rating">
                                        <span class="icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                                        <span class="rating-number">(64)</span>
                                    </div>
                                    <h5 class="title"><a href="single-product.html">{{ $product->product_name }}</a></h5>
                                    <div class="product-price-variant">
                                        @if ($product->discount > 0 )
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

                    <!-- End Single Product  -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt--20 mt_sm--0">
                <a href="{{ route('product.all') }}" class="axil-btn btn-bg-lighter btn-load-more">View All Products</a>
            </div>
        </div>

    </div>
</div>

@endsection
