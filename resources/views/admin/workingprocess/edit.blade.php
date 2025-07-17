@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Edit Working Process</h3>
    <form action="{{ route('working-process.update', $working_process->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Icon</label>
            <input type="text" name="icon" class="form-control" value="{{ $working_process->icon }}" required>
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="tittle" class="form-control" value="{{ $working_process->tittle }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control" required>{{ $working_process->description }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
