@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h3>Data Porto</h3>
    <a href="{{ route('porto.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Type</th>
                <th>Gambar</th>
                <th>Lokasi</th>
                <th>Nama</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($portos as $item)
            <tr>
                <td>{{ $item->type }}</td>
                <td><img src="{{ asset('storage/'.$item->gambar) }}" width="80"></td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->nama }}</td>
                <td><a href="{{ $item->link }}" target="_blank">Lihat</a></td>
                <td>
                    <a href="{{ route('porto.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('porto.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
