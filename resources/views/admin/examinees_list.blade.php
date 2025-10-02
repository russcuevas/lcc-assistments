
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
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/admin/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('assets/admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="{{ asset('assets/admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('assets/admin/css/themes/all-themes.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif !important;
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
                    <span style="color: white;">ASSISTments</span>
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
                <ol style="font-size: 15px;" class="breadcrumb breadcrumb-col-red">
                    <li><a href="index.php"><i style="font-size: 20px;" class="material-icons">home</i>
                            Dashboard</a></li>
                    <li class="active"><i style="font-size: 20px;" class="material-icons">groups</i>
                        Examinees
                    </li>
                    <li class="active"><i style="font-size: 20px;" class="material-icons">badge</i>
                        Examinees List
                    </li>
                </ol>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                                <h2 class="m-0" style="font-size: 25px; font-weight: 900; color: #000080;">
                                    List of Examinees
                                </h2>
                                <div id="print-container">
                                    
                                                                    </div>
                            </div>
                        </div>
                                                <div class="body">
                                                        <div class="row mb-3">
                                <div class="form-group">
                                    <form action="" method="GET">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-2">
                                                <select class="form-control select-form" id="month" name="month">
                                                    <option value="">All months</option>
                                                    <option value="01" >January</option><option value="02" >February</option><option value="03" >March</option><option value="04" >April</option><option value="05" >May</option><option value="06" >June</option><option value="07" >July</option><option value="08" >August</option><option value="09" >September</option><option value="10" >October</option><option value="11" >November</option><option value="12" >December</option>                                                </select>
                                            </div>

                                            <!-- Year Dropdown -->
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-2">
                                                <select class="form-control select-form" id="year" name="year">
                                                    <option value="">All years</option>
                                                    <option value="2025" >2025</option><option value="2026" >2026</option><option value="2027" >2027</option><option value="2028" >2028</option><option value="2029" >2029</option><option value="2030" >2030</option><option value="2031" >2031</option><option value="2032" >2032</option><option value="2033" >2033</option><option value="2034" >2034</option><option value="2035" >2035</option><option value="2036" >2036</option><option value="2037" >2037</option><option value="2038" >2038</option><option value="2039" >2039</option><option value="2040" >2040</option><option value="2041" >2041</option><option value="2042" >2042</option><option value="2043" >2043</option><option value="2044" >2044</option><option value="2045" >2045</option><option value="2046" >2046</option><option value="2047" >2047</option><option value="2048" >2048</option><option value="2049" >2049</option><option value="2050" >2050</option>                                                </select>
                                            </div>

                                            <!-- Buttons -->
                                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 mb-2">
                                                <div class="d-flex justify-content-start" style="gap: 10px;">
                                                    <!-- FILTER Button -->
                                                    <button type="submit" class="btn bg-red waves-effect btn-sm">
                                                        <i class="material-icons">filter_list</i>
                                                        <span class="filter-span">FILTER</span>
                                                    </button>

                                                    <!-- RESET Button -->
                                                    <a href="examinees_list.php" class="btn bg-grey waves-effect btn-sm">
                                                        <i class="material-icons">restart_alt</i>
                                                        <span class="filter-span">RESET</span>
                                                    </a>
                                                </div>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div id="printable-area" class="table-responsive mt-3">
                                <div id="printable-area" class="table-responsive mt-3">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Fullname</th>
                                                <th>Sex</th>
                                                <th>Age</th>
                                                <th>Birthday</th>
                                                <th>Strand</th>
                                                <th>Preferred Courses</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                    </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Jquery Validation Plugin Css -->
    <script src="{{ asset('assets/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/forms/form-validation.js') }}"></script>
    <!-- Bootstrap Core Js -->
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.js') }}"></script>
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
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/admin/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script>
        $(function() {
            $('.js-basic-example').DataTable({
                responsive: true,
                pageLength: 5,
                lengthChange: false
            });

            $('.js-exportable').DataTable({
                dom: 'Bfrtip',
                responsive: true,
                pageLength: 5,
                lengthChange: false,
                buttons: [{
                        extend: 'copy',
                        className: 'custom-button'
                    },
                    {
                        extend: 'csv',
                        className: 'custom-button'
                    },
                    {
                        extend: 'excel',
                        className: 'custom-button'
                    },
                    {
                        extend: 'pdf',
                        className: 'custom-button'
                    },
                    {
                        extend: 'print',
                        className: 'custom-button'
                    }
                ]
            });
        });
    </script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
</body>

</html>