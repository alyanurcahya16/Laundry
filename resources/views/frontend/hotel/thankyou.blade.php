@extends('layouts.frontend')

@section('title', 'Terima Kasih')

@section('content')
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4 p-5 text-center">
        

        <h2 class="text-success mb-3">Registrasi Berhasil!</h2>

        <p class="fs-5 mb-4">
            Terima kasih telah mendaftarkan hotel Anda ke dalam layanan laundry kami.  
            Tim kami akan segera menghubungi Anda melalui kontak yang telah Anda isi.
        </p>

        <div class="mb-4">
            <p class="mb-1"><strong>Proses Selanjutnya:</strong></p>
            <ul class="list-unstyled">
                <li>✅ Tim verifikasi akan mengecek data Anda</li>
                <li>✅ Jika valid, kami akan menghubungi melalui WhatsApp atau email</li>
                <li>✅ Selanjutnya Anda akan diarahkan ke perjanjian kerja sama</li>
            </ul>
        </div>

        <a href="{{ url('/') }}" class="btn btn-primary px-4 mt-3">
            Kembali ke Beranda
        </a>
    </div>
</div>
@endsection
