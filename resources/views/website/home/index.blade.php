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
