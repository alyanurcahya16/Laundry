<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Royal Laundry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="{{ asset('image/png') }}" sizes="56x56"
        href="{{ asset('frontend/public/frontend/assets/images/fav-icon/icon.png') }}">

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css" media="all">

    <!-- carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all">

    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" type="text/css" media="all">

    <!-- animated-text CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animated-text.css') }}" type="text/css" media="all">

    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}" type="text/css" media="all">

    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}" type="text/css" media="all">

    <!-- theme-default CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme-default.css') }}" type="text/css" media="all">

    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}" type="text/css" media="all">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css" media="all">

    <!-- transitions CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" type="text/css"
        media="all">

    <!-- venobox CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.js') }}" type="text/css"
        media="all">

    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" type="text/css" media="all">

    <!-- modernizr js -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <!-- loder -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <!--==================================================-->
    <!-- Start cleeny header-top-section -->
    <!--==================================================-->

    <div class="header-top-section">
        <div class="container">
            <div class="row align-items-center d-flex">
                <div class="col-lg-6">
                    <div class="header-address-info">
                        <p> <i class="bi bi-geo-alt"></i> 102/B New Market, Sandigo-USA <span> <i
                                    class="bi bi-envelope-open"></i> example@gmail.com </span></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right text-right">
                        <div class="hendrio-social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                        <div class="phone-number">
                            <p> <i class="fas fa-phone-square-alt"></i> <span>Call :</span> +980 234 4567 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- end cleeny header-top-section -->
    <!--==================================================-->




    <!--==================================================-->
    <!-- Start cleeny Main Menu Area -->
    <!--==================================================-->
    <div id="sticky-header" class="cleeny_nav_manu">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a class="logo_img" href="index.html" title="cleeny">
                            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo">
                        </a>
                        <a class="main_sticky" href="index.html" title="cleeny">
                            <img src="{{ asset('frontend/assets/images/logo2.png') }}" alt="astute">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="cleeny_menu">
                        <ul class="nav_scroll">
                            <li><a href="index.html">Home <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home Version 01</a></li>
                                    <li><a href="index-two.html">Home Version 02</a></li>
                                    <li><a href="index-three.html">Home Version 03</a></li>
                                    <li><a href="index-four.html">Home Landing 01</a></li>
                                    <li><a href="index-five.html">Home Landing 02</a></li>
                                    <li><a href="index-six.html">Home Landing 03 </a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="service.html">Service</a></li>
                                    <li><a href="service-details.html">Service Details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="testimonial.html">Testimonials</a></li>
                                    <li><a href="project.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="priching.html">Pricing</a></li>
                                    <li><a href="appoinment.html">Appoinment</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <div class="header-search-btn">
                            <a class="search-box-btn search-box-outer" href="#"><i
                                    class="fas fa-search"></i></a>
                        </div>
                        <div class="cleeny-btn">
                            <a href="contact.html">Get Free Quote</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- cleeny Mobile Menu Area -->
    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="cleeny_menu">
                <ul class="nav_scroll">
                    <li><a href="index.html">Home <i class="bi bi-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Version 01</a></li>
                            <li><a href="index-two.html">Home Version 02</a></li>
                            <li><a href="index-three.html">Home Version 03</a></li>
                            <li><a href="index-four.html">Home Landing 01</a></li>
                            <li><a href="index-five.html">Home Landing 02</a></li>
                            <li><a href="index-six.html">Home Landing 03 </a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Service</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages <i class="bi bi-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                            <li><a href="priching.html">Pricing</a></li>
                            <li><a href="appoinment.html">Appoinment</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog <i class="bi bi-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!--==================================================-->
    <!-- End cleeny Main Menu Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start Curser Section Here -->
    <!--==================================================-->
    <div class="curser"></div>
    <div class="curser2"></div>
    <!--==================================================-->
    <!-- Ends Curser Section Here -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start cleeny hero Area -->
    <!--==================================================-->


    <div class="hero-area d-flex align-items-center">
        <div class="container">
            <div class="row hero align-items-center">
                <div class="col-lg-6">
                    <div class="hero-contant">
                        {{-- <h5>Best cleeny Agency</h5> --}}
                        <h1>Need cleeny?</h1>
                        <h1>call <span>us today</span></h1>
                        <p>Need Clean of your home or office? Just Feel Free to Contact us.
                            We try to Help you as soon as possible.</p>
                        <div class="cleeny-btn">
                            <a href="appoinment.html">Get Started Now <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb" data-tilt>
                        <img src="{{ asset('frontend/assets/images/hero-thumb.png') }}" alt="hero-thumb">
                    </div>
                </div>
            </div>
            <div id="particles-js"></div>
        </div>
        <div class="hero-shape">
            <img src="{{ asset('frontend/assets/images/hero-shape.png') }}" alt="hero-shape">
        </div>
        <div class="hero-shape2">
            <img src="{{ asset('frontend/assets/images/hero-shape2.png') }}" alt="hero-shape2">
        </div>
        <div class="hero-shape3">
            <img src="{{ asset('frontend/assets/images/hero-shape3.png') }}" alt="hero-shape3">
        </div>
        <div class="hero-contact">
            <div class="hero-text">
                <h1 style="color:#e2bc13 !important;"><span class="type"></span></h1>
            </div>
            <h3 class="hero-title"><i class="fas fa-phone-alt"></i> 246900</h3>
        </div>
    </div>

    <!--==================================================-->
    <!-- end cleeny hero Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start cleeny feature Area -->
    <!--==================================================-->

    <div class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-single-box d-flex">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets/images/feature-icon.png') }}" alt="feature-icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">House Cleaning</h3>
                            <p class="feature-text">Competently repurpose clean conveniently target</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-single-box d-flex">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets/images/feature-icon2.png') }}" alt="feature-icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Windwo Cleaning</h3>
                            <p class="feature-text">Competently repurpose clean conveniently target</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-single-box d-flex">
                        <div class="feature-icon">
                            <img src="{{ asset('frontend/assets/images/feature-icon3.png') }}" alt="feature-icon">
                        </div>
                        <div class="feature-content">
                            <h3 class="feature-title">Office Cleaning</h3>
                            <p class="feature-text">Competently repurpose clean conveniently target</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--==================================================-->
    <!-- end cleeny feature Area -->
    <!--==================================================-->







    <!--==================================================-->
    <!-- Start cleeny about Area -->
    <!--==================================================-->

    <div class="about-area">
        <div class="container">
            <div class="row about align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('frontend/assets/images/about-thumb.png') }}" alt="about-thumb">
                        <div class="about-shape bounce-animate3">
                            <img src="{{ asset('frontend/assets/images/about-shape.png') }}" alt="about-shape">
                        </div>
                        <div class="video-icon">
                            <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                href="https://www.youtube.com/watch?v=Wx48y_fOfiY"><i class="bi bi-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">ABOUT US</h5>
                        <h1 class="section-main-title">Making Your House Clean</h1>
                        <h1 class="section-main-title">For Looks As a New</h1>
                        <p class="section-title-descr">Competently repurpose go forward benefits without goal-oriented
                            ROI
                            conveniently target e-business opportunities whereas parallel task
                            multimedia based web services</p>
                    </div>
                    <div class="about-box d-flex">
                        <ul class="about-list">
                            <li><i class="bi bi-check-circle-fill"></i>Cleeny Your Home or Office</li>
                            <li><i class="bi bi-check-circle-fill"></i>24/7 Emmergency Quality Services</li>
                            <li><i class="bi bi-check-circle-fill"></i>Online Booking System available</li>
                        </ul>
                        <div class="counter-single-box">
                            <div class="counter-icon">
                                <img src="{{ asset('frontend/assets/images/counter-icon.png') }}" alt="">
                            </div>
                            <div class="counter-number">
                                <h1 class="counter">12</h1>
                                <h1>+</h1>
                            </div>
                            <p class="counter-text">Years Experience</p>
                        </div>
                    </div>
                    <div class="cleeny-btn">
                        <a href="about-us.html">More About Us <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="about-shape2">
                <img src="{{ asset('frontend/assets/images/about-shape2.png') }}" alt="about-shape2">
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- end cleeny about Area -->
    <!--==================================================-->




    <!--==================================================-->
    <!-- start cleeny service Area -->
    <!--==================================================-->

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h1 class="section-main-title">Get A Free Appoinmnet</h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-from">
                        <form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
                            <div class="row contact_bg">
                                <div class="col-lg-3 col-md-6">
                                    <!--form_box-->
                                    <div class="form_box">
                                        <input type="text" name="Your name" placeholder="Your Name *">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <!--form_box-->
                                    <div class="form_box">
                                        <input type="text" name="Phone" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <!--form_box-->
                                    <div class="form_box">
                                        <div class="form_field_inner style-two">
                                            <select name="contact" id="contact">
                                                <option value="Subject">Select Service</option>
                                                <option value="Deplopment">Deplopment</option>
                                                <option value="Design">Design</option>
                                                <option value="Marketing">Marketing</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="contact-form-button">
                                        <button type="submit">Book Appoinment<i
                                                class="bi bi-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="section-sub-title">our services</h5>
                        <h1 class="section-main-title">Professional Cleaning Services</h1>
                    </div>
                </div>
                <div class="service_list owl-carousel">
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">House Kitchen Cleaning</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img2.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Office Floor Cleaning</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon2.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">House Kitchen Cleaning</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img3.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">House Wash & Clean</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon3.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">House Kitchen Cleaning</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img2.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Office Floor Cleaning</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon2.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="{{ asset('frontend/assets/images/service-img3.png') }}" alt="service-img">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">House Wash & Clean</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> House Floor cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Roof Clean & Wash</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="service-details.html">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                                <div class="service-icon">
                                    <img src="{{ asset('frontend/assets/images/service-icon3.png') }}"
                                        alt="service-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-shape">
                <img src="{{ asset('frontend/assets/images/service-shape-1.png') }}" alt="service-shape-1">
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- end cleeny service Area -->
    <!--==================================================-->





    <!--==================================================-->
    <!-- start cleeny work Area -->
    <!--==================================================-->

    <div class="work-area">
        <div class="container">
            <div class="row work">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="section-sub-title">working process</h5>
                        <h1 class="section-main-title">Easy Steps to Works</h1>
                        <p class="section-title-descr">Competently repurpose go forward benefits without goal-oriented
                            ROI
                            conveniently target e-business opportunities whereas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <img src="{{ asset('frontend/assets/images/work-icon.png') }}" alt="work-icon">
                            <div class="work-number">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Find Us Online</h3>
                            <p class="work-description">Repurpose go forward benefits more conveniently e-business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <img src="{{ asset('frontend/assets/images/work-icon2.png') }}" alt="work-icon">
                            <div class="work-number">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Choose Services</h3>
                            <p class="work-description">Repurpose go forward benefits more conveniently e-business</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <img src="{{ asset('frontend/assets/images/work-icon3.png') }}" alt="work-icon">
                            <div class="work-number">
                                <span>3</span>
                            </div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Book Appoinment</h3>
                            <p class="work-description">Repurpose go forward benefits more conveniently e-business</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-shape">
                <img src="{{ asset('frontend/assets/images/work-shape.png') }}" alt="work-shape">
            </div>
            <div class="work-shape2">
                <img src="{{ asset('frontend/assets/images/work-shape2.png') }}" alt="work-shape2">
            </div>
            <div class="work-shape3 bounce-animate4">
                <img src="{{ asset('frontend/assets/images/work-shape3.png') }}" alt="work-shape3">
            </div>
            <div class="work-shape4 bounce-animate5">
                <img src="{{ asset('frontend/assets/images/work-shape4.png') }}" alt="work-shape4">
            </div>
        </div>
    </div>



    <!--==================================================-->
    <!-- end cleeny work Area -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start cleeny portfolio Area -->
    <!--==================================================-->

    <div class="portfolio-area">
        <div class="container-fuild">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">cleeny portfolio</h5>
                        <h1 class="section-main-title">Latest cleeny Portfolio</h1>
                        <h1 class="section-main-title">from Work Galary</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cleeny-btn">
                        <a href="project.html">View All Works <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio_list owl-carousel">
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/portfolio-img.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i>Sandigo, USA</p>
                                        <h3 class="portfolio-title"><a href="project-details.html">House Floor
                                                cleeny</a></h3>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="project-details.html"><i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <h4 class="portfolio-top-title">cleeny</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/portfolio-img2.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i>Sandigo, USA</p>
                                        <h3 class="portfolio-title"><a href="project-details.html">House Floor
                                                cleeny</a></h3>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="project-details.html"><i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <h4 class="portfolio-top-title">cleeny</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/portfolio-img.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i>Sandigo, USA</p>
                                        <h3 class="portfolio-title"><a href="project-details.html">House Floor
                                                cleeny</a></h3>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="project-details.html"><i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <h4 class="portfolio-top-title">cleeny</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/portfolio-img3.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i>Sandigo, USA</p>
                                        <h3 class="portfolio-title"><a href="project-details.html">House Floor
                                                cleeny</a></h3>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a href="project-details.html"><i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                </div>
                                <h4 class="portfolio-top-title">cleeny</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-shape">
                <img src="frontend/assets/images/portfolio-shape-1.png" alt="portfolio-shape-1">
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-- end cleeny portfolio Area -->
    <!--==================================================-->











    <!--==================================================-->
    <!-- Start cleeny address Area -->
    <!--==================================================-->


    <div class="address-area">
        <div class="container">
            <div class="row address align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="address-conten">
                        <h1 class="address-title">Please Call Us to Take the</h1>
                        <h1 class="address-title">Extraordinary Service!</h1>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="address-thumb">
                        <img src="{{ asset('frontend/assets/images/address-thumb.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="cleeny-btn">
                        <a href="appoinment.html"><i class="bi bi-telephone-fill"></i> Call : 123 (4567) 890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-- end cleeny address Area -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start cleeny pricing Area -->
    <!--==================================================-->


    <div class="pricing-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="section-sub-title">Pricing Plan</h5>
                        <h1 class="section-main-title">Affordable Pricing Plan</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-single-box">
                        <div class="pricing-head">
                            <h1 class="pricing-dollar">$<span>39</span></h1>
                            <p class="pricing-monthly">Monthly</p>
                        </div>
                        <div class="pricing-body">
                            <h3 class="pricing-title">Starter Plans</h3>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="bi bi-check-lg"></i> 15% OFF All Service</li>
                                    <li><i class="bi bi-check-lg"></i> Floor Wash & cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Maintaince Equipment</li>
                                    <li><i class="bi bi-check-lg"></i> Schedule Working</li>
                                    <li><i class="bi bi-check-lg"></i> 24/7 Supports</li>
                                </ul>
                            </div>
                            <div class="cleeny-btn">
                                <a href="priching.html">Choose Plan <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-single-box active">
                        <div class="pricing-head">
                            <h1 class="pricing-dollar">$<span>49</span></h1>
                            <p class="pricing-monthly">Monthly</p>
                        </div>
                        <div class="pricing-body">
                            <h3 class="pricing-title">Standard Plans</h3>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="bi bi-check-lg"></i> 15% OFF All Service</li>
                                    <li><i class="bi bi-check-lg"></i> Floor Wash & cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Maintaince Equipment</li>
                                    <li><i class="bi bi-check-lg"></i> Schedule Working</li>
                                    <li><i class="bi bi-check-lg"></i> 24/7 Supports</li>
                                </ul>
                            </div>
                            <div class="cleeny-btn">
                                <a href="priching.html">Choose Plan <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-single-box">
                        <div class="pricing-head">
                            <h1 class="pricing-dollar">$<span>89</span></h1>
                            <p class="pricing-monthly">Monthly</p>
                        </div>
                        <div class="pricing-body">
                            <h3 class="pricing-title">Premium Plans</h3>
                            <div class="pricing-list">
                                <ul>
                                    <li><i class="bi bi-check-lg"></i> 15% OFF All Service</li>
                                    <li><i class="bi bi-check-lg"></i> Floor Wash & cleeny</li>
                                    <li><i class="bi bi-check-lg"></i> Maintaince Equipment</li>
                                    <li><i class="bi bi-check-lg"></i> Schedule Working</li>
                                    <li><i class="bi bi-check-lg"></i> 24/7 Supports</li>
                                </ul>
                            </div>
                            <div class="cleeny-btn">
                                <a href="priching.html">Choose Plan <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-- end cleeny pricing Area -->
    <!--==================================================-->



    <!--==================================================-->
    <!-- Start cleeny testimonial Area -->
    <!--==================================================-->


    <div class="testimonial-area">
        <div class="container">
            <div class="row testi">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="section-sub-title">Testimonials</h5>
                        <h1 class="section-main-title">Our Customer’s Feedback</h1>
                    </div>
                </div>
                <div class="testimonial_list owl-carousel">
                    <div class="col-lg-12 col-lg-12">
                        <div class="testi-single-box">
                            <div class="testi-author d-flex align-items-center">
                                <div class="testi-thumb">
                                    <img src="{{ asset('frontend/assets/images/testi-thumb.png') }}"
                                        alt="testi-thumb">
                                </div>
                                <div class="testi-degicnation">
                                    <ul class="testi-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <h4 class="testi-title">Anjelina Watson</h4>
                                    <p class="testi-text">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="testi-content">
                                <h3 class="testi-title2">Service Quality</h3>
                                <p class="testi-description">“Competently cultivate worldwide e-tailers through to
                                    principles
                                    professionally engineer high-payoff deliverables without excet
                                    Rapidiously network effective”</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-12">
                        <div class="testi-single-box">
                            <div class="testi-author d-flex align-items-center">
                                <div class="testi-thumb">
                                    <img src="{{ asset('frontend/assets/images/testi-thumb-2.png') }}"
                                        alt="testi-thumb">
                                </div>
                                <div class="testi-degicnation">
                                    <ul class="testi-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <h4 class="testi-title">John D. Alexon</h4>
                                    <p class="testi-text">Web Devloper</p>
                                </div>
                            </div>
                            <div class="testi-content">
                                <h3 class="testi-title2">Service Quality</h3>
                                <p class="testi-description">“Competently cultivate worldwide e-tailers through to
                                    principles
                                    professionally engineer high-payoff deliverables without excet
                                    Rapidiously network effective”</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-12">
                        <div class="testi-single-box">
                            <div class="testi-author d-flex align-items-center">
                                <div class="testi-thumb">
                                    <img src="{{ asset('frontend/assets/images/testi-thumb.png') }}"
                                        alt="testi-thumb">
                                </div>
                                <div class="testi-degicnation">
                                    <ul class="testi-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <h4 class="testi-title">Anjelina Watson</h4>
                                    <p class="testi-text">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="testi-content">
                                <h3 class="testi-title2">Service Quality</h3>
                                <p class="testi-description">“Competently cultivate worldwide e-tailers through to
                                    principles
                                    professionally engineer high-payoff deliverables without excet
                                    Rapidiously network effective”</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-12">
                        <div class="testi-single-box">
                            <div class="testi-author d-flex align-items-center">
                                <div class="testi-thumb">
                                    <img src="{{ asset('frontend/assets/images/testi-thumb-2.png') }}"
                                        alt="testi-thumb">
                                </div>
                                <div class="testi-degicnation">
                                    <ul class="testi-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <h4 class="testi-title">John D. Alexon</h4>
                                    <p class="testi-text">Web Devloper</p>
                                </div>
                            </div>
                            <div class="testi-content">
                                <h3 class="testi-title2">Service Quality</h3>
                                <p class="testi-description">“Competently cultivate worldwide e-tailers through to
                                    principles
                                    professionally engineer high-payoff deliverables without excet
                                    Rapidiously network effective”</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-12">
                        <div class="testi-single-box">
                            <div class="testi-author d-flex align-items-center">
                                <div class="testi-thumb">
                                    <img src="{{ asset('frontend/assets/images/testi-thumb.png') }}"
                                        alt="testi-thumb">
                                </div>
                                <div class="testi-degicnation">
                                    <ul class="testi-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <h4 class="testi-title">Anjelina Watson</h4>
                                    <p class="testi-text">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="testi-content">
                                <h3 class="testi-title2">Service Quality</h3>
                                <p class="testi-description">“Competently cultivate worldwide e-tailers through to
                                    principles
                                    professionally engineer high-payoff deliverables without excet
                                    Rapidiously network effective”</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-lg-12">
                        <div class="testi-single-box">
                            <div class="testi-author d-flex align-items-center">
                                <div class="testi-thumb">
                                    <img src="{{ asset('frontend/assets/images/testi-thumb-2.png') }}"
                                        alt="testi-thumb">
                                </div>
                                <div class="testi-degicnation">
                                    <ul class="testi-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                    <h4 class="testi-title">John D. Alexon</h4>
                                    <p class="testi-text">Web Devloper</p>
                                </div>
                            </div>
                            <div class="testi-content">
                                <h3 class="testi-title2">Service Quality</h3>
                                <p class="testi-description">“Competently cultivate worldwide e-tailers through to
                                    principles
                                    professionally engineer high-payoff deliverables without excet
                                    Rapidiously network effective”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--==================================================-->
    <!-- end cleeny testimonial Area -->
    <!--==================================================-->


    <!--==================================================-->
    <!-- Start cleeny blog Area -->
    <!--==================================================-->


    <div class="bolo-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">Latest Blog</h5>
                        <h1 class="section-main-title">Learn about our Latest </h1>
                        <h1 class="section-main-title">News from Blog</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cleeny-btn">
                        <a href="blog-grid.html">View All Blog <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-box">
                        <div class="blog-thumb">
                            <img src="{{ asset('frontend/assets/images/blog-thumb.png') }}" alt="blog-thumb">
                            <div class="blog-year">
                                <h1 class="blog-month">18</h1>
                                <p class="blog-text">NOW</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="blog-details.html">Newest Cleaning Equipment for House
                                    2024</a></h3>
                            <p class="blog-description">Competently repurpose forward benefits conveniently target
                                e-business</p>
                            <div class="blog-btn">
                                <a href="blog-details.html">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-box">
                        <div class="blog-thumb">
                            <img src="{{ asset('frontend/assets/images/blog-thumb4.png') }}" alt="blog-thumb">
                            <div class="blog-year">
                                <h1 class="blog-month">20</h1>
                                <p class="blog-text">NOW</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="blog-details.html">10 Most Popular Cleaning Tips for
                                    House</a></h3>
                            <p class="blog-description">Competently repurpose forward benefits conveniently target
                                e-business</p>
                            <div class="blog-btn">
                                <a href="blog-details.html">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-box">
                        <div class="blog-thumb">
                            <img src="{{ asset('frontend/assets/images/blog-thumb3.png') }}" alt="blog-thumb">
                            <div class="blog-year">
                                <h1 class="blog-month">24</h1>
                                <p class="blog-text">NOW</p>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title"><a href="blog-details.html">Floor Cleaning & WashingUse New
                                    Equipment</a></h3>
                            <p class="blog-description">Competently repurpose forward benefits conveniently target
                                e-business</p>
                            <div class="blog-btn">
                                <a href="blog-details.html">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-- end cleeny blog Area -->
    <!--==================================================-->





    <!--==================================================-->
    <!-- start cleeny-brand Area -->
    <!--==================================================-->


    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="brand_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('frontend/assets/images/brand-img.png') }}" alt="brand img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('frontend/assets/images/brand-img2.png') }}" alt="brand img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('frontend/assets/images/brand-img3.png') }}" alt="brand img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('frontend/assets/images/brand-img4.png') }}" alt="brand img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="brand-box">
                            <div class="brand-thumb">
                                <img src="{{ asset('frontend/assets/images/brand-img5.png') }}" alt="brand img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--==================================================-->
    <!-- end cleeny-brand Area -->
    <!--==================================================-->




    <!--==================================================-->
    <!-- Start cleeny subscribe Area -->
    <!--==================================================-->


    <div class="subscribe-area">
        <div class="container">
            <div class="row subscribe align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="subscribe-single-box d-flex align-items-center">
                        <div class="subscribe-icon">
                            <img src="{{ asset('frontend/assets/images/subscribe-icon.png') }}" alt="subscribe-icon">
                        </div>
                        <div class="subscribe-content">
                            <h4 class="subscribe-text">Call Us Now</h4>
                            <span class="subscribe-number">+980 765 (546) 900</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="subscribe-title">Subscribe Now</h3>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="subscribe-form">
                        <form>
                            <div class="form-field">
                                <input type="email" name="EMAIL" placeholder="Enter E-Mail*" required="">
                                <button class="subscribe-button" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--==================================================-->
    <!-- end cleeny subscribe Area -->
    <!--==================================================-->





    <!--==================================================-->
    <!-- Start cleeny Footer Area -->
    <!--==================================================-->

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/footer-logo.png') }}"
                                    alt="footer-logo"></a>
                        </div>
                        <p class="footer-widget-text">Competently repurpose forward conveniently target e-business
                            multipurpose clean</p>
                        <div class="footer-social">
                            <div class="footer-widget-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget left">
                        <div class="widget-title">
                            <h2>Company</h2>
                        </div>
                        <ul>
                            <li><a href="index.html"> <i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="about-us.html"> <i class="bi bi-chevron-right"></i> About Us</a></li>
                            <li><a href="service.html"> <i class="bi bi-chevron-right"></i> Our Services</a></li>
                            <li><a href="team.html"> <i class="bi bi-chevron-right"></i> Meet Our Team</a></li>
                            <li><a href="blog-grid.html"> <i class="bi bi-chevron-right"></i> Latest Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-resent-post">
                        <div class="widget-title">
                            <h2>Latest Blog</h2>
                        </div>
                        <div class="single-recent-post-box d-flex align-items-center">
                            <div class="post-thumb">
                                <img src="{{ asset('frontend/assets/images/footer-thumb.png') }}" alt="footer thumb">
                            </div>
                            <div class="post-content-text">
                                <h4><a href="blog-details.html">10 Most Popular Clean Tips for Housey</a></h4>
                                <span>Nov 16, 2024</span>
                            </div>
                        </div>
                        <div class="single-recent-post-box d-flex align-items-center">
                            <div class="post-thumb">
                                <img src="{{ asset('frontend/assets/images/footer-thumb2.png') }}"
                                    alt="footer thumb2">
                            </div>
                            <div class="post-content-text">
                                <h4><a href="blog-details.html">Floor cleeny and Washing New...</a></h4>
                                <span>Nov 18, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget right">
                        <div class="widget-title">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="footer-contact-box d-flex">
                            <div class="footer-contact-icon">
                                <a href="#"><i class="bi bi-geo-alt"></i></a>
                            </div>
                            <div class="footer-content">
                                <h3 class="footer-title">Address</h3>
                                <p class="footer-title">102/B Philosophy Market Road California, USA</p>
                            </div>
                        </div>
                        <div class="footer-contact-box d-flex">
                            <div class="footer-contact-icon">
                                <a href="#"><i class="bi bi-telephone"></i></a>
                            </div>
                            <div class="footer-content">
                                <h3 class="footer-title">Call Us</h3>
                                <p class="footer-title">+880 123 (4567) 890</p>
                            </div>
                        </div>
                        <div class="footer-contact-box d-flex">
                            <div class="footer-contact-icon">
                                <a href="#"><i class="bi bi-envelope"></i></a>
                            </div>
                            <div class="footer-content">
                                <h3 class="footer-title">Email</h3>
                                <p class="footer-title">example@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-shape">
                <img src="{{ asset('frontend/assets/images/footer-shape.png') }}" alt="footer-shape">
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- end cleeny Footer Area -->
    <!--==================================================-->






    <!--==================================================-->
    <!-- Start cleeny copyright Area -->
    <!--==================================================-->


    <div class="copyright-area">
        <div class="container">
            <div class="row copyright">
                <div class="col-lg-12 col-md-12">
                    <div class="footer-copyright-text">
                        <p>© Copyrights 2024 Cleeny All rights reserved by <span>Dream IT </span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--==================================================-->
    <!-- end cleeny copyright Area -->
    <!--==================================================-->















    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->
    <!-- scrollup section -->
    <div class="scroll-area">
        <div class="top-wrap">
            <div class="go-top-btn-wraper">
                <div class="go-top go-top-button">
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!-- Start scrollup section Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Search Popup Area -->
    <!--==================================================-->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i
                    class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="bi bi-arrow-up-short"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!--==================================================-->
    <!-- Start Search Popup Area -->
    <!--==================================================-->



    <!-- jquery js -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- carousel js -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <!-- imagesloaded js -->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- venobox js -->
    <script src="{{ asset('frontend/venobox/venobox.js') }}"></script>
    <!--  animated-text js -->
    <script src="{{ asset('frontend/assets/js/animated-text.js') }}"></script>
    <!-- venobox min js -->
    <script src="{{ asset('frontend/venobox/venobox.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- jquery meanmenu js -->
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
    <!-- jquery scrollup js -->
    <script src="{{ asset('frontend/assets/js/jquery.scrollUp.js') }}"></script>
    <!-- theme js -->
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/typed.js') }}"></script>
    <!-- jquery js -->
    <script src="https://unpkg.com/aos@3.0.0-beta.6/dist/aos.js"></script>
    <script src="{{ asset('frontend/assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- partial -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!--type-js-->
    <script>
        var typed = new Typed('.type', {
            strings: ['Help Line', 'Call Us', ],
            typeSpeed: 90,
            backSpeed: 90,
            loop: true
        });
    </script>
</body>

<!-- Mirrored from html.ditsolution.net/cleeny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 06:17:52 GMT -->

</html>
