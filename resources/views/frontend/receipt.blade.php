@extends('layouts.frontend')

@section('content')
<div class="container py-5">
  <div class="card p-4 shadow-sm">
    <h4 class="text-center">Struk Pemesanan Laundry</h4>
    <hr>
    <p><strong>Nama:</strong> {{ $order->nama }}</p>
    <p><strong>No HP:</strong> {{ $order->telepon }}</p>
    <p><strong>Alamat:</strong> {{ $order->alamat }}</p>
    <p><strong>Layanan:</strong> {{ ucfirst($order->layanan) }}</p>
    <p><strong>Item:</strong> {{ $order->item }}</p>
    
    @php
      preg_match('/Rp\s?([\d.,]+)/', $order->item, $match);
      $harga = isset($match[1]) ? (int) str_replace(['.', ','], '', $match[1]) : 0;
      $qty = $order->quantity ?? 1;
      $total = $harga * $qty;
    @endphp

    @if ($order->quantity)
      <p><strong>Jumlah:</strong> {{ $qty }}</p>
    @endif

    <p><strong>Total Harga:</strong> Rp {{ number_format($total, 0, ',', '.') }}</p>

    @if ($order->catatan)
      <p><strong>Catatan:</strong> {{ $order->catatan }}</p>
    @endif

    <hr>
    <p class="text-center mb-0">Terima kasih telah menggunakan layanan kami!</p>
    <div class="text-center mt-4">
  <a href="{{ url('/') }}" class="btn btn-primary">
    ⬅️ Kembali ke Beranda
  </a>
</div>
  </div>
</div>
@endsection
