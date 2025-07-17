@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Tambah Working Process</h3>
    <form action="{{ route('working-process.store') }}" method="POST">
        @csrf
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
        <button class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
