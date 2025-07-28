@extends('layouts.backend.app')

@section('title', 'Edit Banner')
@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Edit Data Banner</h4></div>
        <div class="card-body">
            <form action="{{ route('admin.banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Gambar Banner</label><br>
                    @if ($banner->gambarbanner)
                        <img src="{{ asset('storage/' . $banner->gambarbanner) }}" width="100" class="mb-2"><br>
                    @endif
                    <input type="file" name="gambarbanner" class="form-control">
                </div>

                <div class="mb-3">
                    <label>GIF Banner</label><br>
                    @if ($banner->gifbanner)
                        <img src="{{ asset('storage/' . $banner->gifbanner) }}" width="100" class="mb-2"><br>
                    @endif
                    <input type="file" name="gifbanner" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Judul (Tittle)</label>
                    <input type="text" name="tittle" value="{{ $banner->tittle }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ $banner->deskripsi }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Link Get Started</label>
                    <input type="text" name="linkgetrarted" value="{{ $banner->linkgetrarted }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('banners.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
