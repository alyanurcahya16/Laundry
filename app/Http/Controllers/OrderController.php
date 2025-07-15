<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // FRONTEND – Tampilkan form pemesanan
    public function create()
    {
        return view('frontend.order.create');
    }

    // FRONTEND – Simpan data dari user
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'telepon' => 'required|string',
            'alamat' => 'required|string',
            'layanan' => 'required|string',
            'catatan' => 'nullable|string',
        ]);

        Order::create($data);

        return redirect()->back()->with('success', 'Pesanan berhasil dikirim! Kami akan segera menghubungi Anda.');
    }

    // BACKEND – Admin lihat semua pesanan
    public function index()
    {
        $orders = Order::latest()->get();
        return view('backend.order.index', compact('orders'));
    }

    // BACKEND – Detail 1 pesanan (opsional)
    public function show(Order $order)
    {
        return view('backend.order.show', compact('order'));
    }
}
