@extends('layouts.app')

@section('title', 'Tambah Banner')
@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Tambah Data Banner</h4></div>
        <div class="card-body">
            <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Gambar Banner</label>
                    <input type="file" name="gambarbanner" class="form-control">
                </div>

                <div class="mb-3">
                    <label>GIF Banner</label>
                    <input type="file" name="gifbanner" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Judul (Tittle)</label>
                    <input type="text" name="tittle" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label>Link Get Started</label>
                    <input type="text" name="linkgetrarted" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('banners.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
