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

    <!-- Venobox CSS -->
    <link rel="stylesheet" href="https://unpkg.com/venobox@2.0.7/dist/venobox.min.css">


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
                            <img src="{{ asset('frontend/assets/images/royal-logo2.png') }}" style="height: 90px; "
                                alt="logo">
                        </a>
                        <a class="main_sticky" href="index.html" title="cleeny">
                            <img src="{{ asset('frontend/assets/images/royal-logo4.png') }}" style="height: 90px; "
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



    <!--==================================================-->
    <!-- Start cleeny hero Area -->
    <!--==================================================-->


    <div class="hero-area d-flex align-items-center">
        <div class="container">
            <div class="row hero align-items-center">
                <div class="col-lg-6">
                    <div class="hero-contant">
                        {{-- <h5>Best cleeny Agency</h5> --}}
                        <h1>Royal Laundress</h1>
                        {{-- <h1>call <span>us today</span></h1> --}}
                        <p>Royal Laundress merupakan UMKM yang bergerak dibidang jasa
                            Loundry,Dry Cleaning dan cuci spring bed dengan Motto” MENYELASAIKAN
                            MASALAH TANPA LELAH”</p>
                        <div class="cleeny-btn">
                            <a href="appoinment.html">Get Started Now <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb" data-tilt>
                        <img src="{{ asset('frontend/assets/images/work-shape3.png') }}" alt="hero-thumb">
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
                <h1 style="color:#ffffff !important; margin-left:-10px;"><span class="type"></span></h1>
                <h3 class="hero-title"><i class="fas fa-phone-alt"></i> +62 812 9220 4477 </h3>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- end cleeny hero Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start cleeny feature Area (Customized for Laundry) -->
    <!--==================================================-->

    <div class="feature-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-12">
                    <h2 class="section-main-title fw-bold" style="font-size: 30px;">Mengapa Harus Royal Laundress?
                    </h2>
                    <p class="text-muted" style="font-size: 16px;">Royal Laundress adalah solusi laundry terpercaya
                        yang mengutamakan kualitas, kebersihan, dan kenyamanan. Kami hadir dengan pelayanan profesional
                        dan ramah lingkungan.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">

                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-mesin.png') }}" alt="icon-efisiensi"
                                width="50">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Efisiensi Waktu, Air & Listrik</h3>
                        <p class="feature-text text-muted mt-2">Hemat waktu, air, dan listrik dengan proses cepat dan
                            tepat.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-service4.png') }}" alt="icon-kualitas"
                                width="50">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Kualitas Terjamin</h3>
                        <p class="feature-text text-muted mt-2">Cuci bersih maksimal dengan standar tinggi dan
                            profesional.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-service3.png') }}" alt="icon-aman"
                                width="50">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Aman untuk Keluarga</h3>
                        <p class="feature-text text-muted mt-2">Pakaian tidak dicampur, 1 mesin untuk 1 pelanggan.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-3 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets//images/icon-service2.png') }}" alt="icon-harga"
                                width="50">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Harga Terjangkau</h3>
                        <p class="feature-text text-muted mt-2">Pelayanan premium dengan harga yang ramah di kantong.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--==================================================-->
    <!-- End cleeny feature Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start cleeny about Area -->
    <!--==================================================-->

    <div class="about-area">
        <div class="container">
            <div class="row about align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('frontend/assets/images/royal-laundry5.png') }}" alt="about-thumb">
                        <div class="about-shape bounce-animate3">
                            <img src="{{ asset('frontend/assets/images/about-shape.png') }}" alt="about-shape">
                        </div>
                        <div class="video-icon">
                            <a href="https://www.instagram.com/reel/DEEnewPzV7O/" target="_blank" rel="noopener noreferrer" class="video-vemo-icon">
    <i class="bi bi-play"></i>
