@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Edit Testimoni</h3>
    <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $testimoni->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $testimoni->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Rate</label>
            <input type="number" name="rate" min="1" max="5" value="{{ $testimoni->rate }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar Lama</label><br>
            <img src="{{ asset('storage/'.$testimoni->gambar) }}" width="100">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
