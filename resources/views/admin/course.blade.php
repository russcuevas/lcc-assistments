
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
                    <li class="active"><i style="font-size: 20px;" class="material-icons">description</i>
                        Assessment
                    </li>
                    <li class="active"><i style="font-size: 20px;" class="material-icons">description</i>
                        Course
                    </li>
                </ol>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="font-size: 25px; font-weight: 900; color: #000080;">
                                List of Course
                            </h2>
                        </div>
                        <div class="body">
                            <div>
                                <a href="{{ route('admin.course.add.page') }}" class="btn bg-red waves-effect" style="margin-bottom: 15px;">+ ADD COURSE</a>
                            </div>
                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Created</th>
                                            <th>Updated</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4aad90b865.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Elementary Education (BEEd)</td>
                                                <td>is a four-year program that focuses on preparing excellent educators for reflective classroom practice in elementary schools.</td>
                                                <td>April 22, 2025 - 9:43 AM</td>
                                                <td>September 25, 2025 - 10:37 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=12" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(12);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68db6b8c56d8e.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Secondary Education (BSEd)</td>
                                                <td>degree program aims to prepare students for teaching in the secondary school.</td>
                                                <td>April 22, 2025 - 9:48 AM</td>
                                                <td>September 30, 2025 - 1:33 PM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=13" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(13);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4a7f1ad8c8.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Science in Business Administration (BSBA)</td>
                                                <td>is a four-year program which provides professional business and management education for those who would like to become entrepreneurs or pursue a career in any field of business such as economics, finance, human capital management, and marketing.</td>
                                                <td>April 22, 2025 - 9:49 AM</td>
                                                <td>September 25, 2025 - 10:24 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=14" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(14);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4a8187bdd6.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Arts in Communication (BA Comm)</td>
                                                <td>program provides students with an in-depth understanding of critical and analytical frames used in the communication discipline.</td>
                                                <td>April 22, 2025 - 9:53 AM</td>
                                                <td>September 25, 2025 - 10:25 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=15" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(15);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4a82381d92.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Science in Computer Science (BSCS)</td>
                                                <td>is a four-year program that includes the study of computing concepts and theories, algorithmic foundations, and new developments in computing.</td>
                                                <td>April 22, 2025 - 9:58 AM</td>
                                                <td>September 25, 2025 - 10:25 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=16" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(16);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4a82c76eac.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Science in Criminology (BSCrim)</td>
                                                <td>degree program that focuses on the study of crime, criminal behavior, and the justice system.</td>
                                                <td>April 22, 2025 - 10:00 AM</td>
                                                <td>September 25, 2025 - 10:25 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=17" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(17);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4a8362b815.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Bachelor of Science in Nursing (BSN)</td>
                                                <td>program aims to develop a professional nurse who is able to assume entry-level positions in either health facilities or community settings.</td>
                                                <td>April 22, 2025 - 10:06 AM</td>
                                                <td>September 25, 2025 - 10:25 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=18" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(18);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <div style="display: flex; overflow-x: auto; padding: 10px 0; max-width: 150px;"><img src="../public/courses/68d4a83d23c3c.jpg" alt="Course Image" style="height: 70px; width: 150px; margin-right: 10px;"></div>                                                </td>
                                                <td>Association of Computer Technology (ACT)</td>
                                                <td>is a 2-year degree program that provides specialized computing and information technology tracks equipping graduates with the required skills</td>
                                                <td>April 22, 2025 - 10:07 AM</td>
                                                <td>September 25, 2025 - 10:26 AM</td>

                                                <td>
                                                    <a style="margin-bottom: 5px;" href="update_course.php?course_id=19" class="btn btn-warning mb-2">Update</a>
                                                    <a href="javascript:void(0);" onclick="confirmDelete(19);" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
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