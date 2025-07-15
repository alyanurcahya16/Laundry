@extends('layouts.app')


@section('title', 'Edit Setting')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Edit Data Setting</h4></div>
        <div class="card-body">
            <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>Logo (upload baru jika ingin ganti)</label><br>
                    @if ($setting->logo)
                        <img src="{{ asset('storage/' . $setting->logo) }}" width="100" class="mb-2"><br>
                    @endif
                    <input type="file" name="logo" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Company Name</label>
                    <input type="text" name="company_name" value="{{ $setting->company_name }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $setting->email }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Nomor</label>
                    <input type="text" name="nomor" value="{{ $setting->nomor }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control">{{ $setting->alamat }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Facebook</label>
                    <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Instagram</label>
                    <input type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>TikTok</label>
                    <input type="text" name="tiktok" value="{{ $setting->tiktok }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Company Description</label>
                    <textarea name="company_description" class="form-control">{{ $setting->company_description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('settings.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
