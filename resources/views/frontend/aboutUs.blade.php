<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Royal Laundress</title>
    <link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
                --primary-color: #0A2A99;
                --secondary-color: #0A2A99; /* Disamakan dengan primary agar senada */
                --accent-color: #FFAA16;
                --text-dark: #1a1a1a; /* Hitam pekat */
                --text-light: #000000; /* Putih untuk kontras tinggi */
                --bg-light: #f0f4ff; /* Biru sangat muda sebagai latar lembut */
                --bg-section: #ffffff;
                --shadow-light: rgba(0, 0, 0, 0.08);
                --shadow-medium: rgba(0, 0, 0, 0.15);
                --border-radius: 20px;
                --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.7;
            color: var(--text-dark);
            overflow-x: hidden;
            background: var(--bg-light);
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 1.5rem;
        }

        /* Utilities */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .text-center { text-align: center; }
        .text-gradient {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-outline:hover {
            background: var(--primary-color);
            color: white;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
        }

        .hero-particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 2rem;
        }

        .hero-title {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 4vw, 1.8rem);
            margin-bottom: 2rem;
            opacity: 0.95;
            font-style: italic;
            font-weight: 300;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .hero-divider {
            width: 100px;
            height: 4px;
            background: white;
            margin: 0 auto 2rem;
            border-radius: 2px;
            animation: scaleIn 1s ease-out 0.6s both;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 0.9s both;
        }

        .wave-divider {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 1440 120' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0,64L48,69.3C96,75,192,85,288,80C384,75,480,53,576,48C672,43,768,53,864,69.3C960,85,1056,107,1152,112C1248,117,1344,107,1392,101.3L1440,96L1440,120L0,120Z' fill='%23f8fafc'/%3E%3C/svg%3E") no-repeat;
            background-size: cover;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Section Styles */
        .section {
            padding: 5rem 0;
            position: relative;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: clamp(2.5rem, 6vw, 3.5rem);
            color: var(--text-dark);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        .section-divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            margin: 0 auto;
            border-radius: 2px;
        }

        /* Story Section */
        .story-section {
            background: var(--bg-section);
        }

        .story-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .story-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: 0 10px 30px var(--shadow-light);
            transition: var(--transition);
            text-align: center;
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .story-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px var(--shadow-medium);
        }

        .story-image {
            width: 100%;
            max-width: 250px;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            border: 3px solid transparent;
            background: linear-gradient(white, white) padding-box,
                        linear-gradient(135deg, var(--primary-color), var(--secondary-color)) border-box;
        }

        .story-title {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .story-description {
            color: var(--text-light);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Quote Section */
        .quote-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .quote-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='7' cy='7' r='7'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        .quote-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .quote-text {
            font-size: clamp(1.5rem, 4vw, 2.2rem);
            font-style: italic;
            font-weight: 300;
            line-height: 1.6;
            position: relative;
            margin-bottom: 2rem;
        }

        .quote-text::before,
        .quote-text::after {
            content: '"';
            font-size: 4rem;
            position: absolute;
            color: rgba(255, 255, 255, 0.3);
            font-family: serif;
        }

        .quote-text::before {
            top: -1rem;
            left: -2rem;
        }

        .quote-text::after {
            bottom: -2rem;
            right: -2rem;
        }

        .quote-author {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Background Section */
        .background-section {
            background: var(--bg-light);
        }

        .background-card {
            background: white;
            padding: 3rem;
            border-radius: var(--border-radius);
            box-shadow: 0 20px 40px var(--shadow-light);
            position: relative;
            overflow: hidden;
        }

        .background-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }

        .background-text {
            font-size: 1.1rem;
            color: var(--text-light);
            line-height: 1.8;
            text-align: justify;
        }

        .highlight {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        /* Vision Mission Section */
        .vision-mission-section {
            background: var(--bg-section);
        }

        .vision-mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .vm-card {
            padding: 3rem;
            border-radius: var(--border-radius);
            color: white;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }

        .vm-card.mission {
            background-color: #0A2A99;
        }
        .vm-card.mission {
        color: white;
        }

        .mission-item {
            color: white;
        }

        .mission-icon {
            color: #FFAA16; /* warna aksen untuk ikon */
        }
        .vm-card:hover {
            transform: translateY(-8px);
        }

        .vm-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: float 4s ease-in-out infinite;
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
            text-align: center;
        }

        .card-title {
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .card-content {
            font-size: 1.1rem;
            line-height: 1.8;
            position: relative;
        }

        .mission-list {
            list-style: none;
            padding: 0;
        }

        .mission-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .mission-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(10px);
        }

        .mission-icon {
            width: 24px;
            height: 24px;
            margin-right: 1rem;
            margin-top: 2px;
            flex-shrink: 0;
        }

        /* Stats Section */
        .stats-section {
            background: var(--bg-light);
            padding: 4rem 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 10px 30px var(--shadow-light);
            transition: var(--transition);
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        /* Scroll to top button */
        .scroll-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-to-top:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.6);
        }

        /* Loading Spinner */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            html { font-size: 14px; }

            .container { padding: 0 1rem; }

            .section { padding: 3rem 0; }

            .section-header { margin-bottom: 2.5rem; }

            .hero-actions {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                padding: 0.8rem 1.5rem;
                font-size: 0.9rem;
            }

            .background-card,
            .vm-card {
                padding: 2rem 1.5rem;
            }

            .vision-mission-grid {
                grid-template-columns: 1fr;
            }

            .story-grid {
                grid-template-columns: 1fr;
            }

            .quote-text::before,
            .quote-text::after {
                display: none;
            }

            .scroll-to-top {
                bottom: 1rem;
                right: 1rem;
                width: 50px;
                height: 50px;
            }
        }

        @media (max-width: 480px) {
            .hero-content { padding: 1rem; }
            .story-card { padding: 1.5rem; }
            .stat-number { font-size: 2.5rem; }
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }

            .scroll-to-top {
                transition: none;
            }
        }

        /* Focus styles */
        .btn:focus,
        .scroll-to-top:focus {
            outline: 2px solid var(--primary-color);
            outline-offset: 2px;
        }

        /* Print styles */
        @media print {
            .hero-section,
            .scroll-to-top,
            .btn {
                display: none;
            }

            .section {
                padding: 1rem 0;
                break-inside: avoid;
            }

            body {
                font-size: 12pt;
                line-height: 1.4;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section" id="top">
        <div class="hero-background"></div>
        <div class="hero-particles" id="heroParticles"></div>
        <div class="hero-content">
            <h1 class="hero-title">Royal Laundress</h1>
            <p class="hero-subtitle">"Menyelesaikan Masalah Tanpa Lelah"</p>
            <div class="hero-divider"></div>
            <div class="hero-actions">
                <a href="/" class="btn btn-primary" aria-label="Kembali ke halaman utama">
                    <i class="fas fa-home" aria-hidden="true"></i>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
        <div class="wave-divider"></div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number" data-target="2020">0</div>
                    <div class="stat-label">Tahun Berdiri</div>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number" data-target="11">0</div>
                    <div class="stat-label">Karyawan</div>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number" data-target="100">0</div>
                    <div class="stat-label">% Kepuasan</div>
                </div>
                <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-number" data-target="1">0</div>
                    <div class="stat-label">Cabang Aktif</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section story-section" id="story">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title text-gradient">Cerita Tentang Kami</h2>
                <p class="section-subtitle">
                    Perjalanan Royal Laundress dimulai dari keinginan sederhana untuk membantu masyarakat di masa sulit
                </p>
                <div class="section-divider"></div>
            </div>

            <div class="story-grid">
                <div class="story-card" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('frontend/assets/images/royal-laundry8.png') }}" class="story-image">
                    <h3 class="story-title">Kantor Modern</h3>
                    <p class="story-description">
                        Fasilitas kantor yang nyaman dan modern untuk memberikan pelayanan terbaik kepada pelanggan kami.
                    </p>
                </div>
                <div class="story-card" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('frontend/assets/images/royal-laundry5.png') }}" class="story-image">
                    <h3 class="story-title">Tim Profesional</h3>
                    <p class="story-description">
                        Tim berpengalaman yang terlatih dan profesional dalam menangani berbagai jenis pakaian dan tekstil.
                    </p>
                </div>
                <div class="story-card" data-aos="fade-up" data-aos-delay="300">
                    <img src="{{ asset('frontend/assets/images/royal-laundry7.png') }}" class="story-image">
                    <h3 class="story-title">Peralatan Modern</h3>
                    <p class="story-description">
                        Menggunakan teknologi dan peralatan terdepan untuk hasil pencucian yang optimal dan ramah lingkungan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="section quote-section" data-aos="fade-up">
        <div class="container">
            <div class="quote-content">
                <div class="quote-text">
                    Pelayanan terbaik datang dari pekerja terbaik, pekerja terbaik datang dari budaya perusahaan yang baik
                </div>
                <div class="quote-author">
                    — Filosofi Royal Laundress
                </div>
            </div>
        </div>
    </section>

    <!-- Background Section -->
    <section class="section background-section">
        <div class="container">
            <div class="background-card" data-aos="fade-up">
                <div class="section-header">
                    <h2 class="section-title">Latar Belakang</h2>
                    <div class="section-divider"></div>
                </div>
                <div class="background-text">
                    Di masa pandemi Covid-19, lahirlah <span class="highlight">Royal Laundress</span> sebagai solusi
                    bagi masyarakat yang kehilangan pekerjaan. Inisiatif ini tercetus dari seorang ibu yang ingin membantu membuka peluang kerja agar masyarakat
                    dapat bertahan di tengah krisis.
                    <br><br>
                    Royal Laundress berdiri pada <span class="highlight">07 November 2020</span>, dengan tujuan
                    memberikan kontribusi kepada masyarakat sekitarnya. Cabang pertama didirikan di <span class="highlight">Jalan Raya Tajur No.52, Bogor Selatan</span>,
                    dan mempekerjakan sebanyak <span class="highlight">11 orang karyawan</span>.
                    <br><br>
                    Royal Laundress menawarkan layanan laundry dan dry cleaning, khususnya untuk kebutuhan hotel seperti
                    linen, handuk (towel), dan seragam (uniform). Kami berkomitmen untuk terus berkembang dan memberikan
                    dampak positif bagi komunitas di sekitar kami.
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="section vision-mission-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title text-gradient">Visi & Misi</h2>
                <p class="section-subtitle">
                    Komitmen kami untuk menjadi yang terdepan dalam industri laundry dengan teknologi modern
                </p>
                <div class="section-divider"></div>
            </div>

            <div class="vision-mission-grid">
                <div class="vm-card" data-aos="fade-right" data-aos-delay="100">
                    <i class="fas fa-eye card-icon" aria-hidden="true"></i>
                    <h3 class="card-title">Visi</h3>
                    <div class="card-content">
                        Menjadi UMKM yang handal dan ditunjang dengan teknologi untuk memberikan layanan laundry dan dry
                        cleaning terbaik di Indonesia.
                    </div>
                </div>

                <div class="vm-card mission" data-aos="fade-left" data-aos-delay="200">
                    <i class="fas fa-target card-icon" aria-hidden="true"></i>
                    <h3 class="card-title">Misi</h3>
                    <ul class="mission-list">
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Menciptakan pencucian rapih, bersih dan wangi
                        </li>
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Meningkatkan kesejahteraan karyawan
                        </li>
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Menjalankan bisnis yang profesional
                        </li>
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Membuka cabang di berbagai tempat
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="section" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title text-gradient">Layanan Unggulan</h2>
                <p class="section-subtitle">
                    Berbagai layanan profesional untuk memenuhi kebutuhan laundry Anda
                </p>
                <div class="section-divider"></div>
            </div>

            <div class="story-grid">
                <div class="story-card" data-aos="fade-up" data-aos-delay="100">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">
                        <i class="fas fa-tshirt" aria-hidden="true"></i>
                    </div>
                    <h3 class="story-title">Laundry Reguler</h3>
                    <p class="story-description">
                        Layanan pencucian pakaian sehari-hari dengan kualitas terbaik dan harga terjangkau.
                    </p>
                </div>
                <div class="story-card" data-aos="fade-up" data-aos-delay="200">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">
                        <i class="fas fa-spray-can" aria-hidden="true"></i>
                    </div>
                    <h3 class="story-title">Dry Cleaning</h3>
                    <p class="story-description">
                        Perawatan khusus untuk pakaian berbahan halus dan formal dengan teknologi dry cleaning modern.
                    </p>
                </div>
                <div class="story-card" data-aos="fade-up" data-aos-delay="300">
                    <div style="font-size: 3rem; margin-bottom: 1rem; color: var(--primary-color);">
                        <i class="fas fa-building" aria-hidden="true"></i>
                    </div>
                    <h3 class="story-title">Layanan Hotel</h3>
                    <p class="story-description">
                        Spesialisasi dalam mencuci linen, handuk, dan seragam untuk kebutuhan industri hospitality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="section quote-section">
        <div class="container">
            <div class="quote-content" data-aos="fade-up">
                <h2 style="font-size: 2.5rem; margin-bottom: 1rem; font-weight: 700;">
                    Siap Memulai dengan Royal Laundress?
                </h2>
                <p style="font-size: 1.2rem; margin-bottom: 2rem; opacity: 0.9;">
                    Hubungi kami sekarang untuk mendapatkan layanan laundry terbaik
                </p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="https://wa.me/6281292204477" target="_blank" class="btn btn-primary">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Scroll to top button -->
    <button class="scroll-to-top" id="scrollToTop" aria-label="Kembali ke atas">
        <i class="fas fa-arrow-up" aria-hidden="true"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Particle animation for hero section
        function createHeroParticles() {
            const particlesContainer = document.getElementById('heroParticles');
            const particleCount = window.innerWidth < 768 ? 20 : 40;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Animated counter for stats
        function animateCounters() {
            const counters = document.querySelectorAll('[data-target]');

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;

                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target;
                    }
                };

                // Start animation when element comes into view
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                });

                observer.observe(counter);
            });
        }

        // Scroll to top functionality
        function handleScrollToTop() {
            const scrollToTopBtn = document.getElementById('scrollToTop');

            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 500) {
                    scrollToTopBtn.classList.add('visible');
                } else {
                    scrollToTopBtn.classList.remove('visible');
                }
            });

            scrollToTopBtn.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }

        // Smooth scrolling for anchor links
        function initSmoothScrolling() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const offsetTop = targetElement.offsetTop - 80;
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Parallax effect for hero section
        function initParallaxEffect() {
            const hero = document.querySelector('.hero-section');

            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;

                if (hero && scrolled < hero.offsetHeight) {
                    hero.style.transform = `translateY(${rate}px)`;
                }
            });
        }

        // Loading state management
        function initLoadingStates() {
            const buttons = document.querySelectorAll('.btn');

            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Don't show loading for navigation links
                    if (this.getAttribute('href').startsWith('#') ||
                        this.getAttribute('href').startsWith('/')) {
                        return;
                    }

                    const originalContent = this.innerHTML;
                    this.innerHTML = '<span class="loading-spinner"></span> Memuat...';
                    this.disabled = true;

                    // Reset after 3 seconds (adjust as needed)
                    setTimeout(() => {
                        this.innerHTML = originalContent;
                        this.disabled = false;
                    }, 3000);
                });
            });
        }

        // Enhanced hover effects
        function initHoverEffects() {
            const cards = document.querySelectorAll('.story-card, .vm-card, .stat-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        }

        // Performance optimization: Throttle scroll events
        function throttle(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            }
        }

        // Error handling for images
        function handleImageErrors() {
            const images = document.querySelectorAll('img');

            images.forEach(img => {
                img.addEventListener('error', function() {
                    this.style.background = 'linear-gradient(135deg, #f1f3f4, #e8eaed)';
                    this.style.display = 'flex';
                    this.style.alignItems = 'center';
                    this.style.justifyContent = 'center';
                    this.innerHTML = '<i class="fas fa-image" style="font-size: 2rem; color: #9aa0a6;"></i>';
                });
            });
        }

        // Accessibility enhancements
        function enhanceAccessibility() {
            // Skip to main content link
            const skipLink = document.createElement('a');
            skipLink.href = '#story';
            skipLink.textContent = 'Skip to main content';
            skipLink.className = 'sr-only';
            skipLink.style.cssText = `
                position: absolute;
                top: -40px;
                left: 6px;
                background: var(--primary-color);
                color: white;
                padding: 8px;
                text-decoration: none;
                border-radius: 4px;
                z-index: 1000;
            `;

            skipLink.addEventListener('focus', () => {
                skipLink.style.top = '6px';
            });

            skipLink.addEventListener('blur', () => {
                skipLink.style.top = '-40px';
            });

            document.body.insertBefore(skipLink, document.body.firstChild);

            // Keyboard navigation for cards
            const interactiveElements = document.querySelectorAll('.story-card, .vm-card, .stat-card');

            interactiveElements.forEach(element => {
                element.setAttribute('tabindex', '0');
                element.setAttribute('role', 'article');

                element.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        element.click();
                    }
                });
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            createHeroParticles();
            animateCounters();
            handleScrollToTop();
            initSmoothScrolling();
            initParallaxEffect();
            initLoadingStates();
            initHoverEffects();
            handleImageErrors();
            enhanceAccessibility();

            // Show page after everything is loaded
            document.body.style.opacity = '1';

            console.log('Royal Laundress - About page initialized successfully! 🚀');
        });

        // Handle window resize
        window.addEventListener('resize', throttle(() => {
            // Recreate particles on significant size changes
            const currentParticleCount = document.querySelectorAll('.particle').length;
            const targetParticleCount = window.innerWidth < 768 ? 20 : 40;

            if (Math.abs(currentParticleCount - targetParticleCount) > 10) {
                document.getElementById('heroParticles').innerHTML = '';
                createHeroParticles();
            }
        }, 250));

        // Service Worker registration for PWA support (optional)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }
    </script>
</body>

</html>
