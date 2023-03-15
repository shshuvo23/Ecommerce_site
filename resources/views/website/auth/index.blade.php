<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 06:35:51 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>


    <link rel="stylesheet" href="{{ asset('/') }}admin/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/morris/morris.css">

    <link rel="stylesheet" href="{{ asset('/') }}admin/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="{{ asset('/') }}admin/css/metisMenu.css">

    <link rel="stylesheet" href="{{ asset('/') }}admin/css/style1.css" />
    <link rel="stylesheet" href="{{ asset('/') }}admin/css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <div class="py-3 mx-auto" style="width: 500px;">
        <div class="container py-3 px-5">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h2>Log in</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('customer.login')}}" method="post">
                            @csrf
                            <div class="">
                                <input type="text" class="form-control" name="" placeholder="Enter your email">
                            </div>
                            <div class="">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <a href="#" class="btn_1 full_width text-center">Log in</a>
                            <p>Need an account? <a data-bs-toggle="modal" data-bs-target="#sing_up" data-bs-dismiss="modal"
                                    href="#"> Sign
                                    Up</a></p>
                            <div class="text-center">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#forgot_password" data-bs-dismiss="modal"
                                    class="pass_forget_btn">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('/') }}admin/js/jquery1-3.4.1.min.js"></script>

    <script src="{{ asset('/') }}admin/js/popper1.min.js"></script>

    <script src="{{ asset('/') }}admin/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('/') }}admin/js/metisMenu.js"></script>

    <script src="{{ asset('/') }}admin/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/chartlist/Chart.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/jszip.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datatable/js/buttons.print.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/datepicker/datepicker.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datepicker/datepicker.en.js"></script>
    <script src="{{ asset('/') }}admin/vendors/datepicker/datepicker.custom.js"></script>
    <script src="{{ asset('/') }}admin/js/chart.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/chartjs/roundedBar.min.js"></script>

    <script src="{{ asset('/') }}admin/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="{{ asset('/') }}admin/vendors/tagsinput/tagsinput.js"></script>

    <script src="{{ asset('/') }}admin/vendors/text_editor/summernote-bs4.js"></script>
    <script src="{{ asset('/') }}admin/vendors/am_chart/amcharts.js"></script>

    <script src="{{ asset('/') }}admin/vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/scroll/scrollable-custom.js"></script>

    <script src="{{ asset('/') }}admin/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

    <script src="{{ asset('/') }}admin/vendors/apex_chart/apex-chart2.js"></script>
    <script src="{{ asset('/') }}admin/vendors/apex_chart/apex_dashboard.js"></script>
    <script src="{{ asset('/') }}admin/vendors/echart/echarts.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/chart_am/core.js"></script>
    <script src="{{ asset('/') }}admin/vendors/chart_am/charts.js"></script>
    <script src="{{ asset('/') }}admin/vendors/chart_am/animated.js"></script>
    <script src="{{ asset('/') }}admin/vendors/chart_am/kelly.js"></script>
    <script src="{{ asset('/') }}admin/vendors/chart_am/chart-custom.js"></script>

    <script src="{{ asset('/') }}admin/js/dashboard_init.js"></script>
    <script src="{{ asset('/') }}admin/js/custom.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Mar 2023 06:37:32 GMT -->

</html>
