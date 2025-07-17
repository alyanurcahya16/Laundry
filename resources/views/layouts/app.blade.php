<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Laundress</title>

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
    <link rel="stylesheet" href="{{ asset('frontend/venobox/venobox.js') }}" type="text/css" media="all">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <!--==================================================-->
    <!-- Start cleeny header-top-section -->
    <!--==================================================-->

    <div class="header-top-section">
        <div class="container">
            <div class="row align-items-center d-flex">
                <div class="col-lg-6">
                    <div class="header-address-info">
                        <p> <i class="bi bi-geo-alt"></i> Jl. Raya Tajur No 58 Kota Bogor <span> <i
                                    class="bi bi-envelope-open"></i> example@gmail.com </span></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right text-right">
                        <div class="hendrio-social-icon">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/royallaundress/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                        <div class="phone-number">
                            <p> <i class="fas fa-phone-square-alt"></i> <span>Call :</span> +62 812 9220 4477 </p>
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
                    <div class="logo-container">
                        <a class="logo_img" href="index.html" title="cleeny">
                            <img src="{{ asset('frontend/assets/images/royal-logo1.png') }}" style="height: 60px; "
                                alt="logo">
                        </a>
                        <a class="main_sticky" href="index.html" title="cleeny">
                            <img src="{{ asset('frontend/assets/images/royal-logo2.png') }}" style="height: 60px; "
                                alt="astute">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="cleeny_menu">
                        <ul class="nav_scroll">
                            <li><a href="index.html">Home</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="index.html">Home Version 01</a></li>
                                    <li><a href="index-two.html">Home Version 02</a></li>
                                    <li><a href="index-three.html">Home Version 03</a></li>
                                    <li><a href="index-four.html">Home Landing 01</a></li>
                                    <li><a href="index-five.html">Home Landing 02</a></li>
                                    <li><a href="index-six.html">Home Landing 03 </a></li>
                                </ul> --}}
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
                                    {{-- <li><a href="priching.html">Pricing</a></li> --}}
                                    <li><a href="appoinment.html">Appoinment</a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="#">Blog <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> --}}
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

<div class="about-us-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-us-content text-center">
                    <h1 class="about-us-title">Tentang Kami</h1>
                    <p class="about-us-text">Kami adalah Royal Laundress, penyedia layanan laundry dan dry cleaning
                        yang mengutamakan kualitas dan kepuasan pelanggan. Dengan pengalaman bertahun-tahun, kami berkomitmen untuk memberikan layanan terbaik dengan teknologi modern dan tenaga kerja profesional.</p>
                </div>
            </div>
        </div>
    </div>
</div>

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


</body>

</html>
