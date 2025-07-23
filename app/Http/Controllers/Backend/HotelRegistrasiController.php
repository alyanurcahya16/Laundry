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
}
