@extends('layouts.backend.app')

@section('content')
<div class="container-xxl py-3">
    <h4>Hasil pencarian untuk: "{{ $keyword }}"</h4>

    <hr>

    <h5>Data Pesanan</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th><th>No HP</th><th>Item</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->nama }}</td>
                    <td>{{ $order->telepon }}</td>
                    <td>{{ $order->item }}</td>
                </tr>
            @empty
                <tr><td colspan="3">Tidak ada hasil.</td></tr>
            @endforelse
        </tbody>
    </table>

    <h5>Data Settings</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Perusahaan</th><th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($settings as $setting)
                <tr>
                    <td>{{ $setting->company_name }}</td>
                    <td>{{ $setting->email }}</td>
                </tr>
            @empty
                <tr><td colspan="2">Tidak ada hasil.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
