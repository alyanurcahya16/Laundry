@extends('layouts.app')

@section('title', 'Data About Us')
@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Tentang Kami</h4>
            <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Gambar 1</th>
                        <th>Gambar 2</th>
                        <th>Judul</th>
                        <th>Experience</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($about as $item)
                    <tr>
                        <td><img src="{{ asset('storage/' . $item->gambar1) }}" width="80"></td>
                        <td><img src="{{ asset('storage/' . $item->gambar2) }}" width="80"></td>
                        <td>{{ $item->tittle }}</td>
                        <td>{{ $item->experience }}</td>
                        <td>
                            <a href="{{ route('about.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('about.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
