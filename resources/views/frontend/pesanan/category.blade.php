<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Laundry</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 0;
            margin: 0;
        }

        .main-container {
            min-height: 100vh;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .header-section h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .header-section p {
            font-size: 1.1rem;
            opacity: 0.9;
            font-weight: 300;
        }

        .form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
            margin-bottom: 30px;
            backdrop-filter: blur(10px);
        }

        .section-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: white;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .order-item {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
            position: relative;
        }

        .order-item:hover {
            border-color: #667eea;
            transform: translateY(-1px);
        }

        .order-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 15px 15px 0 0;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 25px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        .btn-outline-primary {
            border: 2px solid #667eea;
            color: #667eea;
            border-radius: 10px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background: #667eea;
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-outline-danger {
            border: 2px solid #dc3545;
            color: #dc3545;
            border-radius: 8px;
            padding: 8px 15px;
            font-size: 0.85rem;
            transition: all 0.3s ease;
        }

        .btn-outline-danger:hover {
            background: #dc3545;
            transform: translateY(-1px);
        }

        .quantity-group {
            transition: all 0.3s ease;
        }

        .accordion-item {
            border-radius: 15px !important;
            border: 2px solid #e9ecef !important;
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .accordion-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .accordion-button {
            background: white !important;
            border: none !important;
            font-weight: 600 !important;
            font-size: 1rem !important;
            padding: 20px !important;
            color: #495057 !important;
            border-radius: 15px !important;
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
            color: white !important;
        }

        .accordion-body {
            background: #f8f9fa;
            padding: 20px;
        }

        .accordion-body ul {
            list-style: none;
            padding: 0;
        }

        .accordion-body li {
            padding: 8px 0;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accordion-body li:last-child {
            border-bottom: none;
        }

        .accordion-body li::before {
            content: '🧺';
            margin-right: 10px;
        }

        .price-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .price-section h3 {
            text-align: center;
            color: #495057;
            margin-bottom: 30px;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .alert-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .submit-section {
            text-align: center;
            margin-top: 40px;
            padding: 30px;
            background: #f8f9fa;
            border-radius: 15px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 50px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6);
        }

        .floating-icons {
            position: fixed;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .floating-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .floating-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 10px;
            }

            .form-container {
                padding: 20px;
            }

            .header-section h1 {
                font-size: 2rem;
            }

            .section-card {
                padding: 20px;
            }

            .floating-icons {
                display: none;
            }
        }

        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .order-counter {
            position: absolute;
            top: -10px;
            right: -10px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Header Section -->
        <div class="header-section fade-in">
            <h1><i class="fas fa-tshirt"></i> Premium Laundry Service</h1>
            <p>Layanan laundry terpercaya dengan kualitas terbaik</p>
        </div>

        <!-- Form Container -->
        <div class="form-container fade-in">
            <!-- Success Alert -->
            <div class="alert alert-success d-none" id="successAlert">
                <i class="fas fa-check-circle me-2"></i>
                Pesanan berhasil dikirim! Terima kasih atas kepercayaan Anda.
            </div>

            <form id="laundryForm">
                <!-- Data Pelanggan -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-user"></i>
                        Data Pelanggan
                    </h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telepon" class="form-label">Nomor WhatsApp</label>
                            <input type="tel" class="form-control" name="telepon" id="telepon" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="alamat" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Daftar Pesanan -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-shopping-cart"></i>
                        Daftar Pesanan
                    </h3>
                    <div id="orders-container">
                        <!-- Pesanan Pertama -->
                        <div class="order-item">
                            <div class="order-counter">1</div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pilih Layanan</label>
                                    <select class="form-select" name="orders[0][layanan]" required onchange="updateItems(this)">
                                        <option value="">-- Pilih Layanan --</option>
                                        <option value="Linen">🛏️ Linen</option>
                                        <option value="Uniform">👔 Uniform</option>
                                        <option value="Satuan">👗 Satuan</option>
                                        <option value="Beddings">🛏️ Beddings</option>
                                        <option value="Other Items">🧸 Other Items</option>
                                        <option value="Daily Kiloan">⚖️ Daily Kiloan</option>
                                        <option value="Tas & Sepatu">👜 Tas & Sepatu</option>
                                        <option value="Membership Packages">⭐ Membership Packages</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pilih Item</label>
                                    <select class="form-select item-select" name="orders[0][item]" required>
                                        <option value="">-- Pilih kategori dulu --</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3 quantity-group d-none">
                                    <label class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" name="orders[0][quantity]" min="1" value="1">
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label class="form-label">Catatan (Opsional)</label>
                                    <input type="text" class="form-control" name="orders[0][catatan]" placeholder="Contoh: Jangan pakai pewangi, cuci terpisah">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Tambah Pesanan -->
                    <div class="text-center">
                        <button type="button" class="btn btn-outline-primary" onclick="addOrderField()">
                            <i class="fas fa-plus"></i> Tambah Pesanan Lain
                        </button>
                    </div>
                </div>

                <!-- Submit Section -->
                <div class="submit-section">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane me-2"></i>
                        Kirim Semua Pesanan
                    </button>
                    <div class="mt-3">
                        <small class="text-muted">
                            <i class="fas fa-shield-alt me-1"></i>
                            Pesanan Anda akan diproses dalam 1x24 jam
                        </small>
                    </div>
                </div>
            </form>
        </div>

        <!-- Daftar Harga -->
        <div class="price-section">
            <h3><i class="fas fa-tags"></i> Daftar Harga & Layanan</h3>
            <div class="row g-4">
                <!-- LINEN -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#linenCollapse">
                                🛏️ Linen
                            </button>
                        </h2>
                        <div id="linenCollapse" class="accordion-collapse collapse">
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
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UNIFORM -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#uniformCollapse">
                                👔 Uniform
                            </button>
                        </h2>
                        <div id="uniformCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>Kemeja/Blouse <span class="fw-bold">Rp 5.000</span></li>
                                    <li>Celana/Rok <span class="fw-bold">Rp 4.000</span></li>
                                    <li>Batik/Seragam <span class="fw-bold">Rp 6.000</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SATUAN -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#satuanCollapse">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#beddingsCollapse">
                                🛏️ Beddings
                            </button>
                        </h2>
                        <div id="beddingsCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>Selimut</li>
                                    <li>Bed Cover</li>
                                    <li>Spray Anti Tungau</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OTHER ITEMS -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#otherCollapse">
                                🧸 Other Items
                            </button>
                        </h2>
                        <div id="otherCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>Boneka</li>
                                    <li>Gorden</li>
                                    <li>Karpet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DAILY KILOAN -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kiloanCollapse">
                                ⚖️ Daily Kiloan
                            </button>
                        </h2>
                        <div id="kiloanCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Paket cuci harian per kilogram. Harga mulai dari <strong>Rp 7.000/kg</strong> tergantung layanan.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAS & SEPATU -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tasCollapse">
                                👜 Tas & Sepatu
                            </button>
                        </h2>
                        <div id="tasCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>Cuci Sepatu <span class="fw-bold">Rp 45.000</span></li>
                                    <li>Cuci Tas <span class="fw-bold">Rp 30.000</span></li>
                                    <li>Deep Clean & Treatment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MEMBERSHIP -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membershipCollapse">
                                ⭐ Membership
                            </button>
                        </h2>
                        <div id="membershipCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <p>Hemat dengan paket membership bulanan! Tersedia paket kiloan & satuan.</p>
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

                <!-- MENGAPA KAMI -->
                <div class="col-md-6 col-lg-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#whyCollapse">
                                ✨ Mengapa Kami?
                            </button>
                        </h2>
                        <div id="whyCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul>
                                    <li>100% Garansi Puas</li>
                                    <li>Antar Jemput Gratis</li>
                                    <li>Parfum Premium</li>
                                    <li>Laundry Express 24 jam</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating Icons -->
    <div class="floating-icons">
        <div class="floating-icon" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
            <i class="fas fa-arrow-up"></i>
        </div>
        <div class="floating-icon" onclick="window.open('https://wa.me/628123456789', '_blank')">
            <i class="fab fa-whatsapp"></i>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data item laundry
        const itemOptions = {
            'linen': [
                'Bed Sheet Double - Rp 2.500',
                'Bed Sheet Single - Rp 2.400',
                'Duvet Cover Double - Rp 5.000',
                'Duvet Cover Single - Rp 4.700',
                'Pillow Case - Rp 1.200',
                'Bath Towel - Rp 2.500',
                'Hand Towel - Rp 1.500',
                'Face Towel - Rp 1.200',
                'Pool Towel - Rp 3.000',
                'Blanket Double - Rp 7.000',
                'Treatment/Spotting (2x harga)'
            ],
            'uniform': [
                'Shirt - Rp 7.000',
                'Trouser - Rp 7.000',
                'Jas / Jacket - Rp 9.000',
                'Skirt (Short) - Rp 5.100',
                'Skirt (Long) - Rp 5.600',
                'Cook Jacket - Rp 7.300',
                'Apron Kitchen - Rp 3.000',
                'T-shirt - Rp 7.000',
                'Neck Tie - Rp 4.500',
                'Safari Shirt - Rp 13.000',
                'Treatment/Spotting (2x harga)'
            ],
            'satuan': [
                'Atasan (Kemeja/Blouse/Batik) - Rp 25.000',
                'Bawahan (Rok/Jeans/Celana) - Rp 18.000',
                'Luaran (Jaket/Hoodie) - Rp 30.000',
                'Jas (Blazer/Mantel) - Rp 50.000',
                'Jas Setelan - Rp 70.000',
                'Dress (Long Dress/Baju Muslim) - Rp 25.000',
                'Gaun Panjang (Gaun Pesta/Variasi) - Rp 50.000',
                'Kebaya - Rp
