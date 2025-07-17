@extends('layouts.backend.app')

@section('content')
<div class="container-xxl">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Data Pemesanan Laundry</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Kategori</th>
                        <th>Item</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Catatan</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    @php
                        preg_match('/Rp\s?([\d.,]+)/', $order->item, $match);
                        $harga = isset($match[1]) ? (int) str_replace(['.', ','], '', $match[1]) : 0;
                        $qty = $order->quantity ?? 1;
                        $total = $harga * $qty;
                    @endphp
                    <tr>
                        <td>{{ $order->nama }}</td>
                        <td>{{ $order->telepon }}</td>
                        <td>{{ $order->alamat }}</td>
                        <td>{{ ucfirst($order->layanan) }}</td>
                        <td>{{ $order->item }}</td>
                        <td>{{ $order->quantity ?? '-' }}</td>
                        <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                        <td>{{ $order->catatan ?? '-' }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>
        <span class="badge bg-{{ 
            $order->status == 'Selesai' ? 'success' :
            ($order->status == 'Diantar' ? 'info' :
            ($order->status == 'Diproses' ? 'warning' : 'secondary')) }}">
            {{ $order->status }}
        </span>
    </td>
    <td>
        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                <option disabled selected>Ubah status</option>
                <option value="Diproses">Diproses</option>
                <option value="Diantar">Dalam Pengantaran</option>
                <option value="Selesai">Selesai</option>
            </select>
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
