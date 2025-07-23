@extends('layouts.frontend')

@section('content')
<div class="container py-4">
    <h4>Form Registrasi Hotel</h4>
    <form action="{{ route('hotel.form.submit') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label>Nama Perusahaan</label>
            <input type="text" name="nama_perusahaan" class="form-control">
        </div>
        <div class="mb-2">
            <label>Nama Hotel</label>
            <input type="text" name="nama_hotel" class="form-control">
        </div>
        <div class="mb-2">
            <label>Nama PIC</label>
            <input type="text" name="nama_pic" class="form-control">
        </div>
        <div class="mb-2">
            <label>Nomor PIC</label>
            <input type="text" name="nomor_pic" class="form-control">
        </div>
        <div class="mb-2">
            <label>NIK PIC</label>
            <input type="text" name="nik_pic" class="form-control">
        </div>
        <div class="mb-2">
            <label>Alamat Hotel</label>
            <textarea name="alamat_hotel" class="form-control"></textarea>
        </div>
        <div class="mb-2">
            <label>Jabatan PIC</label>
            <input type="text" name="jabatan_pic" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection
