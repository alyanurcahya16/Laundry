<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{   
    
    public function index()
    {
        return view('frontend.testimoni.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'description' => 'required|string',
            'rate' => 'required|numeric|min:1|max:5',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('testimoni', 'public');
        }

        Testimoni::create([
            'nama' => $request->nama,
            'description' => $request->description,
            'rate' => $request->rate,
            'gambar' => $gambar,
        ]);

        return redirect()->route('frontend.testimoni.thanks');

    }
    public function thanks()
{
    return view('frontend.testimoni.thanks');
}

}
