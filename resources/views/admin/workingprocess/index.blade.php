@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Data Working Process</h3>
    <a href="{{ route('workingprocess.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Icon</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($workingprocesses as $item)
            <tr>
                <td>{{ $item->icon }}</td>
                <td>{{ $item->tittle }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <a href="{{ route('working-process.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('working-process.destroy', $item->id) }}" method="POST" style="display:inline;">
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
