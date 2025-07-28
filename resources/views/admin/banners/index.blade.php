@extends('layouts.backend.app')

@section('title', 'Data Banner')
@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Banner</h4>
            <a href="{{ route('admin.banners.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Banner</th>
                        <th>GIF</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                    <tr>
                        <td><img src="{{ asset('storage/' . $banner->gambarbanner) }}" width="80"></td>
                        <td><img src="{{ asset('storage/' . $banner->gifbanner) }}" width="80"></td>
                        <td>{{ $banner->tittle }}</td>
                        <td>{{ $banner->deskripsi }}</td>
                        <td>{{ $banner->linkgetrarted }}</td>
                        <td>
                            <a href="{{ route('admin.banners.edit', $banner->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST" style="display:inline;">
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
