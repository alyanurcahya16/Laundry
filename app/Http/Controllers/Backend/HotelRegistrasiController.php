<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\RegistrasiHotel;
use Illuminate\Http\Request;

class HotelRegistrasiController extends Controller
{
    public function index()
    {
        $data = RegistrasiHotel::latest()->get();
        return view('backend.registrasi_hotel.index', compact('data'));
    }

    public function destroy($id)
{
    $hotel = RegistrasiHotel::findOrFail($id);
    $hotel->delete();

    return redirect()->back()->with('success', 'Data registrasi hotel berhasil dihapus.');
}
public function edit($id)
{
    $registrasi = Registrasi::findOrFail($id);
    return view('admin.registrasi.edit', compact('registrasi'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama_perusahaan' => 'required',
        'nama_hotel' => 'required',
        'nama_pic' => 'required',
        'jabatan_pic' => 'required',
        'nomor_pic' => 'required',
        'nik_pic' => 'required',
        'alamat_hotel' => 'required',
    ]);

    $registrasi = Registrasi::findOrFail($id);
    $registrasi->update($validated);

    return redirect()->route('admin.registrasi_hotel.index')
        ->with('success', 'Data registrasi berhasil diperbarui');
}
}
