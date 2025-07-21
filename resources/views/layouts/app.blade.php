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
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css"media="all">
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
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}" type="text/css" media="all">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="https://unpkg.com/venobox@2.0.7/dist/venobox.min.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" type="text/css" media="all">
    <!-- modernizr js -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <!-- loder -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>

    <!-- Start cleeny header-top-section -->
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
    <!-- end cleeny header-top-section -->

    <!-- Start cleeny Main Menu Area -->
    <div id="sticky-header" class="cleeny_nav_manu">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3">
                    <div class="logo-container">
                        <a class="logo_img" href="/" title="royal">
                            <img src="{{ asset('frontend/assets/images/royal-logo2.png') }}" style="height: 90px; "
                                alt="logo">
                        </a>
                        <a class="main_sticky" href="/" title="royal">
                            <img src="{{ asset('frontend/assets/images/royal-logo4.png') }}" style="height: 90px; "
                                alt="astute">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="cleeny_menu">
                        <ul class="nav_scroll">
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="aboutus">About Us</a></li>
                            <li><a href="#">Service <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="pesanan">Service</a></li>
                                    <li><a href="details">Service Details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages <i class="bi bi-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="aboutus">About Us</a></li>
                                    <li><a href="testimoni">Testimonials</a></li>
                                    <li><a href="details">Details</a></li>
                                </ul>
                            </li>
                            <li><a href="kontak">Contact</a></li>
                        </ul>
                        <div class="header-search-btn">
                            <a class="search-box-btn search-box-outer" href="#"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End cleeny Main Menu Area -->

    <!-- Start Curser Section Here -->
    <div class="curser"></div>
    <div class="curser2"></div>
    <!-- Ends Curser Section Here -->

<div class="w-full m-0 p-0">
        @yield('content')
</div>

<!-- start cleeny-brand Area -->
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
    <!-- end cleeny-brand Area -->

    <!-- Start cleeny subscribe Area -->
    {{--

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
                            <span class="subscribe-number"> +62 812 9220 4477</span>
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
 --}}


    <!-- end cleeny subscribe Area -->

    <!-- Start cleeny Footer Area -->

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/royal-logo4.png') }}"
                                    alt="footer-logo"></a>
                        </div>
                        <p class="footer-widget-text">Memberikan layanan laundry yang bersih dan efisien secara
                            profesional untuk mendukung gaya hidup modern Anda.</p>
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
                            <li><a href="/"> <i class="bi bi-chevron-right"></i> Home</a></li>
                            <li><a href="aboutus"> <i class="bi bi-chevron-right"></i> About Us</a></li>
                            <li><a href="pesanan"> <i class="bi bi-chevron-right"></i>Services</a></li>
                            <li><a href="team.html"> <i class="bi bi-chevron-right"></i> Meet Our Team</a></li>
                        </ul>
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
                                <p class="footer-title"> Jl. Raya Tajur No 58 Kota Bogor </p>
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

    <!-- end cleeny Footer Area -->

    <!-- Start cleeny copyright Area -->


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


    <!-- end cleeny copyright Area -->


    <!-- Start scrollup section Area -->
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
    <!-- Start scrollup section Area -->

    <!-- Start Search Popup Area -->
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
    <!-- Start Search Popup Area -->



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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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
