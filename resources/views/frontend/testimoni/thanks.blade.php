@extends('layouts.frontend')

@section('content')
<div class="container py-5 text-center">
    <h2>Terima Kasih!</h2>
    <p>Testimoni kamu berhasil dikirim. Kami sangat menghargai feedback kamu 🙏</p>
    <a href="{{ url('/') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
</div>
@endsection
