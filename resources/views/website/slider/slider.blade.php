@extends('website.master')


@section('slider')

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
                <img src="{{asset($recent_product->image)}}" alt="Product">
                <div class="product-price">
                    <span class="text">From</span>
                    <span class="price-amount">{{$recent_product->price}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
