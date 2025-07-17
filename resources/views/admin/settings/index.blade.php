@extends('layouts.backend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Settings</h4>
            <a href="{{ route('settings.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Nomor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($settings as $setting)
                    <tr>
                        <td><img src="{{ asset('storage/' . $setting->logo) }}" width="80"></td>
                        <td>{{ $setting->company_name }}</td>
                        <td>{{ $setting->email }}</td>
                        <td>{{ $setting->nomor }}</td>
                        <td>
                            <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('settings.destroy', $setting->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
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
