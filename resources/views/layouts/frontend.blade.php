<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta property="og:title" content="@yield('title')">
    <!--<meta property="og:description" content="@yield('details')">-->
    <meta property="og:image" content="@yield('image')">

    <title></title>
    <!--<meta content="@yield('details')" name="description">-->
    <meta content="" name="keywords">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="img/Logo.png" rel="icon">
    <!--  <link href="{{ asset('web/') }}/img/Logo.png" rel="Logo.png">-->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.6.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <!-- ======= Top Bar ======= -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <marquee style="margin-top:10px; color: #0101CC;"><b> যত্রতত্র ময়লা ফেলবেন না  |  যানজট নিরসনে সহায়তা করুন  |  নিরাপদ ও সুন্দর পরিবেশ বজায় রাখুন। </b></marquee>
                </div>
            </div>
        </div>
        <div class="container d-flex align-items-center" style="margin-top:-32px;">

            <a href="/" class="logo me-auto"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0 pt-2 mt-2">

                <ul>
                    <li><a class="nav-link scrollto " href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('mission') }}">Mission</a></li>
                    <li class="dropdown"><a href="#"><span>Members</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('executive-member') }}">Executive Members</a></li>
                            <li><a href="{{ url('honorable-member') }}">Honorary Members</a></li>
                            <li><a href="{{ url('life-member') }}">Life Members</a></li>
                            <li><a href="{{ url('general-member') }}">General Members</a></li>

                            <li class="d-none"><a href="#">Donor Member</a></li>
                            <li class="d-none"><a href="#" data-toggle="modal" data-target="#exampleModal">Membership
                                    Form</a></li>
                            <li><a href="{{ url('membership_form') }}">Membership Info</a></li>
                            <li><a href="{{ url('promotion') }}">Member Benefits</a></li>
                        </ul>
                    </li>

                    <!--          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>-->
                    <li><a class="nav-link scrollto" href="{{ url('gallery') }}">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('about_us') }}">About us</a></li>
                    <li class="dropdown"><a href="#"><span>News and Events</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>

                            <li><a href="{{ url('blog') }}">News and Events</a></li>
                            <li><a href="{{ url('news_release') }}">News Release</a></li>
                            <li><a href="{{ url('media') }}">Media Broadcast</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="{{ url('contact') }}">Contact</a></li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>



            </nav><!-- .navbar -->



            <a href="{{ url('complain') }}" class="complain-btn scrollto"><span class="d-md-inline">Complain</span></a>

        </div>
    </header>

    <!-- End Header -->


    <!-- ======= Hero Section ======= -->


    <main id="main">

        @yield('main_content')

    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="footer-info">
                            <h3>Address:</h3>
                            <div class="address">
                                <p class="left_address">
                                    House 11(Ground floor), Road: 04, <br>
                                    Dhanmondi, Dhaka-1205
                                </p>
                                <p class="right_address">
                                    <strong>Phone:</strong> 01404004100 | 01404004101<br>
                                    <strong>Email:</strong> <a
                                        href="mailto:info@dhanmondisociety.org">info@dhanmondisociety.org</a> | <a
                                        href="mailto:contact@dhanmondisociety.org">contact@dhanmondisociety.org</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-links">
                        <h3>Follow Us: </h3>
                        <div class="social-links mt-3 d-none">
                            <a href="https://www.facebook.com/DhanmondiSociety1205" class="facebook" target="blank"><i
                                    style="font-size: 38px;" class="bx bxl-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCae-R_KQ3DzqyjuVLh6B6cA" target="blank"
                                class="youtube bg-white"><i class="bx bxl-youtube text-danger"></i></a>
                        </div>

                        <div class="row">

                            <div style="width: 40%">
                                <a href="https://www.facebook.com/DhanmondiSociety1205" target="blank"><img
                                        style="width: 85%;" src="{{ asset('web/') }}/img/facebook.jpeg" alt=""></a>
                            </div>
                            <div style="width: 40%">
                                <a href="https://www.youtube.com/channel/UCae-R_KQ3DzqyjuVLh6B6cA" target="blank"><img
                                        style="width: 85%;" src="{{ asset('web/') }}/img/youtube.jpeg" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Dhanmondi Society</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Developed by <a href="www.twistermedia.com">Twister Media Technology</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!--<div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @yield('scripts')

</body>

</html>


<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }

</script>
