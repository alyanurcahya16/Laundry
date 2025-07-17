@extends('layouts.backend.app')


@section('title', 'Tambah Setting')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Tambah Data Setting</h4></div>
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Nomor</label>
                    <input type="text" name="nomor" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label>Facebook</label>
                    <input type="text" name="facebook" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Instagram</label>
                    <input type="text" name="instagram" class="form-control">
                </div>
                <div class="mb-3">
                    <label>TikTok</label>
                    <input type="text" name="tiktok" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Company Description</label>
                    <textarea name="company_description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('settings.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
