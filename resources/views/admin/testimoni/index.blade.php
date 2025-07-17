@extends('layouts.backend.app')
@section('content')

<div class="container mt-4">
    <h3>Data Testimoni</h3>
    <a href="{{ route('testimoni.create') }}" class="btn btn-primary mb-3">+ Tambah Testimoni</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Rate</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonis as $item)
            <tr>
                <td><img src="{{ asset('storage/'.$item->gambar) }}" width="80"></td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->rate }} / 5</td>
                <td>
                    <a href="{{ route('testimoni.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('testimoni.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
