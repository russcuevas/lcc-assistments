
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
                    <img style="width:45px;display:inline;margin-right:10px;" src="" />
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
                    <li class="active"><i style="font-size: 20px;" class="material-icons">add</i> Add Admin
                    </li>
                </ol>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="font-size: 25px; font-weight: 900; color: #000080;">
                                Add admin
                            </h2>
                        </div>
                        <div class="body">
                            <!-- ALERTS -->
                                                        <!-- END ALERTS -->
                            <form action="" id="add_admin_validation" method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float" style="margin-top: 20px !important;">
                                    <div class="form-line">
                                        <input type="file" class="form-control" name="profile_picture" required onchange="previewImage(event)">
                                        <label class="form-label">Profile Picture</label>
                                    </div>
                                    <div id="image-preview-container" style="display:none; margin-top: 10px;">
                                        <img id="image-preview" src="#" alt="Profile Picture" style="width: 100px; height: 100px;" />
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fullname" required>
                                        <label class="form-label">Fullname</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" maxlength="11" name="contact_number" required>
                                        <label class="form-label">Phone number</label>
                                    </div>
                                </div>
                                <a href="{{ route('admin.admin.management.page') }}" class="btn btn-warning waves-effect">GO BACK</a>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->


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

    <script>
        $(function() {
            $('#form_validation').validate({
                rules: {
                    'checkbox': {
                        required: true
                    },
                    'gender': {
                        required: true
                    }
                },
                highlight: function(input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function(input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function(error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });

            //Advanced Form Validation
            $('#add_admin_validation').validate({
                rules: {
                    'date': {
                        customdate: true
                    },
                    'creditcard': {
                        creditcard: true
                    }
                },
                highlight: function(input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function(input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function(error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });

            //Custom Validations ===============================================================================
            //Date
            $.validator.addMethod('customdate', function(value, element) {
                    return value.match(/^\d\d\d\d?-\d\d?-\d\d$/);
                },
                'Please enter a date in the format YYYY-MM-DD.'
            );

            //Credit card
            $.validator.addMethod('creditcard', function(value, element) {
                    return value.match(/^\d\d\d\d?-\d\d\d\d?-\d\d\d\d?-\d\d\d\d$/);
                },
                'Please enter a credit card in the format XXXX-XXXX-XXXX-XXXX.'
            );
            //==================================================================================================
        });
    </script>

    <!-- IMAGE PREVIEW -->
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById('image-preview');
                var container = document.getElementById('image-preview-container');
                preview.src = reader.result;
                container.style.display = 'block'; // Show the preview container
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    <!-- SWEETALERT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets/admin/js/admin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
</body>

</html>