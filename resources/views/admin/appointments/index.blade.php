@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Data Appointment</h3>
    <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>HP</th>
                <th>Service</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->service }}</td>
                <td>
                    <a href="{{ route('appointments.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('appointments.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
