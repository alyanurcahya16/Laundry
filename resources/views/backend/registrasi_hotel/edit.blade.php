@extends('layouts.backend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Edit Registrasi Hotel</h4></div>
        <div class="card-body">
            <form action="{{ route('admin.registrasi.update', $registrasi->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" 
                               value="{{ old('nama_perusahaan', $registrasi->nama_perusahaan) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nama_hotel" class="form-label">Nama Hotel</label>
                        <input type="text" class="form-control" id="nama_hotel" name="nama_hotel" 
                               value="{{ old('nama_hotel', $registrasi->nama_hotel) }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nama_pic" class="form-label">Nama PIC</label>
                        <input type="text" class="form-control" id="nama_pic" name="nama_pic" 
                               value="{{ old('nama_pic', $registrasi->nama_pic) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="jabatan_pic" class="form-label">Jabatan PIC</label>
                        <input type="text" class="form-control" id="jabatan_pic" name="jabatan_pic" 
                               value="{{ old('jabatan_pic', $registrasi->jabatan_pic) }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nomor_pic" class="form-label">Nomor PIC</label>
                        <input type="text" class="form-control" id="nomor_pic" name="nomor_pic" 
                               value="{{ old('nomor_pic', $registrasi->nomor_pic) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nik_pic" class="form-label">NIK PIC</label>
                        <input type="text" class="form-control" id="nik_pic" name="nik_pic" 
                               value="{{ old('nik_pic', $registrasi->nik_pic) }}" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="alamat_hotel" class="form-label">Alamat Hotel</label>
                    <textarea class="form-control" id="alamat_hotel" name="alamat_hotel" rows="3" required>{{ old('alamat_hotel', $registrasi->alamat_hotel) }}</textarea>
                </div>
                
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.registrasi.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection