@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Data Services</h3>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Icon</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $item)
            <tr>
                <td><img src="{{ asset('storage/'.$item->gambar) }}" width="80"></td>
                <td>{{ $item->icon }}</td>
                <td>{{ $item->tittle }}</td>
                <td>{{ $item->description }}</td>
                <td><a href="{{ $item->link }}" target="_blank">Link</a></td>
                <td>
                    <a href="{{ route('admin.services.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.services.destroy', $item->id) }}" method="POST" style="display:inline;">
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
