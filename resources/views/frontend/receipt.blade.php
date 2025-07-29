<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<style>
    body, html {
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .receipt-container {
        background: linear-gradient(135deg, #142753 0%, #130780 100%);
        min-height: 100vh;
        width: 100%;
        padding: 2rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .receipt-content {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        padding: 30px 40px;
        max-width: 600px;
        width: 100%;
    }


    .receipt-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        max-width: 600px;
        margin: 0 auto;
        position: relative;
    }

    .receipt-header {
        background: linear-gradient(135deg, #2F6EFF 0%, #0f0259 100%);
        color: white;
        padding: 2rem;
        text-align: center;
        position: relative;
    }

    .receipt-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
        background-size: 20px 20px;
    }

    .receipt-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
    }

    .receipt-subtitle {
        font-size: 1rem;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }

    .receipt-body {
        padding: 2rem;
    }

    .info-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        border-bottom: 1px solid #e5e7eb;
        transition: all 0.3s ease;
    }

    .info-item:hover {
        background: #f8fafc;
        margin: 0 -1rem;
        padding: 1rem 1rem;
        border-radius: 8px;
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-label {
        font-weight: 600;
        color: #374151;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .info-value {
        color: #1f2937;
        font-weight: 500;
        text-align: right;
        flex: 1;
        margin-left: 1rem;
    }

    .total-section {
        background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        padding: 1.5rem;
        margin: 1rem -2rem;
        border-radius: 12px;
        border: 2px dashed #d1d5db;
    }

    .total-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 1.25rem;
        font-weight: 700;
        color: #1f2937;
    }

    .total-price {
        background: linear-gradient(135deg, #10b981, #059669);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 1.5rem;
    }

    .note-section {
        background: #fef3c7;
        border: 1px solid #f59e0b;
        border-radius: 8px;
        padding: 1rem;
        margin: 1rem 0;
    }

    .note-label {
        font-weight: 600;
        color: #92400e;
        margin-bottom: 0.5rem;
    }

    .note-text {
        color: #78350f;
        font-style: italic;
    }

    .thank-you {
        text-align: center;
        padding: 2rem;
        background: #f9fafb;
        margin: 1rem -2rem -2rem -2rem;
        border-top: 1px solid #e5e7eb;
    }

    .thank-you-text {
        font-size: 1.1rem;
        color: #374151;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }

    .action-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn-custom {
        padding: 0.75rem 1.5rem;
        border-radius: 25px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-primary-custom {
        background: linear-gradient(135deg, #2F6EFF 0%, #764ba2 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        color: white;
        text-decoration: none;
    }

    .btn-outline-custom {
        background: white;
        color: #2F6EFF;
        border: 2px solid #2F6EFF;
    }

    .btn-outline-custom:hover {
        background: #2F6EFF;
        color: white;
        transform: translateY(-2px);
        text-decoration: none;
    }

    .receipt-number {
        background: rgba(255, 255, 255, 0.2);
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        backdrop-filter: blur(10px);
    }

    .icon {
        width: 20px;
        height: 20px;
        opacity: 0.7;
    }

    @media (max-width: 576px) {
        .receipt-container {
        padding: 1rem;
        }

        .receipt-body {
        padding: 1.5rem;
        }

        .info-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 0.5rem;
        }

        .info-value {
        margin-left: 0;
        text-align: left;
        }

        .action-buttons {
        flex-direction: column;
        }

        .btn-custom {
        width: 100%;
        justify-content: center;
        }
    }
    /* RESPONSIVE IMPROVEMENTS */
:root {
    --font-lg: clamp(1.5rem, 2vw, 2rem);
    --font-md: clamp(1rem, 1.5vw, 1.25rem);
    --font-sm: clamp(0.875rem, 1vw, 1rem);
}

.receipt-title {
    font-size: var(--font-lg);
}

.receipt-subtitle,
.receipt-number,
.info-label,
.info-value,
.total-item,
.note-text,
.note-label,
.thank-you-text {
    font-size: var(--font-sm);
}

@media (max-width: 768px) {
    .receipt-content {
        padding: 1.5rem 1rem;
    }

    .receipt-body {
        padding: 1.25rem;
    }

    .receipt-header {
        padding: 1.5rem;
    }

    .info-item {
        flex-direction: column;
        align-items: flex-start;
    }

    .info-value {
        margin-left: 0;
        text-align: left;
        width: 100%;
    }

    .total-section {
        margin: 1rem 0;
    }

    .btn-custom {
        padding: 0.65rem 1rem;
        font-size: var(--font-sm);
    }

    .btn-custom i {
        font-size: 0.9rem;
    }

    .receipt-number {
        font-size: 0.8rem;
    }
    }
.action-buttons {
    padding: 0 1rem;
}

</style>

<div class="receipt-container">

    <div class="receipt-card">
      <!-- Header -->
      <div class="receipt-header">
        <div class="receipt-title">
          <i class="fas fa-crown" style="color: #F16722; margin-right: 0.5rem;"></i>
          Royal Laundress
        </div>
        <div class="receipt-subtitle">Struk Pemesanan Laundry</div>
        <div class="receipt-number mt-3">
          <i class="fas fa-receipt" style="margin-right: 0.5rem;"></i>
          #{{ str_pad($order->id ?? 1, 6, '0', STR_PAD_LEFT) }}
        </div>
      </div>

      <!-- Body -->
      <div class="receipt-body">
        <!-- Customer Information -->
        <div class="info-item">
          <div class="info-label">
            <i class="fas fa-user icon"></i>
            Nama
          </div>
          <div class="info-value">{{ $order->nama }}</div>
        </div>

        <div class="info-item">
          <div class="info-label">
            <i class="fas fa-phone icon"></i>
            No HP
          </div>
          <div class="info-value">{{ $order->telepon }}</div>
        </div>

        <div class="info-item">
          <div class="info-label">
            <i class="fas fa-map-marker-alt icon"></i>
            Alamat
          </div>
          <div class="info-value">{{ $order->alamat }}</div>
        </div>

        <!-- Service Information -->
        <div class="info-item">
          <div class="info-label">
            <i class="fas fa-cog icon"></i>
            Layanan
          </div>
          <div class="info-value">
            <span class="badge" style="background: linear-gradient(135deg, #2F6EFF, #0c5386); color: white; padding: 0.25rem 0.75rem; border-radius: 12px;">
              {{ ucfirst($order->layanan ?? $order->kategori) }}
            </span>
          </div>
        </div>

        <div class="info-item">
          <div class="info-label">
            <i class="fas fa-box icon"></i>
            Item
          </div>
          <div class="info-value">{{ $order->item }}</div>
        </div>

        @php
          preg_match('/Rp\s?([\d.,]+)/', $order->item, $match);
          $harga = isset($match[1]) ? (int) str_replace(['.', ','], '', $match[1]) : 0;
          $qty = $order->quantity ?? $order->jumlah ?? 1;
          $total = $harga * $qty;
        @endphp

        @if ($qty)
        <div class="info-item">
          <div class="info-label">
            <i class="fas fa-hashtag icon"></i>
            Jumlah
          </div>
          <div class="info-value">{{ $qty }}</div>
        </div>
        @endif

        <!-- Total Section -->
        <div class="total-section">
          <div class="total-item">
            <span>
              <i class="fas fa-calculator" style="margin-right: 0.5rem; color: #059669;"></i>
              Total Harga
            </span>
            <span class="total-price">Rp {{ number_format($total, 0, ',', '.') }}</span>
          </div>
        </div>

        <!-- Notes Section -->
        @if ($order->catatan)
        <div class="note-section">
          <div class="note-label">
            <i class="fas fa-sticky-note" style="margin-right: 0.5rem;"></i>
            Catatan Khusus
          </div>
          <div class="note-text">{{ $order->catatan }}</div>
        </div>
        @endif
      </div>

      <!-- Thank You Section -->
      <div class="thank-you">
        <div class="thank-you-text">
          <i class="fas fa-heart" style="color: #ef4444; margin-right: 0.5rem;"></i>
          Terima kasih telah menggunakan layanan kami!
        </div>
        <div class="action-buttons">
          <a href="{{ url('/') }}" class="btn-custom btn-primary-custom">
            <i class="fas fa-home"></i>
            Kembali ke Beranda
          </a>
          <button onclick="window.print()" class="btn-custom btn-outline-custom">
            <i class="fas fa-print"></i>
            Cetak Struk
          </button>
        </div>
      </div>
    </div>
  
</div>

<!-- Print Styles -->
<style media="print">
  .receipt-container {
    background: white !important;
    padding: 0 !important;
    min-height: auto !important;
  }

  .receipt-card {
    box-shadow: none !important;
    border: 1px solid #ddd !important;
    border-radius: 0 !important;
    max-width: 100% !important;
  }

  .action-buttons {
    display: none !important;
  }

  .thank-you {
    padding: 1rem !important;
    margin: 0 !important;
  }
</style>

<!-- FontAwesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</body>
</html>
