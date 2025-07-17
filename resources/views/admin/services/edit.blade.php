@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Edit Service</h3>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Gambar Saat Ini</label><br>
            <img src="{{ asset('storage/'.$service->gambar) }}" width="100">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar (Opsional)</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" class="form-control" value="{{ $service->icon }}" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="tittle" class="form-control" value="{{ $service->tittle }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $service->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Link</label>
            <input type="text" name="link" class="form-control" value="{{ $service->link }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
