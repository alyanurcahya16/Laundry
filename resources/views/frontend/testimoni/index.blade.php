@extends('layouts.frontend')
@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Kirim Testimoni</h2>

    <form action="{{ route('frontend.testimoni.store') }}" method="POST" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="rate" class="form-label">Rating (1-5)</label>
            <input type="number" name="rate" id="rate" class="form-control" min="1" max="5" required>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Foto (Opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
    </form>
</div>
@endsection
