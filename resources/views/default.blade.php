


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LCC - Homepage</title>

    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/auth/images/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/default.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-shadow: 2px 2px #000;
            margin-bottom: 20px;
        }

        .course-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 15px;
            overflow: hidden;
            position: relative;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .slick-container img {
            border-radius: 10px;
            transition: transform 0.5s ease;
            width: 100%;
            height: auto;
        }

        .slick-container img:hover {
            transform: scale(1.05) rotate(1deg);
        }

        .learn-btn {
            background-color: #000080;
            border: none;
        }

        .learn-btn:hover {
            background-color: #FEC653;
            color: #000;
        }

        .dark-mode {
            background-color: #121212 !important;
            color: white !important;
        }

        .dark-mode .course-card {
            background-color: #1e1e1e;
            color: #fff;
        }

        .dark-mode .learn-btn {
            background-color: #FEC653;
            color: #000;
        }

        .dark-toggle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #000080;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 20px;
            z-index: 9999;
            transition: background-color 0.3s ease;
        }

        .dark-mode .text-muted {
            color: #ffffff !important;
        }

        .dark-toggle:hover {
            background-color: #FEC653;
            color: #000;
        }

        .dark-mode .form-check-label {
            color: white !important;
        }

        .dark-mode header h1 {
            color: #FEC653 !important;
        }

        .nav-link.active {
            color: #FEC653 !important;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000080;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .logo-preloader {
            border-radius: 50px !important;
            width: 100px;
            animation: tibok 1s infinite;
        }

        @keyframes tibok {

            0%,
            50%,
            100% {
                transform: scale(1);
            }

            25%,
            75% {
                transform: scale(1.2);
            }
        }

        .pagination .page-item.active .page-link {
            background-color: #000080 !important;
            border-color: #000080 !important;
            color: #fff !important;
        }

        .pagination .page-link {
            color: #000080;
        }

        .pagination .page-link:hover {
            background-color: #FEC653;
            color: #000080;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img style="height: 60px" > &nbsp; LA CONCEPCION COLLEGE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/login">Admin Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="student/login">Examiners Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <img src="{{ asset('assets/auth/images/logo.png') }}" alt=""><h1>ASSISTments</h1>
    </header>




    <!-- Course Section -->
    <div class="container">
        <h3 class="mt-5 text-center">📚 Offered Courses</h3>
        <div class="form-check form-switch ">
            <input class="form-check-input" type="checkbox" role="switch" id="darkToggle">
            <label class="form-check-label text-dark" for="darkToggle">Dark Mode</label>
        </div>
        <div class="row mt-4">
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4aad90b865.jpg" alt="Bachelor of Elementary Education (BEEd)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Elementary Education (BEEd)</h4>
                        <p class="text-muted">
                            is a four-year program that focuses on preparing excellent educators for reflect...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=12" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68db6b8c56d8e.jpg" alt="Bachelor of Secondary Education (BSEd)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Secondary Education (BSEd)</h4>
                        <p class="text-muted">
                            degree program aims to prepare students for teaching in the secondary school.                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=13" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4a7f1ad8c8.jpg" alt="Bachelor of Science in Business Administration (BSBA)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Science in Business Administration (BSBA)</h4>
                        <p class="text-muted">
                            is a four-year program which provides professional business and management educa...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=14" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4a8187bdd6.jpg" alt="Bachelor of Arts in Communication (BA Comm)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Arts in Communication (BA Comm)</h4>
                        <p class="text-muted">
                            program provides students with an in-depth understanding of critical and analyti...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=15" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4a82381d92.jpg" alt="Bachelor of Science in Computer Science (BSCS)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Science in Computer Science (BSCS)</h4>
                        <p class="text-muted">
                            is a four-year program that includes the study of computing concepts and theorie...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=16" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4a82c76eac.jpg" alt="Bachelor of Science in Criminology (BSCrim)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Science in Criminology (BSCrim)</h4>
                        <p class="text-muted">
                            degree program that focuses on the study of crime, criminal behavior, and the ju...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=17" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4a8362b815.jpg" alt="Bachelor of Science in Nursing (BSN)">
                                                                                    </div>
                        <h4 class="mt-3">Bachelor of Science in Nursing (BSN)</h4>
                        <p class="text-muted">
                            program aims to develop a professional nurse who is able to assume entry-level p...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=18" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                            <div class="col-12 col-sm-6 col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="course-card d-flex flex-column">
                        <div class="slick-container">
                                                                                                                            <img style="height: 250px; object-fit: cover;" src="public/courses/68d4a83d23c3c.jpg" alt="Association of Computer Technology (ACT)">
                                                                                    </div>
                        <h4 class="mt-3">Association of Computer Technology (ACT)</h4>
                        <p class="text-muted">
                            is a 2-year degree program that provides specialized computing and information t...                        </p>
                        <div class="mt-auto">
                            <a href="view_course.php?id=19" class="btn learn-btn w-100 text-white">Learn More</a>
                        </div>
                    </div>
                </div>
                    </div>
    </div>



    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.slick-container').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: true
            });
        });
    </script>

    <script>
        const toggleSwitch = document.getElementById('darkToggle');
        const themeLabel = document.querySelector('.form-check-label');

        // On switch toggle
        toggleSwitch.addEventListener('change', () => {
            document.body.classList.toggle('dark-mode', toggleSwitch.checked);
            localStorage.setItem('theme', toggleSwitch.checked ? 'dark' : 'light');
        });

        // Load saved theme on page load
        window.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'dark') {
                document.body.classList.add('dark-mode');
                toggleSwitch.checked = true;
            }
        });
    </script>

</body>

</html>