<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terima Kasih</title>
  <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/assets/images/fav-icon/icon.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
    }

    .thankyou-page {
        min-height: 100vh;
        width: 100vw;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        padding: 3rem 1rem;
    }

    .card {
        animation: slideInUp 0.6s ease-out;
        border-radius: 1rem;
    }

    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn:hover {
        transform: translateY(-2px);
        transition: all 0.3s ease;
    }

    .border-start:hover {
        transform: translateX(5px);
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 2rem !important;
        }

        .fs-5 {
            font-size: 1.1rem !important;
        }
    }
  </style>
</head>
<body>

<div class="thankyou-page">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-xl-6">
        <div class="card shadow-lg border-0">
          <!-- Header -->
          <div class="card-header bg-success text-white text-center py-4"
               style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;">
            <div class="mb-3">
              <i class="fas fa-check-circle fa-4x opacity-75"></i>
            </div>
            <h2 class="mb-0 fw-bold">Registrasi Berhasil!</h2>
          </div>

          <!-- Body -->
          <div class="card-body p-5 text-center">
            <p class="fs-5 text-muted mb-4 lh-base">
              Terima kasih telah mendaftarkan hotel Anda ke dalam layanan laundry kami.
              Tim kami akan segera menghubungi Anda melalui kontak yang telah Anda isi.
            </p>

            <div class="mb-5">
              <h5 class="text-dark mb-4 fw-semibold">
                <i class="fas fa-clipboard-list text-primary me-2"></i>
                Proses Selanjutnya:
              </h5>

              <div class="row g-3">
                <!-- Step 1 -->
                <div class="col-12">
                  <div class="d-flex align-items-start p-3 bg-light rounded-3 border-start border-primary border-4">
                    <div class="flex-shrink-0 me-3">
                      <span class="badge bg-primary rounded-circle p-2">
                        <i class="fas fa-search fa-sm"></i>
                      </span>
                    </div>
                    <div class="flex-grow-1 text-start">
                      <h6 class="mb-1 fw-semibold">Verifikasi Data</h6>
                      <p class="mb-0 text-muted small">Tim verifikasi akan mengecek data Anda</p>
                    </div>
                  </div>
                </div>

                <!-- Step 2 -->
                <div class="col-12">
                  <div class="d-flex align-items-start p-3 bg-light rounded-3 border-start border-success border-4">
                    <div class="flex-shrink-0 me-3">
                      <span class="badge bg-success rounded-circle p-2">
                        <i class="fas fa-phone fa-sm"></i>
                      </span>
                    </div>
                    <div class="flex-grow-1 text-start">
                      <h6 class="mb-1 fw-semibold">Kontak Konfirmasi</h6>
                      <p class="mb-0 text-muted small">Jika valid, kami akan menghubungi melalui WhatsApp atau email</p>
                    </div>
                  </div>
                </div>

                <!-- Step 3 -->
                <div class="col-12">
                  <div class="d-flex align-items-start p-3 bg-light rounded-3 border-start border-warning border-4">
                    <div class="flex-shrink-0 me-3">
                      <span class="badge bg-warning rounded-circle p-2">
                        <i class="fas fa-handshake fa-sm"></i>
                      </span>
                    </div>
                    <div class="flex-grow-1 text-start">
                      <h6 class="mb-1 fw-semibold">Perjanjian Kerja Sama</h6>
                      <p class="mb-0 text-muted small">Selanjutnya Anda akan diarahkan ke perjanjian kerja sama</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Info -->
            <div class="alert alert-info border-0 rounded-3 mb-4" style="background: rgba(13, 202, 240, 0.1);">
              <div class="d-flex align-items-center">
                <i class="fas fa-info-circle text-info me-2"></i>
                <small class="mb-0">
                  <strong>Catatan:</strong> Proses verifikasi biasanya memakan waktu 1-2 hari kerja.
                </small>
              </div>
            </div>

            <!-- Button -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
              <a href="/" class="btn btn-primary btn-lg px-4 rounded-pill shadow-sm">
                <i class="fas fa-home me-2"></i>
                Kembali ke Beranda
              </a>
            </div>
          </div>

          <!-- Footer -->
          <div class="card-footer bg-light border-0 text-center py-3">
            <small class="text-muted">
              <i class="fas fa-shield-alt text-success me-1"></i>
              Data Anda aman dan terlindungi
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
