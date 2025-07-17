@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Edit Appointment</h3>
    <form action="{{ route('appointments.update', $appointment->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $appointment->nama }}" required>
        </div>
        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="hp" class="form-control" value="{{ $appointment->hp }}" required>
        </div>
        <div class="mb-3">
            <label>Service</label>
            <input type="text" name="service" class="form-control" value="{{ $appointment->service }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
