 @extends('layouts.app')

@section('content')
 <!-- Start cleeny hero Area -->
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
                            <a href="pesanan">Get Started Now <i class="bi bi-arrow-right"></i></a>
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

    <!-- end cleeny hero Area -->

    <!-- Start cleeny feature Area (Customized for Laundry) -->

    <div class="feature-section py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-12">
                    <h2 class="section-main-title fw-bold" style="font-size: 30px;">Mengapa Royal Laundress?
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

    <!-- End cleeny feature Area -->

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
                         <div class="cleeny-btn">
                            <a href="details">View All Details<i class="bi bi-arrow-right"></i></a>
                         </div>
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

    <!-- Start cleeny testimonial Area -->
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
    <!-- end cleeny testimonial Area -->
    @endsection
