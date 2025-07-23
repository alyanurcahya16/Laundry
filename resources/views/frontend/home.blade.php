<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Royal Laundry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN -->
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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- end CDN -->
</head>

<body>
    <!-- Start cleeny hero Area -->
    <div class="hero-area d-flex align-items-center">
        <div class="container">
            <div class="row hero align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/royal-logo1.png') }}" style="height: 200px;"
                        alt="logo">
                    <div class="hero-contant">
                        <h1>Royal Laundress</h1>
                        <p>Royal Laundress adalah UMKM yang bergerak di bidang jasa laundry, dry cleaning, dan pencucian
                            spring bed dengan moto: <strong>"Menyelesaikan Masalah Tanpa Lelah"</strong>.</p>
                        <div class="cleeny-btn">
                            <a href="pesanan">Pesan Sekarang <i class="bi bi-arrow-right"></i></a>
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
    </div>
    <!-- end cleeny hero Area -->


    <!-- Start cleeny feature Area (Customized for Laundry) -->

    <div class="feature-section py-5">
        <div class="container py-5">
            <div class="row text-center mb-4">
                <div class="col-lg-12 ">
                    <h2 class="section-main-title fw-bold fs-3">Mengapa Royal Laundress?</h2>
                    <p class="text-muted fs-6 mx-auto" style="max-width: 700px;">
                        Royal Laundress adalah solusi laundry terpercaya yang mengutamakan kualitas, kebersihan, dan
                        kenyamanan. Kami hadir dengan pelayanan profesional dan ramah lingkungan.
                    </p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">

                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-mesin.png') }}" alt="icon-efisiensi"
                                width="50" class="mx-auto d-block">
                        </div>

                        <h3 class="feature-title fs-5 fw-semibold">Efisiensi Waktu, Air & Listrik</h3>
                        <p class="feature-text text-muted mt-2">Hemat waktu, air, dan listrik dengan proses cepat dan
                            tepat.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-service4.png') }}" alt="icon-kualitas"
                                width="50" class="mx-auto d-block">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Kualitas Terjamin</h3>
                        <p class="feature-text text-muted mt-2">Cuci bersih maksimal dengan standar tinggi dan
                            profesional.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-service3.png') }}" alt="icon-aman"
                                width="50" class="mx-auto d-block">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Aman untuk Keluarga</h3>
                        <p class="feature-text text-muted mt-2">Pakaian tidak dicampur, 1 mesin untuk 1 pelanggan.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-single-box text-center p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="feature-icon mb-3">
                            <img src="{{ asset('frontend/assets/images/icon-service2.png') }}" alt="icon-harga"
                                width="50" class="mx-auto d-block">
                        </div>
                        <h3 class="feature-title fs-5 fw-semibold">Harga Terjangkau</h3>
                        <p class="feature-text text-muted mt-2">Pelayanan premium dengan harga yang ramah di kantong.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- End cleeny feature Area -->
