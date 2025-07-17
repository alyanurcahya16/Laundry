@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Tambah Sponsor</h3>
    <form action="{{ route('sponsor.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
