@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Tambah Porto</h3>
    <form action="{{ route('porto.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Type</label>
            <input type="text" name="type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Link</label>
            <input type="text" name="link" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
