@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h3>Tambah Service</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="tittle" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Link</label>
            <input type="text" name="link" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
