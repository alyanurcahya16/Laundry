@extends('layouts.frontend')

@section('content')
<style>
    .testimonial-container {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 3rem 0;
        position: relative;
    }

    .testimonial-container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
        background-size: 30px 30px;
        opacity: 0.3;
    }

    .testimonial-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        padding: 2.5rem;
        position: relative;
        z-index: 1;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .testimonial-header {
        text-align: center;
        margin-bottom: 2rem;
        position: relative;
    }

    .testimonial-title {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        position: relative;
    }

    .testimonial-subtitle {
        color: #6b7280;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
    }

    .testimonial-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        margin: 0 auto;
        border-radius: 2px;
    }

    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-label {
        font-weight: 600;
        color: #374151;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 1rem;
    }

    .form-control {
        border: 2px solid #e5e7eb;
        border-radius: 12px;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f9fafb;
        position: relative;
    }

    .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        background: white;
        outline: none;
    }

    .form-control:hover {
        border-color: #d1d5db;
        background: white;
    }

    .rating-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-top: 0.5rem;
    }

    .rating-stars {
        display: flex;
        gap: 0.25rem;
    }

    .star {
        font-size: 1.5rem;
        color: #d1d5db;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .star:hover,
    .star.active {
        color: #fbbf24;
        text-shadow: 0 0 10px rgba(251, 191, 36, 0.5);
    }

    .rating-input {
        display: none;
    }

    .rating-text {
        font-size: 0.9rem;
        color: #6b7280;
        font-weight: 500;
    }

    .file-upload-container {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .file-upload-input {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    .file-upload-label {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding: 1rem;
        border: 2px dashed #d1d5db;
        border-radius: 12px;
        background: #f9fafb;
        cursor: pointer;
        transition: all 0.3s ease;
        color: #6b7280;
        font-weight: 500;
    }

    .file-upload-label:hover {
        border-color: #667eea;
        background: #f0f4ff;
        color: #667eea;
    }

    .file-upload-label.has-file {
        border-color: #10b981;
        background: #f0fdf4;
        color: #059669;
    }

    .submit-btn {
        width: 100%;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        position: relative;
        overflow: hidden;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(102, 126, 234, 0.6);
    }

    .submit-btn:active {
        transform: translateY(0);
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .form-icon {
        color: #667eea;
        font-size: 1.2rem;
    }

    .textarea-control {
        resize: vertical;
        min-height: 120px;
    }

    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
    }

    .floating-element {
        position: absolute;
        opacity: 0.1;
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
        top: 20%;
        right: 10%;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }

    .success-message {
        background: #d1fae5;
        border: 1px solid #10b981;
        color: #065f46;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    @media (max-width: 768px) {
        .testimonial-container {
            padding: 2rem 1rem;
        }

        .testimonial-card {
            padding: 1.5rem;
        }

        .testimonial-title {
            font-size: 2rem;
        }

        .rating-container {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
    }
</style>

<div class="testimonial-container">
    <div class="floating-elements">
        <div class="floating-element">
            <i class="fas fa-quote-left" style="font-size: 3rem; color: #667eea;"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-star" style="font-size: 2rem; color: #fbbf24;"></i>
        </div>
        <div class="floating-element">
            <i class="fas fa-heart" style="font-size: 2.5rem; color: #ef4444;"></i>
        </div>
    </div>

    <div class="container">
        <div class="testimonial-card mx-auto" style="max-width: 600px;">
            <div class="testimonial-header">
                <h2 class="testimonial-title">
                    <i class="fas fa-quote-left" style="color: #667eea; margin-right: 0.5rem;"></i>
                    Kirim Testimoni
                </h2>
                <p class="testimonial-subtitle">Bagikan pengalaman Anda dengan layanan Royal Laundress</p>
                <div class="testimonial-divider"></div>
            </div>

            <form action="{{ route('frontend.testimoni.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="nama" class="form-label">
                        <i class="fas fa-user form-icon"></i>
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama lengkap Anda">
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">
                        <i class="fas fa-comment-dots form-icon"></i>
                        Testimoni Anda
                    </label>
                    <textarea name="description" id="description" class="form-control textarea-control" rows="4" required placeholder="Ceritakan pengalaman Anda menggunakan layanan kami..."></textarea>
                </div>

                <div class="form-group">
                    <label for="rate" class="form-label">
                        <i class="fas fa-star form-icon"></i>
                        Rating Layanan
                    </label>
                    <div class="rating-container">
                        <div class="rating-stars" id="ratingStars">
                            <span class="star" data-rating="1">★</span>
                            <span class="star" data-rating="2">★</span>
                            <span class="star" data-rating="3">★</span>
                            <span class="star" data-rating="4">★</span>
                            <span class="star" data-rating="5">★</span>
                        </div>
                        <span class="rating-text" id="ratingText">Pilih rating</span>
                    </div>
                    <input type="number" name="rate" id="rate" class="rating-input" min="1" max="5" required>
                </div>

                <div class="form-group">
                    <label for="gambar" class="form-label">
                        <i class="fas fa-camera form-icon"></i>
                        Foto Pendukung (Opsional)
                    </label>
                    <div class="file-upload-container">
                        <input type="file" name="gambar" id="gambar" class="file-upload-input" accept="image/*">
                        <label for="gambar" class="file-upload-label" id="fileLabel">
                            <i class="fas fa-cloud-upload-alt" style="font-size: 1.5rem;"></i>
                            <span>Pilih foto atau drag & drop disini</span>
                        </label>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    <i class="fas fa-paper-plane" style="margin-right: 0.5rem;"></i>
                    Kirim Testimoni
                </button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Rating Stars Interaction
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rate');
    const ratingText = document.getElementById('ratingText');

    const ratingTexts = {
        1: 'Sangat Buruk',
        2: 'Buruk',
        3: 'Cukup',
        4: 'Baik',
        5: 'Sangat Baik'
    };

    stars.forEach((star, index) => {
        star.addEventListener('click', function() {
            const rating = this.getAttribute('data-rating');
            ratingInput.value = rating;
            ratingText.textContent = ratingTexts[rating];

            // Update star display
            stars.forEach((s, i) => {
                if (i < rating) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });

        star.addEventListener('mouseover', function() {
            const rating = this.getAttribute('data-rating');
            stars.forEach((s, i) => {
                if (i < rating) {
                    s.style.color = '#fbbf24';
                } else {
                    s.style.color = '#d1d5db';
                }
            });
        });
    });

    document.getElementById('ratingStars').addEventListener('mouseleave', function() {
        const currentRating = ratingInput.value;
        stars.forEach((s, i) => {
            if (i < currentRating) {
                s.style.color = '#fbbf24';
            } else {
                s.style.color = '#d1d5db';
            }
        });
    });

    // File Upload Interaction
    const fileInput = document.getElementById('gambar');
    const fileLabel = document.getElementById('fileLabel');

    fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const fileName = this.files[0].name;
            fileLabel.innerHTML = `
                <i class="fas fa-check-circle" style="font-size: 1.5rem; color: #10b981;"></i>
                <span>${fileName}</span>
            `;
            fileLabel.classList.add('has-file');
        } else {
            fileLabel.innerHTML = `
                <i class="fas fa-cloud-upload-alt" style="font-size: 1.5rem;"></i>
                <span>Pilih foto atau drag & drop disini</span>
            `;
            fileLabel.classList.remove('has-file');
        }
    });
});
</script>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