</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">ABOUT US</h5>
                        <h1 class="section-main-title"> Bringing Back the Freshness</h1>
                        <h1 class="section-main-title">Royal Laundress Style.</h1>
                        <p class="section-title-descr">"Pelayanan terbaik datang dari pekerja terbaik, pekerja terbaik datang dari budaya perusahaan yang baik"</p>
                    </div>
                    <div class="about-box d-flex">
                        <ul class="about-list">
                            <li><i class="bi bi-check-circle-fill"></i>Layanan jemput antar cepat</li>
                            <li><i class="bi bi-check-circle-fill"></i>Mesin cuci teknologi terbaru</li>
                            <li><i class="bi bi-check-circle-fill"></i>Detergen & softener ramah lingkungan</li>

                        </ul>
                        <div class="counter-single-box">
                            <div class="counter-icon">
                                <img src="{{ asset('frontend/assets/images/counter-icon.png') }}" alt="">
                            </div>
                            <div class="counter-number">
                                <h1 class="counter">6</h1>
                                <h1>+</h1>
                            </div>
                            <p class="counter-text">Years Experience</p>
                        </div>
                    </div>
                    <div class="cleeny-btn">
                        <a href="{{ route('about.us') }}">More About Us <i class="bi bi-arrow-right"></i></a>

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
                                <img src="https://i.pinimg.com/1200x/ce/d3/2f/ced32f9c9c16f323dc47f564d764bd51.jpg"
                                    alt="daily-kiloan">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Daily Kiloan</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> Cuci Kering Lipat</li>
                                    <li><i class="bi bi-check-lg"></i> Cuci Kering Gosok 3 Hari</li>
                                    <li><i class="bi bi-check-lg"></i> Cuci Kering Gosok 1 Hari</li>
                                    <li><i class="bi bi-check-lg"></i> Cuci Kering Gosok 12 Jam</li>
                                    <li><i class="bi bi-check-lg"></i> Cuci Kering Gosok 6 Jam</li>
                                    <li><i class="bi bi-check-lg"></i> Setrika Kiloan Reguler 2 Hari</li>
                                    <li><i class="bi bi-check-lg"></i> Setrika Kiloan Express 1 Hari</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="{{ url('service-details/1') }}">View Details <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="https://i.pinimg.com/736x/dd/af/eb/ddafeb32c64013d5c53ff6002843ded9.jpg"
                                    alt="layanan-laundry" class="w-full h-auto rounded-md shadow-md">

                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Layanan Satuan</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> Atasan / Kemeja / Blouse</li>
                                    <li><i class="bi bi-check-lg"></i> Bawahan / Celana</li>
                                    <li><i class="bi bi-check-lg"></i> Luaran / Jaket</li>
                                    <li><i class="bi bi-check-lg"></i> Jas / Jas Setelan</li>
                                    <li><i class="bi bi-check-lg"></i> Dress / Gown</li>
                                    <li><i class="bi bi-check-lg"></i> Alat Ibadah</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="{{ url('service-details/2') }}">View Details <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="https://i.pinimg.com/736x/de/cd/1d/decd1d0db77ce2e8525186bcdfd5d1db.jpg"
                                    alt="beddings">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Beddings</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> Pillow / Guling</li>
                                    <li><i class="bi bi-check-lg"></i> Pillowcase / Sarung</li>
                                    <li><i class="bi bi-check-lg"></i> Sprei Single/Double</li>
                                    <li><i class="bi bi-check-lg"></i> Selimut / Bed Cover</li>
                                    <li><i class="bi bi-check-lg"></i> Paket Bedding</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="{{ url('service-details/3') }}">View Details <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="https://i.pinimg.com/1200x/69/c7/0c/69c70ca20151c621aeff505e56b71aa5.jpg"
                                    alt="other-items">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Other Items</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> Handuk</li>
                                    <li><i class="bi bi-check-lg"></i> Dompet Non Leather Kecil</li>
                                    <li><i class="bi bi-check-lg"></i> Dompet Non Leather Besar</li>
                                    <li><i class="bi bi-check-lg"></i> Dompet Leather Kecil</li>
                                    <li><i class="bi bi-check-lg"></i> Dompet Leather Besar</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="{{ url('service-details/4') }}">View Details <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="service-single-box">
                            <div class="service-thumb">
                                <img src="https://i.pinimg.com/1200x/f5/39/0b/f5390b634743638c0e4d567ff02cfa6c.jpg"
                                    alt="tas-sepatu">
                            </div>
                            <div class="service-content">
                                <h3 class="service-title">Tas & Sepatu</h3>
                                <ul class="service-list">
                                    <li><i class="bi bi-check-lg"></i> Sepatu Putih / Kanvas / Wanita</li>
                                    <li><i class="bi bi-check-lg"></i> Sepatu Suede / Leather</li>
                                    <li><i class="bi bi-check-lg"></i> Tas Non Leather Kecil / Sedang</li>
                                    <li><i class="bi bi-check-lg"></i> Tas Leather Kecil / Besar</li>
                                </ul>
                                <div class="service-btn">
                                    <a href="{{ url('service-details/5') }}">View Details <i
                                            class="bi bi-arrow-right"></i></a>
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
    <!-- start cleeny work Area - Proses Laundry -->
    <!--==================================================-->

    <div class="work-area">
        <div class="container">
            <div class="row work">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="section-sub-title">Proses Kerja</h5>
                        <h1 class="section-main-title">Langkah Royal Laundress</h1>
                        <p class="section-title-descr">Kami memastikan setiap tahap dikerjakan dengan standar tinggi
                            untuk menjaga kualitas dan kebersihan pakaian Anda.</p>
                    </div>
                </div>

                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-truck fs-1 text-primary"></i>
                            <div class="work-number"><span>1</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Item Collection</h3>
                            <p class="work-description">Kurir kami menjemput pakaian Anda langsung ke lokasi.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
                            <div class="work-number"><span>2</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Documentation</h3>
                            <p class="work-description">Pencatatan jenis dan jumlah pakaian secara detail.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-search fs-1 text-primary"></i>
                            <div class="work-number"><span>3</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Inspection</h3>
                            <p class="work-description">Cek kondisi dan bahan pakaian untuk perlakuan khusus.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-droplet fs-1 text-primary"></i>
                            <div class="work-number"><span>4</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Spotting</h3>
                            <p class="work-description">Noda membandel ditangani sebelum pencucian.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-wind fs-1 text-primary"></i>
                            <div class="work-number"><span>5</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Washing</h3>
                            <p class="work-description">Pencucian sesuai bahan dan standar kebersihan.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-sun fs-1 text-primary"></i>
                            <div class="work-number"><span>6</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Drying</h3>
                            <p class="work-description">Pengeringan yang aman agar pakaian tetap awet.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 7 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-steam fs-1 text-primary"></i>
                            <div class="work-number"><span>7</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Pressing</h3>
                            <p class="work-description">Proses setrika untuk hasil rapi dan licin.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 8 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-scissors fs-1 text-primary"></i>
                            <div class="work-number"><span>8</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Hand Finishing</h3>
                            <p class="work-description">Finishing manual untuk sentuhan akhir yang presisi.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 9 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-eye fs-1 text-primary"></i>
                            <div class="work-number"><span>9</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Detailing</h3>
                            <p class="work-description">Pemeriksaan menyeluruh sebelum dikemas.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 10 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-box-seam fs-1 text-primary"></i>
                            <div class="work-number"><span>10</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Packaging</h3>
                            <p class="work-description">Pakaian dikemas rapi dan higienis.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 11 -->
                <div class="col-lg-4 col-md-6">
                    <div class="work-single-box">
                        <div class="work-icon">
                            <i class="bi bi-truck-flatbed fs-1 text-primary"></i>
                            <div class="work-number"><span>11</span></div>
                        </div>
                        <div class="work-content">
                            <h3 class="work-title">Delivery</h3>
                            <p class="work-description">Pesanan siap diantar kembali ke rumah Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional background shapes (if needed) -->
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
                <img src="https://i.pinimg.com/736x/53/15/8d/53158d2bce2ecc06bacf136b66ce7c13.jpg" alt="work-shape4">
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


    {{-- <div class="address-area">
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
    </div> --}}


    <!--==================================================-->
    <!-- end cleeny address Area -->
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
                            <a href="index.html"><img src="{{ asset('frontend/assets/images/royal-logo4.png') }}"
                                    alt="footer-logo"></a>
                        </div>
                        <p class="footer-widget-text">Memberikan layanan laundry yang bersih dan efisien secara profesional untuk mendukung gaya hidup modern Anda.</p>
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
