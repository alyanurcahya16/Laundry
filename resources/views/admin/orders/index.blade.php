@extends('layouts.backend.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Daftar Pesanan Laundry</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Layanan</th>
                <th>Item</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                @php
                    preg_match('/Rp\s?([\d.,]+)/', $order->item, $match);
                    $harga = isset($match[1]) ? (int) str_replace(['.', ','], '', $match[1]) : 0;
                    $qty = $order->quantity ?? 1;
                    $total = $harga * $qty;
                @endphp
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $orders->nama }}</td>
                    <td>{{ $orders->telepon }}</td>
                    <td>{{ $orders->alamat }}</td>
                    <td>{{ ucfirst($order->layanan) }}</td>
                    <td>{{ $order->item }}</td>
                    <td>{{ $qty }}</td>
                    <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                    <td>{{ $order->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $orders->links() }}
    </div>
</div>
@endsection
