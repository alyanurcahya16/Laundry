<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Laundry</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            overflow-x: hidden;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: relative;
        }

        /* Overlay pattern untuk depth */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.05) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }

        .main-container {
            min-height: 100vh;
            padding: 2rem 0;
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Card styling with glassmorphism effect */
        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px 20px 0 0 !important;
            padding: 1.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        /* Form styling */
        .form-control, .form-select {
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 10px;
            padding: 12px 16px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: rgba(255, 255, 255, 1);
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }

        /* Button styling */
        .btn {
            border-radius: 10px;
            padding: 12px 24px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-outline-primary {
            border: 2px solid #667eea;
            color: #667eea;
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
        }

        .btn-outline-danger {
            border: 2px solid #dc3545;
            color: #dc3545;
            background: transparent;
        }

        .btn-outline-danger:hover {
            background: #dc3545;
            color: white;
            transform: translateY(-2px);
        }

        /* Order item styling */
        .order-item {
            background: rgba(255, 255, 255, 0.5);
            border: 2px solid rgba(102, 126, 234, 0.2);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .order-item:hover {
            background: rgba(255, 255, 255, 0.7);
            border-color: rgba(102, 126, 234, 0.4);
        }

        /* Title styling */
        h2 {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            font-weight: 700;
            margin-bottom: 2rem;
        }

        h5 {
            color: #495057;
            font-weight: 600;
        }

        /* Accordion styling */
        .accordion-item {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px !important;
            margin-bottom: 1rem;
            overflow: hidden;
        }

        .accordion-button {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border: none;
            border-radius: 15px 15px 0 0;
            font-weight: 600;
            color: #495057;
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .accordion-body {
            background: rgba(255, 255, 255, 0.95);
        }

        /* Alert styling */
        .alert-success {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            border: none;
            border-radius: 15px;
            color: white;
            font-weight: 600;
        }
      .submit-section {
            text-align: center;
            margin-top: 40px;
            padding: 30px;
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
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-container {
                padding: 1rem 0;
            }

            .card-body {
                padding: 1.5rem;
            }

            .order-item {
                padding: 1rem;
            }

            h2 {
                font-size: 1.5rem;
            }
        }

        /* Animation for form elements */
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

        .card {
            animation: fadeInUp 0.6s ease forwards;
        }

        .card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .card:nth-child(3) {
            animation-delay: 0.4s;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="container py-5">
            <h2 class="text-center mb-4">Form Pemesanan Laundry</h2>

            <div class="alert alert-success d-none" id="successAlert">
                Pesanan berhasil dikirim!
            </div>
 <form id="laundryForm" action="{{ route('order.store') }}" method="POST">
    @csrf

            <form id="orderForm">
                <!-- Data Pelanggan -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5><i class="fas fa-user me-2"></i>Data Pelanggan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telepon" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control" name="telepon" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" name="alamat" rows="2" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Daftar Pesanan -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h5><i class="fas fa-shopping-cart me-2"></i>Daftar Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <div id="orders-container">
                            <!-- Pesanan Pertama -->
                            <div class="order-item mb-4">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Pilih Layanan</label>
                                        <select class="form-select" name="orders[0][layanan]" required onchange="updateItems(this)">
                                            <option value="">-- Pilih --</option>
                                            <option value="Linen">Linen</option>
                                            <option value="Uniform">Uniform</option>
                                            <option value="Satuan">Satuan</option>
                                            <option value="Beddings">Beddings</option>
                                            <option value="Other Items">Other Items</option>
                                            <option value="Daily Kiloan">Daily Kiloan</option>
                                            <option value="Tas & Sepatu">Tas & Sepatu</option>
                                            <option value="Membership Packages">Membership Packages</option>
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
                                        <input type="text" class="form-control" name="orders[0][catatan]" placeholder="Contoh: Jangan pakai pewangi">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Tambah Pesanan -->
                        <button type="button" class="btn btn-outline-primary" onclick="addOrderField()">
                            <i class="fas fa-plus"></i> Tambah Pesanan Lain
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Data item laundry
        const itemOptions = {
            linen: [
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
            uniform: [
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
            satuan: [
                'Atasan (Kemeja/Blouse/Batik) - Rp 25.000',
                'Bawahan (Rok/Jeans/Celana) - Rp 18.000',
                'Luaran (Jaket/Hoodie) - Rp 30.000',
                'Jas (Blazer/Mantel) - Rp 50.000',
                'Jas Setelan - Rp 70.000',
                'Dress (Long Dress/Baju Muslim) - Rp 25.000',
                'Gaun Panjang (Gaun Pesta/Variasi) - Rp 50.000',
                'Kebaya - Rp 30.000',
                'Alat Ibadah (Mukena/Sajadah) - Rp 25.000'
            ],
            beddings: [
                'Pillow - Rp 20.000',
                'Pillowcase - Rp 25.000',
                'Sprei Single - Rp 15.000',
                'Sprei Double - Rp 25.000',
                'Selimut Single - Rp 15.000',
                'Selimut Double - Rp 25.000',
                'Bed Cover Single - Rp 23.000',
                'Bed Cover Double - Rp 32.000',
                'Paket Bedding Single - Rp 35.000',
                'Paket Bedding Double - Rp 50.000'
            ],
            'other items': [
                'Handuk - Rp 15.000',
                'Dompet Non Leather Kecil - Rp 25.000',
                'Dompet Non Leather Besar - Rp 40.000',
                'Dompet Leather Kecil - Rp 30.000',
                'Dompet Leather Besar - Rp 45.000',
                'Atasan (Kemeja/Batik) - Rp 25.000',
                'Bawahan (Rok/Jeans) - Rp 18.000',
                'Luaran (Jaket/Hoodie) - Rp 30.000',
                'Jas - Rp 50.000',
                'Jas Setelan - Rp 70.000',
                'Dress - Rp 25.000',
                'Gaun Pesta - Rp 50.000',
                'Kebaya - Rp 30.000',
                'Alat Ibadah - Rp 25.000'
            ],
            'daily kiloan': [
                'Cuci Kering Lipat - Rp 7.000/kg',
                'Cuci Kering Gosok (3 Hari) - Rp 9.000/kg',
                'Cuci Kering Gosok (1 Hari) - Rp 12.000/kg',
                'Cuci Kering Gosok (12 Jam) - Rp 18.000/kg',
                'Cuci Kering Gosok (6 Jam) - Rp 22.000/kg',
                'Setrika Kiloan Reguler (2 Hari) - Rp 7.000/kg',
                'Setrika Kiloan Express (1 Hari) - Rp 9.000/kg'
            ],
            'tas & sepatu': [
                'Sepatu Nylon / Canvas - Rp 45.000',
                'Sepatu Putih - Rp 55.000',
                'Sepatu Wanita - Rp 45.000',
                'Suede / Leather - Rp 100.000',
                'Sandal - Rp 25.000',
                'Unyellowing - Rp 120.000',
                'Tas Non Leather Kecil - Rp 30.000',
                'Tas Non Leather Sedang - Rp 40.000',
                'Tas Non Leather Besar - Rp 50.000',
                'Tas Leather Kecil - Rp 75.000',
                'Tas Leather Sedang - Rp 100.000',
                'Tas Leather Besar - Rp 150.000'
            ],
            'membership packages': [
                'Marquis - Rp 150.000',
                'Prince - Rp 250.000',
                'Duke - Rp 375.000',
                'King - Rp 500.000'
            ]
        };

        // Item yang membutuhkan jumlah
        const itemsNeedQuantity = [
            'Bed Sheet', 'Duvet Cover', 'Pillow Case', 'Bath Towel', 'Hand Towel', 'Face Towel', 'Pool Towel', 'Blanket',
            'Shirt', 'Trouser', 'Jas', 'Skirt', 'Cook Jacket', 'Apron Kitchen', 'T-shirt', 'Neck Tie', 'Safari Shirt',
            'Cuci Kering', 'Setrika Kiloan', 'Sepatu', 'Tas', 'Marquis', 'Prince', 'Duke', 'King'
        ];

        // Counter untuk pesanan
        let orderCounter = 1;

        // Fungsi untuk menambah field pesanan baru
        function addOrderField() {
            const container = document.getElementById('orders-container');
            const newOrder = document.createElement('div');
            newOrder.className = 'order-item mb-4';
            newOrder.innerHTML = `
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Pilih Layanan</label>
                        <select class="form-select" name="orders[${orderCounter}][layanan]" required onchange="updateItems(this)">
                            <option value="">-- Pilih --</option>
                            <option value="Linen">Linen</option>
                            <option value="Uniform">Uniform</option>
                            <option value="Satuan">Satuan</option>
                            <option value="Beddings">Beddings</option>
                            <option value="Other Items">Other Items</option>
                            <option value="Daily Kiloan">Daily Kiloan</option>
                            <option value="Tas & Sepatu">Tas & Sepatu</option>
                            <option value="Membership Packages">Membership Packages</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Pilih Item</label>
                        <select class="form-select item-select" name="orders[${orderCounter}][item]" required>
                            <option value="">-- Pilih kategori dulu --</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3 quantity-group d-none">
                        <label class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="orders[${orderCounter}][quantity]" min="1" value="1">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Catatan (Opsional)</label>
                        <input type="text" class="form-control" name="orders[${orderCounter}][catatan]" placeholder="Contoh: Jangan pakai pewangi">
                    </div>
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeOrderField(this)">
                            <i class="fas fa-trash"></i> Hapus Pesanan
                        </button>
                    </div>
                </div>
            `;
            container.appendChild(newOrder);
            orderCounter++;
        }

        // Fungsi untuk menghapus field pesanan
        function removeOrderField(button) {
            if (document.querySelectorAll('.order-item').length > 1) {
                button.closest('.order-item').remove();
            } else {
                alert('Minimal harus ada satu pesanan');
            }
        }

        // Fungsi untuk update item berdasarkan kategori
        function updateItems(selectElement) {
            const category = selectElement.value.toLowerCase();
            const itemSelect = selectElement.closest('.row').querySelector('.item-select');
            const quantityGroup = selectElement.closest('.row').querySelector('.quantity-group');

            itemSelect.innerHTML = '<option value="">-- Pilih Item --</option>';
            quantityGroup.classList.add('d-none');

            if (category && itemOptions[category]) {
                itemOptions[category].forEach(item => {
                    const option = document.createElement('option');
                    option.value = item;
                    option.text = item;
                    itemSelect.appendChild(option);
                });
            }

            // Event listener ketika item berubah
            itemSelect.onchange = function() {
                const selectedItem = this.value;
                const showQty = itemsNeedQuantity.some(keyword => selectedItem.includes(keyword));
                if (showQty) {
                    quantityGroup.classList.remove('d-none');
                } else {
                    quantityGroup.classList.add('d-none');
                }
            };
        }

        // Form submission handler
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show success message
            const successAlert = document.getElementById('successAlert');
            successAlert.classList.remove('d-none');

            // Scroll to top to show success message
            window.scrollTo({ top: 0, behavior: 'smooth' });

            // Reset form after 2 seconds
            setTimeout(() => {
                this.reset();
                successAlert.classList.add('d-none');

                // Reset all order items except the first one
                const orderItems = document.querySelectorAll('.order-item');
                for (let i = 1; i < orderItems.length; i++) {
                    orderItems[i].remove();
                }

                // Reset counter
                orderCounter = 1;
            }, 2000);
        });

        // Add smooth scrolling to accordion items
        document.querySelectorAll('.accordion-button').forEach(button => {
            button.addEventListener('click', function() {
                setTimeout(() => {
                    this.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 350);
            });
        });
    </script>
</body>
</html>