<!-- Start patnership Area -->
    <section class="patnership-area py-20 bg-blue-900">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 text-white">Kerja Sama dengan Hotel</h2>
                <p class="text-white text-lg">
                    Royal Laundress siap menjadi mitra terpercaya bagi hotel Anda. Kami menawarkan layanan laundry
                    profesional,
                    cepat, dan higienis untuk memenuhi kebutuhan linen, seragam, hingga kebutuhan laundry tamu hotel.
                </p>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-300 to-purple-400 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="{{ asset('frontend/assets/images/royal-laundry8.png') }}" alt="Kerja Sama Hotel"
                        class="rounded-xl shadow-lg">
                </div>
                <div>
                    <h3 class="text-2xl font-semibold text-white mb-4">Mengapa Hotel Memilih Royal Laundress?</h3>
                    <ul class="list-disc list-inside text-white space-y-2">
                        <li>Pelayanan cepat dan tepat waktu</li>
                        <li>Standar kebersihan dan higienitas tinggi</li>
                        <li>Harga kerja sama yang kompetitif</li>
                        <li>Layanan antar jemput linen hotel</li>
                        <li>Dukungan CS responsif dan profesional</li>
                    </ul>
                    <div class="mt-6">
                        <a href="/form-registrasi-hotel"
                            class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full shadow hover:bg-blue-700 transition">
                            Ajukan Kerja Sama Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End patnership Area -->


    <!-- Start cleeny about Area -->

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
                            <a href="https://www.instagram.com/reel/DEEnewPzV7O/" target="_blank"
                                rel="noopener noreferrer" class="video-vemo-icon">
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
                        <p class="section-title-descr">"Pelayanan terbaik datang dari pekerja terbaik, pekerja terbaik
                            datang dari budaya perusahaan yang baik"</p>
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

    <!-- end cleeny about Area -->

    <!-- start cleeny service Area -->

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="section-sub-title">our services</h5>
                        <h1 class="section-main-title">Professional Laundry Services</h1>
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

    <!-- end cleeny service Area -->

    <!-- Daftar Harga -->
    <div class="price-section">
        <h3><i class="fas fa-tags"></i> Daftar Harga & Layanan</h3>
        <div class="row g-4">
            <!-- LINEN -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#linenCollapse">
                            🛏️ Linen
                        </button>
                    </h2>
                    <div id="linenCollapse" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <ul>
                                <li>Bed Sheet Double <span class="fw-bold">Rp 2.500</span></li>
                                <li>Bed Sheet Single <span class="fw-bold">Rp 2.400</span></li>
                                <li>Duvet Cover Double <span class="fw-bold">Rp 5.000</span></li>
                                <li>Duvet Cover Single <span class="fw-bold">Rp 4.700</span></li>
                                <li>Pillow Case <span class="fw-bold">Rp 1.200</span></li>
                                <li>Bath Towel <span class="fw-bold">Rp 2.500</span></li>
                                <li>Hand Towel <span class="fw-bold">Rp 1.500</span></li>
                                <li>Face Towel <span class="fw-bold">Rp 1.200</span></li>
                                <li>Pool Towel <span class="fw-bold">Rp 3.000</span></li>
                                <li>Blanket Double <span class="fw-bold">Rp 7.000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UNIFORM -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#uniformCollapse">
                            👔 Uniform
                        </button>
                    </h2>
                    <div id="uniformCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Shrt <span class="fw-bold">Rp 7.000</span></li>
                                <li>Trouser <span class="fw-bold">Rp 7.000</span></li>
                                <li>Jas / Jacket <span class="fw-bold">Rp 9.000</span></li>
                                <li>Skirt (Short) <span class="fw-bold">Rp 5.100</span></li>
                                <li>Skirt (Long) <span class="fw-bold">Rp 5.600</span></li>
                                <li>Cook Jacket <span class="fw-bold">Rp 7.300</span></li>
                                <li>Apron Kitchen <span class="fw-bold">Rp 3.000</span></li>
                                <li>T-shirt <span class="fw-bold">Rp 7.000</span></li>
                                <li>Neck Tie <span class="fw-bold">Rp 4.500</span></li>
                                <li>Safari Shirt <span class="fw-bold">Rp 13.000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SATUAN -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#satuanCollapse">
                            👗 Satuan
                        </button>
                    </h2>
                    <div id="satuanCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Atasan (Kemeja/Blouse/Batik) <span class="fw-bold">Rp 25.000</span></li>
                                <li>Bawahan (Rok/Jeans/Celana) <span class="fw-bold">Rp 18.000</span></li>
                                <li>Luaran (Jaket/Hoodie) <span class="fw-bold">Rp 30.000</span></li>
                                <li>Jas (Blazer/Mantel) <span class="fw-bold">Rp 50.000</span></li>
                                <li>Jas Setelan <span class="fw-bold">Rp 70.000</span></li>
                                <li>Dress <span class="fw-bold">Rp 25.000</span></li>
                                <li>Gaun Panjang <span class="fw-bold">Rp 50.000</span></li>
                                <li>Kebaya <span class="fw-bold">Rp 30.000</span></li>
                                <li>Alat Ibadah <span class="fw-bold">Rp 25.000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BEDDINGS -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#beddingsCollapse">
                            🛏️ Beddings
                        </button>
                    </h2>
                    <div id="beddingsCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Pillow (Bantal/Guling) <span class="fw-bold">Rp 20.000</span></li>
                                <li>Pillowcase (Sarung Bantal/Guling) <span class="fw-bold">Rp 25.000</span></li>
                                <li>Sprei Single <span class="fw-bold">Rp 15.000</span></li>
                                <li>Sprei Double <span class="fw-bold">Rp 25.000</span></li>
                                <li>Selimut Single <span class="fw-bold">Rp 15.000</span></li>
                                <li>Selimut Double <span class="fw-bold">Rp 25.000</span></li>
                                <li>Bed Cover Single <span class="fw-bold">Rp 23.000</span></li>
                                <li>Bed Cover Double <span class="fw-bold">Rp 32.000</span></li>
                                <li>Paket Bedding Single <span class="fw-bold">Rp 35.000</span></li>
                                <li>Paket Bedding Double <span class="fw-bold">Rp 50.000</span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- OTHER ITEMS -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#otherCollapse">
                            🧸 Other Items
                        </button>
                    </h2>
                    <div id="otherCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Handuk <span class="fw-bold">Rp 15.000</span></li>
                                <li>Dompet (Non-Leather) Kecil <span class="fw-bold">Rp 25.000</span></li>
                                <li>Dompet (Non-Leather) Besar <span class="fw-bold">Rp 40.000</span></li>
                                <li>Dompet Leather Kecil <span class="fw-bold">Rp 30.000</span></li>
                                <li>Dompet Leather Besar <span class="fw-bold">Rp 45.000</span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- DAILY KILOAN -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#kiloanCollapse">
                            ⚖️ Daily Kiloan
                        </button>
                    </h2>
                    <div id="kiloanCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Cuci Kering Lipat <span class="fw-bold">Rp 7.000</span></li>
                                <li>Cuci Kering Gosok (3 Hari) <span class="fw-bold">Rp 9.000</span></li>
                                <li>Cuci Kering Gosok (1 Hari) <span class="fw-bold">Rp 12.000</span></li>
                                <li>Cuci Kering Gosok (12 Jam) <span class="fw-bold">Rp 18.000</span></li>
                                <li>Cuci Kering Gosok (6 Jam) <span class="fw-bold">Rp 22.000</span></li>
                                <li>Setrika Kiloan Reguler (2 Hari) <span class="fw-bold">Rp 7.000</span></li>
                                <li>Setrika Kiloan Express (1 Hari) <span class="fw-bold">Rp 9.000</span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- TAS & SEPATU -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#tasCollapse">
                            👜 Tas & Sepatu
                        </button>
                    </h2>
                    <div id="tasCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Sepatu (Nylon, Canvas, Rubber) <span class="fw-bold">Rp 45.000</span></li>
                                <li>Sepatu Putih <span class="fw-bold">Rp 55.000</span></li>
                                <li>Sepatu Wanita <span class="fw-bold">Rp 45.000</span></li>
                                <li>Sepatu Suede & Leather <span class="fw-bold">Rp 100.000</span></li>
                                <li>Sandal <span class="fw-bold">Rp 25.000</span></li>
                                <li>Unyellowing <span class="fw-bold">Rp 120.000</span></li>
                                <li>Tas (Non Leather) Kecil <span class="fw-bold">Rp 30.000</span></li>
                                <li>Tas (Non Leather) Sedang <span class="fw-bold">Rp 40.000</span></li>
                                <li>Tas (Non Leather) Besar <span class="fw-bold">Rp 50.000</span></li>
                                <li>Tas Leather Kecil <span class="fw-bold">Rp 75.000</span></li>
                                <li>Tas Leather Sedang <span class="fw-bold">Rp 100.000</span></li>
                                <li>Tas Leather Besar <span class="fw-bold">Rp 150.000</span></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- MEMBERSHIP -->
            <div class="col-md-6 col-lg-4">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#membershipCollapse">
                            ⭐ Membership
                        </button>
                    </h2>
                    <div id="membershipCollapse" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul>
                                <li>Marquis <span class="fw-bold">Rp 150.000</span></li>
                                <li>Prince <span class="fw-bold">Rp 250.000</span></li>
                                <li>Duke <span class="fw-bold">Rp 375.000</span></li>
                                <li>King <span class="fw-bold">Rp 500.000</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end Daftar Harga -->

    <!-- start cleeny work Area - Proses Laundry -->
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
                            <h3 class="work-title">Pengambilan</h3>
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
                            <h3 class="work-title">Pencatatan</h3>
                            <p class="work-description">Jenis dan jumlah pakaian dicatat dengan detail.</p>
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
                            <h3 class="work-title">Pemeriksaan</h3>
                            <p class="work-description">Cek bahan dan kondisi pakaian untuk perlakuan khusus.</p>
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
                            <h3 class="work-title">Penanganan Noda</h3>
                            <p class="work-description">Noda membandel dibersihkan sebelum proses pencucian.</p>
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
                            <h3 class="work-title">Pencucian</h3>
                            <p class="work-description">Pakaian dicuci sesuai jenis bahan dan standar kebersihan.</p>
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
                            <h3 class="work-title">Pengeringan</h3>
                            <p class="work-description">Pakaian dikeringkan dengan metode yang aman.</p>
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
                            <h3 class="work-title">Penyetrikaan</h3>
                            <p class="work-description">Penyetrikaan untuk hasil rapi dan licin.</p>
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
                            <h3 class="work-title">Finishing Manual</h3>
                            <p class="work-description">Sentuhan akhir secara manual untuk hasil sempurna.</p>
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
                            <h3 class="work-title">Pemeriksaan Akhir</h3>
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
                            <h3 class="work-title">Pengemasan</h3>
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
                            <h3 class="work-title">Pengantaran</h3>
                            <p class="work-description">Pesanan diantar kembali ke alamat pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional shapes tetap -->
            <div class="work-shape">
                <img src="{{ asset('frontend/assets/images/work-shape.png') }}" alt="work-shape">
            </div>
            <div class="work-shape2">
                <img src="{{ asset('frontend/assets/images/work-shape2.png') }}" alt="work-shape2">
            </div>
            <div class="work-shape4 bounce-animate5">
                <img src="{{ asset('frontend/assets/images/work-shape3.png') }}" alt="work-shape3"
                    style="width: 340px; height: auto;">
            </div>
        </div>
    </div>
    <!-- end cleeny work Area -->


    <!-- Start cleeny portfolio Area -->
    <div class="portfolio-area">
        <div class="container-fuild">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title text-left">
                        <h5 class="section-sub-title">royal portfolio</h5>
                        <h1 class="section-main-title">Latest royal Portfolio</h1>
                        <h1 class="section-main-title">from Work Galary</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="portfolio_list owl-carousel">
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/royal-laundry7.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i>Jl. Raya Tajur No
                                            58 Kota Bogor</p>
                                        <h3 class="portfolio-title"><a href="project-details.html">Royal
                                                Laundress</a></h3>
                                    </div>

                                </div>
                                <h4 class="portfolio-top-title">royal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/royal-laundry5.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i>Jl. Raya Tajur No
                                            58 Kota Bogor</p>
                                        <h3 class="portfolio-title"><a href="project-details.html">Royal
                                                Laundress</a></h3>
                                    </div>

                                </div>
                                <h4 class="portfolio-top-title">royal</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-single-box">
                            <div class="portfolio-thumb">
                                <img src="{{ asset('frontend/assets/images/royal-laundry6.png') }}"
                                    alt="portfolio-img">
                                <div class="portfolio-content">
                                    <div class="portfolio-content2">
                                        <p class="portfolio-text"><i class="bi bi-geo-alt-fill"></i> Jl. Raya Tajur No
                                            58 Kota Bogor
                                        </p>
                                        <h3 class="portfolio-title"><a href="project-details.html">Royal Laundress</a>
                                        </h3>
                                    </div>

                                </div>
                                <h4 class="portfolio-top-title">royal</h4>
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
    <!-- end cleeny portfolio Area -->

    <!-- Start Testimonial Area -->
    <div class="testimonial-area py-20">
        <div class="container">
            <div class="text-center mb-10">
                <h5 class="text-blue-500 text-sm uppercase tracking-wider">Testimoni</h5>
                <h1 class="text-3xl font-bold">Pendapat Pelanggan Kami</h1>
            </div>
            <div class="row testimonial_list owl-carousel">
                @php
                    $testimonials = [
                        [
                            'name' => 'Siti Nurhaliza',
                            'role' => 'Ibu Rumah Tangga',
                            'title' => 'Layanan Berkualitas',
                            'desc' =>
                                'Saya sangat puas dengan hasil laundry dari Royal Laundress. Pakaian bersih, wangi, dan disetrika rapi. Pelayanan ramah dan cepat!',
                        ],
                        [
                            'name' => 'Andi Saputra',
                            'role' => 'Karyawan Swasta',
                            'title' => 'Harga Terjangkau',
                            'desc' =>
                                'Harga laundry-nya sangat terjangkau dan hasilnya memuaskan. Cocok banget untuk anak kos seperti saya.',
                        ],
                        [
                            'name' => 'Budi Santoso',
                            'role' => 'Pemilik Toko',
                            'title' => 'Pelayanan Cepat',
                            'desc' =>
                                'Saya suka karena proses laundry-nya cepat dan hasilnya tetap bersih. Cocok untuk kebutuhan harian saya.',
                        ],
                        [
                            'name' => 'Desi Anggraini',
                            'role' => 'Mahasiswi',
                            'title' => 'Rekomendasi Teman',
                            'desc' =>
                                'Awalnya coba karena direkomendasikan teman. Sekarang malah jadi langganan. Pakaian jadi bersih dan wangi!',
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $testi)
                    <div class="col-lg-12">
                        <div
                            class="testi-single-box p-6 bg-white rounded-xl shadow-md h-full flex flex-col justify-between min-h-[300px]">
                            <div class="testi-degicnation mb-4">
                                <ul class="testi-rating flex space-x-1 text-yellow-400 mb-2">
                                    @for ($i = 0; $i < 5; $i++)
                                        <li><i class="bi bi-star-fill"></i></li>
                                    @endfor
                                </ul>
                                <h4 class="text-lg font-semibold">{{ $testi['name'] }}</h4>
                                <p class="text-sm text-gray-500">{{ $testi['role'] }}</p>
                            </div>
                            <div class="testi-content">
                                <h3 class="text-blue-600 text-md font-bold">{{ $testi['title'] }}</h3>
                                <p class="text-gray-700 text-sm mt-2">“{{ $testi['desc'] }}”</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->


    <!-- start cleeny-brand Area -->
    <div class="brand-area ">
        <div class="container py-40">
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
    <div class="floating-icons">
        <div class="floating-icon" onclick="window.open('https://wa.me/+6281292204477', '_blank')">
            <i class="fab fa-whatsapp"></i>
        </div>
    </div>

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
    {{-- <script>
        var typed = new Typed('.type', {
            strings: ['Help Line', 'Call Us', ],
            typeSpeed: 90,
            backSpeed: 90,
            loop: true
        });
        fetch('price-list.html')
            .then(response => response.text())
            .then(data => {
                const container = document.createElement('div');
                container.innerHTML = data;
                document.querySelector('.main-container').appendChild(container);
            })
            .catch(error => console.error('Gagal memuat daftar harga:', error));
    </script> --}}
    <!-- end type-js -->
</body>

<!-- Mirrored from html.ditsolution.net/cleeny/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jul 2025 06:17:52 GMT -->

</html>
