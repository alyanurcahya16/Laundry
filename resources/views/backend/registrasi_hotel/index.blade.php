@extends('layouts.backend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header"><h4>Data Registrasi Hotel</h4></div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Nama Hotel</th>
                        <th>Nama PIC</th>
                        <th>Nomor PIC</th>
                        <th>NIK PIC</th>
                        <th>Alamat Hotel</th>
                        <th>Jabatan PIC</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->nama_perusahaan }}</td>
                        <td>{{ $item->nama_hotel }}</td>
                        <td>{{ $item->nama_pic }}</td>
                        <td>{{ $item->nomor_pic }}</td>
                        <td>{{ $item->nik_pic }}</td>
                        <td>{{ $item->alamat_hotel }}</td>
                        <td>{{ $item->jabatan_pic }}</td>
                        <td>
                            <form action="{{ route('admin.registrasi.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
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
