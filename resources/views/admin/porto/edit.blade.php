@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Edit Porto</h3>
    <form action="{{ route('admin.porto.update', $porto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Type</label>
            <input type="text" name="type" value="{{ $porto->type }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gambar Lama</label><br>
            <img src="{{ asset('storage/'.$porto->gambar) }}" width="100">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" value="{{ $porto->lokasi }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $porto->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Link</label>
            <input type="text" name="link" value="{{ $porto->link }}" class="form-control" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
