@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h3>Edit Sponsor</h3>
    <form action="{{ route('sponsor.update', $sponsor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Gambar Lama</label><br>
            <img src="{{ asset('storage/'.$sponsor->gambar) }}" width="100">
        </div>
        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
