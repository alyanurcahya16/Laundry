@extends('layouts.backend.app')

@section('content')

<div class="container mt-4">
    <h3>Data Sponsor</h3>
    <a href="{{ route('sponsor.create') }}" class="btn btn-primary mb-3">+ Tambah Sponsor</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sponsors as $item)
            <tr>
                <td><img src="{{ asset('storage/'.$item->gambar) }}" width="100"></td>
                <td>
                    <a href="{{ route('sponsor.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('sponsor.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus sponsor ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
