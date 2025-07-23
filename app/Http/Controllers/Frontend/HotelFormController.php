<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\RegistrasiHotel;
use Illuminate\Http\Request;


class HotelFormController extends Controller
{
    public function create()
    {
        return view('frontend.hotel_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'nama_hotel' => 'required',
            'nama_pic' => 'required',
            'nomor_pic' => 'required',
            'nik_pic' => 'required',
            'alamat_hotel' => 'required',
            'jabatan_pic' => 'required',
        ]);

        RegistrasiHotel::create($request->all());

        return redirect()->route('hotel.thankyou');
    }

    
    
}
