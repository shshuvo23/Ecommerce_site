@extends('website.master')

@section('body')

<div class="container">
    <h2>{{ $category->name }}</h2>
    <div class="row row--15">
        @foreach($products as $product)
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                        <img src="{{asset($product->image)}}" alt="Product Images">
                    <div class="label-block label-right">
                        @if ($product->discount > 0)
                        <div class="product-badget">{{$product->discount}} <b>%</b> </div>
                        @endif
                    </div>
                    <div class="product-hover-action">
                        <ul class="cart-action">
                            <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                            <li class="select-option">
                                <form action="{{route('cart', [$product->id])}}" method="post">
                                    @csrf
                                    <input type="number" value="1" min="1" style="100px" class="form-control" name="quantity">
                                    <input class="btn btn-primary btn-sm" type="submit" value="Add to Cart">
                                </form>

                            </li>
                            <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="product-content">
                    <div class="inner">
                        <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$30</span>
                            <span class="price old-price">$30</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Single Product  -->
        {{-- <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-02.png" alt="Product Images">
                    </a>
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
                        <h5 class="title"><a href="single-product.html">Media remote</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$40</span>
                            <span class="price old-price">$50</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-03.png" alt="Product Images">
                    </a>
                    <div class="label-block label-right">
                        <div class="product-badget">30% OFF</div>
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
                        <h5 class="title"><a href="single-product.html">HD camera</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$45</span>
                            <span class="price old-price">$60</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-04.png" alt="Product Images">
                    </a>
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
                        <h5 class="title"><a href="single-product.html">Guys Bomber Jacket</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$70</span>
                            <span class="price old-price">$100</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-05.png" alt="Product Images">
                    </a>
                    <div class="label-block label-right">
                        <div class="product-badget">15% OFF</div>
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
                        <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$38</span>
                            <span class="price old-price">$50</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-06.png" alt="Product Images">
                    </a>
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
                        <h5 class="title"><a href="single-product.html">Level 20 RGB Cherry</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$25</span>
                            <span class="price old-price">$40</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-07.png" alt="Product Images">
                    </a>
                    <div class="label-block label-right">
                        <div class="product-badget">5% OFF</div>
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
                        <h5 class="title"><a href="single-product.html">Logitech Streamcam</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$15</span>
                            <span class="price old-price">$20</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/electric/product-08.png" alt="Product Images">
                    </a>
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
                        <h5 class="title"><a href="single-product.html">Bass Meets Clarity</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$60</span>
                            <span class="price old-price">$80</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/fashion/product-9.png" alt="Product Images">
                    </a>
                    <div class="label-block label-right">
                        <div class="product-badget">20% OFF</div>
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
                        <h5 class="title"><a href="single-product.html">Wall Mount</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$30</span>
                            <span class="price old-price">$30</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/fashion/product-10.png" alt="Product Images">
                    </a>
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
                        <h5 class="title"><a href="single-product.html">MX Master 3</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$40</span>
                            <span class="price old-price">$50</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/fashion/product-11.png" alt="Product Images">
                    </a>
                    <div class="label-block label-right">
                        <div class="product-badget">30% OFF</div>
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
                        <h5 class="title"><a href="single-product.html">Zone Headphone</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$45</span>
                            <span class="price old-price">$60</span>
                        </div>
                        <div class="color-variant-wrapper">
                            <ul class="color-variant">
                                <li class="color-extra-01 active"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-02"><span><span class="color"></span></span>
                                </li>
                                <li class="color-extra-03"><span><span class="color"></span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Product  -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                    <a href="single-product.html">
                        <img src="{{asset('/')}}website/assets/images/product/fashion/product-12.png" alt="Product Images">
                    </a>
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
                        <h5 class="title"><a href="single-product.html">Mice Logitech</a></h5>
                        <div class="product-price-variant">
                            <span class="price current-price">$70</span>
                            <span class="price old-price">$100</span>
                        </div>
                        <div class="color-variant-wrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Single Product  -->
    </div>
    <div class="text-center pt--30">
        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
    </div>
</div>

@endsection
