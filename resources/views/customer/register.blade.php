<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 04:27:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eTrade || Sign Up</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/images/favicon.png">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/jquery-ui.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/sal.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/vendor/base.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.min.css">

</head>


<body>
    <div class="axil-signin-area">

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="index.html" class="site-logo"><img src="assets/images/logo/logo.png" alt="logo"></a>
                </div>
                <div class="col-md-6">
                    <div class="singin-header-btn">
                        <p>Already a member?</p>
                        <a href="{{route('customer.login-page')}}" class="axil-btn btn-bg-secondary sign-up-btn">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--10">
                    <h3 class="title">We Offer the Best Products</h3>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">I'm New Here</h3>
                        <p class="b2 mb--55">Enter your detail below</p>
                        <form action="{{route('customer.register')}}" method="post" enctype="multipart/form-data" class="singin-form">
                            @csrf
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" class="form-control" name="name" value="anniemario">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="annie@example.com">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="number" class="form-control" name="mobile" value="123456789">
                            </div>
                            <div class="form-group">
                                <label>Nid</label>
                                <input type="number" class="form-control" name="nid" value="123456789">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="123456789">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" value="123456789">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <div class="row py-3">
                                    <input type="file" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-bg-primary submit-btn">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <!-- Modernizer JS -->
    <script src="{{asset('/')}}website/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="{{asset('/')}}website/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('/')}}website/assets/js/vendor/popper.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/slick.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/js.cookie.js"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="{{asset('/')}}website/assets/js/vendor/jquery-ui.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/sal.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/counterup.js"></script>
    <script src="{{asset('/')}}website/assets/js/vendor/waypoints.min.js"></script>

    <!-- Main JS -->
    <script src="{{asset('/')}}website/assets/js/main.js"></script>

</body>


<!-- Mirrored from new.axilthemes.com/demo/template/etrade/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2023 04:27:38 GMT -->
</html>
