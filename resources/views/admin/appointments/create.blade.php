@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h3>Tambah Appointment</h3>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="hp" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Service</label>
            <input type="text" name="service" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
