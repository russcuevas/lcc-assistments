<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>LCC - ASSISTments</title>    
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('assets/auth/images/logo.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('assets/admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{ asset('assets/admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="{{ asset('assets/admin/plugins/morrisjs/morris.css') }}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <link href="{{ asset('assets/admin/css/themes/all-themes.css') }}" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif !important;
        }

        .select-form {
            display: block !important;
            width: 100% !important;
            height: 34px !important;
            padding: 6px 12px !important;
            font-size: 14px !important;
            line-height: 1.42857143 !important;
            color: #555 !important;
            background-color: #fff !important;
            background-image: none !important;
            border: 1px solid #ccc !important;
            border-radius: 4px !important;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075) !important;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s !important;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
        }
    </style>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a id="app-title" style="display:flex;align-items:center" class="navbar-brand" href="">
                    <img style="width:45px;display:inline;margin-right:10px;" src="{{ asset('assets/auth/images/logo.png') }}" />
                    <span style="color: white;">LCC-ASSISTments</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right">
                        <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                            <i class="material-icons">account_circle</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        {{-- left sidebar --}}
        @include('admin.components.left_sidebar')
        <!-- end left sidebar -->
        {{-- right sidebar --}}
        @include('admin.components.right_sidebar')
        <!-- end right sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2 style="font-size: 25px; font-weight: 900; color: #000080 !important;">DATA ANALYTICS</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"
                    onclick="window.location.href='admin_management.php';">
                    <div class="info-box bg-red hover-expand-effect"
                        style="background-color: #000080 !important; cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">admin_panel_settings</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white !important;">TOTAL ADMIN</div>
                            <div class="" style="font-size: 20px; color: white !important">1</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="window.location.href='add_examiners.php';">
                    <div class="info-box bg-red hover-expand-effect"
                        style="background-color: #000080 !important; cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">groups</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white !important;">TOTAL EXAMINEES</div>
                            <div class="" style="font-size: 20px; color: white !important">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" onclick="window.location.href='course.php';">
                    <div class="info-box bg-red hover-expand-effect"
                        style="background-color: #000080 !important; cursor: pointer;">
                        <div class="icon">
                            <i class="material-icons">done_all</i>
                        </div>
                        <div class="content">
                            <div class="text" style="color: white !important;">TOTAL COURSE</div>
                            <div class="" style="font-size: 20px; color: white !important">8</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">

            </div>

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('assets/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/forms/form-validation.js') }}"></script>
    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('assets/admin/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
</body>

</html>