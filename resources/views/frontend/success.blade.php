@extends('layouts.frontend')

@section('content')
<div class="container py-5 text-center">
  <h2>Pesanan Berhasil!</h2>
  <p>Terima kasih, {{ $order->nama }}. Pesanan kamu sudah kami terima.</p>

  <a href="{{ route('order.receipt', $order->id) }}" class="btn btn-success mt-3">
    <i class="bi bi-printer"></i> Lihat Struk
  </a>
</div>
@endsection
