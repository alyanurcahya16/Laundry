@extends('layouts.app')

@section('title', 'Tambah About Us')
@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Tambah Data About Us</h4></div>
        <div class="card-body">
            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>Gambar 1</label>
                    <input type="file" name="gambar1" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Gambar 2</label>
                    <input type="file" name="gambar2" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Video URL (YouTube)</label>
                    <input type="text" name="video_url" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="tittle" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label>Link (Button)</label>
                    <input type="text" name="link" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Pengalaman (Contoh: 5 Tahun)</label>
                    <input type="text" name="experience" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('about.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
