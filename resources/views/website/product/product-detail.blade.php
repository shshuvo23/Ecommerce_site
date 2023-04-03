@extends('website.master')


@section('body')

<div class="axil-single-product-area bg-color-white">
    <div class="single-product-thumb axil-section-gap pb--30 pb_sm--20">
        <div class="container">
            <div class="row row--50">
                <div class="col-lg-6 mb--40">
                    <div class="h-100">
                        <div class="position-sticky sticky-top">
                            <div class="single-product-thumbnail axil-product">
                                <div class="thumbnail">
                                    <img src="{{asset($product->image)}}" alt="Product Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb--40">
                    <div class="h-100">
                        <div class="position-sticky sticky-top">
                            <div class="single-product-content nft-single-product-content">
                                <div class="inner">
                                    <h2 class="product-title">{{$product->product_name}}</h2>
                                    @if ($product->discount >0)
                                    <div>
                                        <h5>{{$product->discount}}<strong>%</strong><mark>Discount now</mark></h5>
                                    </div>
                                    @endif
                                    <div class="price-amount price-offer-amount">
                                        @if ($product->discount > 0)
                                        <span class="price current-price">{{$product->new_price}} <i class="fas fa-lira-sign"></i></i></span>
                                        <span class="price old-price">{{$product->price}} <i class="fas fa-lira-sign"></i> </span>
                                        @else
                                        <span class="price current-price">{{$product->price}} <i class="fas fa-lira-sign"></i></span>
                                        @endif
                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">

                                        <!-- Start Product Action  -->
                                        <ul class="product-action action-style-two d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="#" class="axil-btn btn-bg-primary">Buy Product</a></li>
                                        </ul>
                                        <!-- End Product Action  -->
                                    </div>

                                    <div class="nft-short-meta">
                                        <div class="row align-items-center">
                                            <div class="col-md-6">
                                                <div class="nft-category">
                                                    <label>Category :</label>
                                                    <div class="category-list">
                                                        <a href="#">{{$product->category->name}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="nft-verified-option">
                                                    <label>Is this item Authentic?</label>
                                                    <button class="verify-btn axil-btn btn-bg-secondary">Verifiy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="woocommerce-tabs wc-tabs-wrapper bg-vista-white nft-info-tabs">
                                        <div class="container">
                                            <ul class="nav tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                                </li>
                                                <li class="nav-item " role="presentation">
                                                    <a id="additional-info-tab" data-bs-toggle="tab" href="#additional-info" role="tab" aria-controls="additional-info" aria-selected="false">Additional Information</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Property</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                                    <div class="product-additional-info">
                                                        <p class="mb--15"><strong>About this Product</strong></p>
                                                        <p>{{$product->product_detail}}</p>
                                                        <div class="table-responsive">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Category Name</th>
                                                                        <td>{{$product->category->name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Brand Name</th>
                                                                        <td>{{$product->brand->name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Token Standard</th>
                                                                        <td>Bna-420</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Blockchain</th>
                                                                        <td>Ethereum</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                                                    <div class="product-additional-info">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Brand</th>
                                                                        <td>eTrade</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Collection </th>
                                                                        <td>eTrade Capsules</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Creator</th>
                                                                        <td>Arnold Ray</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Gen</th>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Rarity </th>
                                                                        <td>Epic</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Type</th>
                                                                        <td>Digital Art</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                                    <div class="product-additional-info">
                                                        <div class="table-responsive">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Brand</th>
                                                                        <td>eTrade</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Collection </th>
                                                                        <td>eTrade Capsules</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Creator</th>
                                                                        <td>Arnold Ray</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Gen</th>
                                                                        <td>1</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Rarity </th>
                                                                        <td>Epic</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Type</th>
                                                                        <td>Digital Art</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- woocommerce-tabs -->


                                    <!-- End Product Action Wrapper  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End .single-product-thumb -->
</div>
<!-- End Shop Area  -->

<!-- Start Recently Viewed Product Area  -->
<div class="axil-product-area bg-color-white pt--10 pb--50 pb_sm--30">
    <div class="container">
        <div class="section-title-wrapper">
            <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Related</span>
            <h2 class="title">Related Product</h2>
        </div>
        <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/nft/product-6.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$30</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/nft/product-5.png" alt="Product Images">
                        </a>

                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$3000</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club</a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/nft/product-4.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$100</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/nft/product-3.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$2000</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/nft/product-2.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$5000</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club</a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="200" data-sal-duration="1500" src="assets/images/product/nft/product-5.png" alt="Product Images">
                        </a>

                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$3000</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club</a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="300" data-sal-duration="1500" src="assets/images/product/nft/product-4.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$100</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="400" data-sal-duration="1500" src="assets/images/product/nft/product-3.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$2000</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club <span class="verified-icon"><i class="fas fa-badge-check"></i></span></a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
            <div class="slick-single-layout">
                <div class="axil-product product-style-six">
                    <div class="thumbnail">
                        <a href="single-product-7.html">
                            <img data-sal="fade" data-sal-delay="100" data-sal-duration="1500" src="assets/images/product/nft/product-2.png" alt="Product Images">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="inner">
                            <div class="product-price-variant">
                                <span class="price current-price">$5000</span>
                            </div>
                            <h5 class="title"><a href="single-product-7.html">Bored Ape Yacht Club</a></h5>
                            <div class="product-hover-action">
                                <ul class="cart-action">
                                    <li class="select-option"><a href="single-product-7.html">Buy Product</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .slick-single-layout -->
        </div>
    </div>
</div>

@endsection
