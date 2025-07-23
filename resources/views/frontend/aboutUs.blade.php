<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Royal Laundress</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
html {
    scroll-behavior: smooth;
  }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }

        .animate-slide-left {
            animation: slideInLeft 1s ease-out;
        }

        .animate-slide-right {
            animation: slideInRight 1s ease-out;
        }

        .animate-scale-in {
            animation: scaleIn 1s ease-out;
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        .btn-back {
    display: inline-block;
    margin-top: 30px;
    padding: 12px 28px;
    background-color: #007bff;
    color: #fff;
    font-weight: 600;
    border-radius: 30px;
    text-decoration: none;
    font-size: 16px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-back:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

.animate-fade-in {
    animation: fadeIn 1.2s ease-in-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 119, 198, 0.2) 0%, transparent 50%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 20px;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0.9;
            font-style: italic;
        }

        .hero-divider {
            width: 100px;
            height: 4px;
            background: white;
            margin: 0 auto;
            border-radius: 2px;
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

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Section Styles */
        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 20px;
        }

        .section-divider {
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0 auto 60px;
            border-radius: 2px;
        }

        /* Story Section */
        .story-section {
            background: #f8fafc;
        }

        .story-images {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
            text-align: center;
        }

        /* Quote Section */
        .quote-section {
            text-align: center;
            margin: 80px 0;
        }

        .quote-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .quote-text {
            font-size: 1.5rem;
            color: #667eea;
            font-style: italic;
            font-weight: 600;
            line-height: 1.8;
            position: relative;
            padding: 40px;
        }

        .quote-text::before,
        .quote-text::after {
            content: '"';
            font-size: 4rem;
            position: absolute;
            color: #764ba2;
            opacity: 0.3;
        }

        .quote-text::before {
            top: 0;
            left: 0;
        }

        .quote-text::after {
            bottom: -20px;
            right: 0;
        }

        /* Background Section */
        .background-section {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }

        .background-card {
            background: white;
            padding: 60px;
            border-radius: 30px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1);
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
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .background-text {
            font-size: 1.2rem;
            color: #4a5568;
            line-height: 1.8;
            text-align: justify;
        }

        .highlight {
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
        }

        /* Vision Mission Section */
        .vision-mission-section {
            background: white;
        }

        .vision-mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .vision-card,
        .mission-card {
            padding: 50px;
            border-radius: 25px;
            color: white;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .vision-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .mission-card {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        .vision-card:hover,
        .mission-card:hover {
            transform: translateY(-5px);
        }

        .vision-card::before,
        .mission-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: float 4s ease-in-out infinite;
        }

        .card-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 30px;
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
            margin-bottom: 20px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .mission-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(10px);
        }

        .mission-icon {
            width: 24px;
            height: 24px;
            margin-right: 15px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        /* Scroll to top button */
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-to-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.6);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .section {
                padding: 60px 0;
            }

            .background-card {
                padding: 40px 30px;
            }

            .vision-card,
            .mission-card {
                padding: 40px 30px;
            }

            .vision-mission-grid {
                grid-template-columns: 1fr;
            }

            .story-images {
                grid-template-columns: 1fr;
            }

            .quote-text {
                font-size: 1.2rem;
                padding: 20px;
            }
        }

        /* Loading animation */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Particle background */
        .particles {
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
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>

<body id="top">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background"></div>
        <div class="particles" id="particles"></div>
        <div class="hero-content text-center">
            <h1 class="hero-title animate-fade-in">Royal Laundress</h1>
            <p class="hero-subtitle animate-slide-left">"Menyelesaikan Masalah Tanpa Lelah"</p>
            <div class="hero-divider animate-slide-right"></div>

            <!-- Tombol Kembali -->
            <a href="{{ url('/') }}" class="btn-back animate-fade-in">
                <i class="fas fa-home me-2"></i> Kembali ke Beranda
            </a>
        </div>
        <div class="wave-divider"></div>
    </section>


    <!-- Story Section -->
    <section class="section story-section">
        <div class="container">
            <h2 class="section-title fade-in-up">Cerita Tentang Kami</h2>
            <div class="section-divider fade-in-up"></div>

            <div class="story-images fade-in-up">
                <div class="story-image float-animation">
                    <img src="{{ asset('frontend/assets/images/royal-laundry5.png') }}" alt="Kantor Royal"
                        style="width: 300px; height: 300px; object-fit: cover; margin-bottom: 20px;">
                </div>
                <div class="story-image float-animation" style="animation-delay: 0.5s;">
                    <img src="{{ asset('frontend/assets/images/royal-laundry6.png') }}" alt="Tim Profesional"
                        style="width: 300px; height: 300px; object-fit: cover; margin-bottom: 20px;">
                </div>
                <div class="story-image float-animation" style="animation-delay: 1s;">
                    <img src="{{ asset('frontend/assets/images/royal-laundry7.png') }}" alt="Peralatan Modern"
                        style="width: 300px; height: 300px; object-fit: cover; margin-bottom: 20px;">
                </div>
            </div>

        </div>
    </section>


    <!-- Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-content fade-in-up">
                <div class="quote-text">
                    Pelayanan terbaik datang dari pekerja terbaik, pekerja terbaik datang dari budaya perusahaan yang
                    baik
                </div>
            </div>
        </div>
    </section>

    <!-- Background Section -->
    <section class="section background-section">
        <div class="container">
            <div class="background-card fade-in-up">
                <h2 class="section-title" style="margin-bottom: 40px;">Latar Belakang</h2>
                <div class="section-divider" style="margin-bottom: 40px;"></div>
                <div class="background-text">
                    Di masa pandemi Covid-19, lahirlah <span class="highlight">Royal Laundress</span> sebagai solusi
                    bagi masyarakat yang kehilangan pekerjaan.
                    Inisiatif ini tercetus dari seorang ibu yang ingin membantu membuka peluang kerja agar masyarakat
                    dapat bertahan di tengah krisis.
                    <br><br>
                    Royal Laundress berdiri pada <span class="highlight">07 November 2020</span>, dengan tujuan
                    memberikan kontribusi kepada masyarakat sekitarnya.
                    Cabang pertama didirikan di <span class="highlight">Jalan Raya Tajur No.52, Bogor Selatan</span>,
                    dan mempekerjakan sebanyak <span class="highlight">11 orang karyawan</span>.
                    Royal Laundress menawarkan layanan laundry dan dry cleaning, khususnya untuk kebutuhan hotel seperti
                    linen, handuk (towel), dan seragam (uniform).
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="section vision-mission-section">
        <div class="container">
            <h2 class="section-title fade-in-up">Visi & Misi</h2>
            <div class="section-divider fade-in-up"></div>

            <div class="vision-mission-grid">
                <!-- Vision -->
                <div class="vision-card fade-in-up">
                    <h3 class="card-title">
                        <i class="fas fa-eye" style="margin-right: 15px;"></i>
                        Visi
                    </h3>
                    <div class="card-content">
                        Menjadi UMKM yang handal dan ditunjang dengan teknologi untuk memberikan layanan laundry dan dry
                        cleaning terbaik
                    </div>
                </div>

                <!-- Mission -->
                <div class="mission-card fade-in-up">
                    <h3 class="card-title">
                        <i class="fas fa-target" style="margin-right: 15px;"></i>
                        Misi
                    </h3>
                    <ul class="mission-list">
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Menciptakan pencucian rapih, bersih dan wangi
                        </li>
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Meningkatkan kesejahteraan karyawan
                        </li>
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            Menjalankan bisnis yang profesional
                        </li>
                        <li class="mission-item">
                            <svg class="mission-icon" fill="currentColor" viewBox="0 0 20 20">
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

    <!-- Scroll to top button -->
    <button class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Particle animation
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

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

        // Scroll animations
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in-up');
            const windowHeight = window.innerHeight;

            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                if (elementTop < windowHeight - 100) {
                    element.classList.add('visible');
                }
            });
        }

        // Scroll to top functionality
        function handleScrollToTop() {
            const scrollToTopBtn = document.getElementById('scrollToTop');

            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        }

        // Smooth scroll to top
        document.getElementById('scrollToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            handleScrollAnimations();

            // Add scroll event listeners
            window.addEventListener('scroll', function() {
                handleScrollAnimations();
                handleScrollToTop();
            });

            // Add stagger animation to mission items
            const missionItems = document.querySelectorAll('.mission-item');
            missionItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = '0';
                    item.style.transform = 'translateX(-20px)';
                    item.style.transition = 'all 0.5s ease';

                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateX(0)';
                    }, index * 200);
                }, 1000);
            });

            // Add parallax effect to hero section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero-section');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });
        });

        // Add smooth hover effects
        document.querySelectorAll('.story-image, .vision-card, .mission-card').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });

            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>

</html>
