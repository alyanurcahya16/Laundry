<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // 👉 Menampilkan data pesanan di halaman admin
    public function index()
    {
        $pesanans = Pesanan::latest()->get();
        return view('backend.pesanan.index', compact('pesanans'));
    }

    // 👉 Menampilkan form ke user
    public function create()
    {
        return view('frontend.pesanan.form'); // <-- ini yang tadi error
    }

    // 👉 Menyimpan data pesanan dari user (frontend)
    public function store(Request $request)
    {
        logger('STORE DIPANGGIL'); 
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string',
            'item' => 'required|string',
            'jumlah' => 'required|integer|min:1',
            'catatan' => 'nullable|string',
            'jumlah_kg' => 'nullable|numeric|min:1',

        ]);

        Pesanan::create($validated);

        return redirect()->route('pesanan.success')->with('success', 'Pesanan kamu berhasil dikirim!');

    }
}
