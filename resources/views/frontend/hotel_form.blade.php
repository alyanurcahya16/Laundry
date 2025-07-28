<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Hotel</title>
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/assets/images/fav-icon/icon.png') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            max-width: 700px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 20px;
            box-shadow:
                0 25px 50px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb, #f5576c);
            background-size: 400% 400%;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h2 {
            color: #2d3748;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header p {
            color: #718096;
            font-size: 1.1rem;
            font-weight: 400;
        }

        .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
            display: block;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
        }

        .input-wrapper {
            position: relative;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            background: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
            color: #2d3748;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #667eea;
            box-shadow:
                0 0 0 3px rgba(102, 126, 234, 0.1),
                0 4px 12px rgba(102, 126, 234, 0.15);
            transform: translateY(-2px);
        }

        input[type="text"]:hover,
        textarea:hover {
            border-color: #cbd5e0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
            font-family: inherit;
        }

        .submit-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 18px 30px;
            border: none;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
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

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow:
                0 12px 25px rgba(102, 126, 234, 0.3),
                0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .submit-btn:active {
            transform: translateY(-1px);
        }

        /* Icon styling */
        .form-group::before {
            content: '';
            position: absolute;
            right: 16px;
            top: 50px;
            width: 20px;
            height: 20px;
            background-size: contain;
            opacity: 0.3;
            pointer-events: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .form-container {
                padding: 30px 25px;
                margin: 10px;
            }

            .header h2 {
                font-size: 1.8rem;
            }

            input[type="text"],
            textarea {
                padding: 14px 16px;
                font-size: 16px;
            }

            .submit-btn {
                padding: 16px 24px;
                font-size: 16px;
            }
        }

        /* Loading state */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        .loading .submit-btn {
            background: #a0aec0;
            cursor: not-allowed;
        }

        /* Success feedback */
        .success-message {
            background: linear-gradient(135deg, #48bb78, #38a169);
            color: white;
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 600;
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="header">
            <h2>Form Registrasi Hotel</h2>
            <p>Silakan lengkapi data hotel Anda dengan benar</p>
        </div>

        <div class="success-message" id="successMessage">
            Data berhasil dikirim! Terima kasih atas registrasi Anda.
        </div>

            <form action="{{ route('hotel.form.submit') }}" method="POST" id="hotelForm">
            @csrf
            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <div class="input-wrapper">
                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" required>
                </div>
            </div>

            <div class="form-group">
                <label for="nama_hotel">Nama Hotel</label>
                <div class="input-wrapper">
                    <input type="text" id="nama_hotel" name="nama_hotel" required>
                </div>
            </div>

            <div class="form-group">
                <label for="nama_pic">Nama PIC (Person In Charge)</label>
                <div class="input-wrapper">
                    <input type="text" id="nama_pic" name="nama_pic" required>
                </div>
            </div>

            <div class="form-group">
                <label for="nomor_pic">Nomor Telepon PIC</label>
                <div class="input-wrapper">
                    <input type="text" id="nomor_pic" name="nomor_pic" required>
                </div>
            </div>

            <div class="form-group">
                <label for="nik_pic">NIK PIC</label>
                <div class="input-wrapper">
                    <input type="text" id="nik_pic" name="nik_pic" required>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat_hotel">Alamat Lengkap Hotel</label>
                <div class="input-wrapper">
                    <textarea id="alamat_hotel" name="alamat_hotel" rows="4" required placeholder="Masukkan alamat lengkap hotel termasuk kode pos"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="jabatan_pic">Jabatan PIC</label>
                <div class="input-wrapper">
                    <input type="text" id="jabatan_pic" name="jabatan_pic" required>
                </div>
            </div>

            <button type="submit" class="submit-btn">
        Kirim Registrasi
    </button>
        </form>
    </div>

    <script>
        // Form enhancement
        const form = document.getElementById('hotelForm');
        const submitBtn = document.querySelector('.submit-btn');
        const successMessage = document.getElementById('successMessage');

        // Add input validation feedback
        const inputs = document.querySelectorAll('input[required], textarea[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.style.borderColor = '#f56565';
                } else {
                    this.style.borderColor = '#48bb78';
                }
            });

            input.addEventListener('input', function() {
                if (this.style.borderColor === 'rgb(245, 101, 101)') {
                    this.style.borderColor = '#e2e8f0';
                }
            });
        });

       
    </script>
</body>
</html>
