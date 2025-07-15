@extends('layouts.app')

@section('title', 'Edit About Us')
@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Edit Data About Us</h4></div>
        <div class="card-body">
            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Gambar 1</label><br>
                    @if ($about->gambar1)
                        <img src="{{ asset('storage/' . $about->gambar1) }}" width="100" class="mb-2"><br>
                    @endif
                    <input type="file" name="gambar1" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Gambar 2</label><br>
                    @if ($about->gambar2)
                        <img src="{{ asset('storage/' . $about->gambar2) }}" width="100" class="mb-2"><br>
                    @endif
                    <input type="file" name="gambar2" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Video URL</label>
                    <input type="text" name="video_url" value="{{ $about->video_url }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="tittle" value="{{ $about->tittle }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="description" class="form-control" rows="4">{{ $about->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Link</label>
                    <input type="text" name="link" value="{{ $about->link }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Pengalaman</label>
                    <input type="text" name="experience" value="{{ $about->experience }}" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('about.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
