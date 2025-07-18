<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $data = Testimoni::latest()->get();
        return view('admin.testimoni.index', compact('data'));
    }

    public function create()
    {
        return view('admin.testimoni.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'description' => 'required',
        'rate' => 'required|integer|min:1|max:5',
        'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only(['gambar', 'nama', 'description', 'rate']);

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('testimoni', 'public');
    }

    Testimoni::create($data);
    return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan.');
}


    public function edit(Testimoni $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
            'nama' => 'required',
            'description' => 'required',
            'rate' => 'required|integer|min:1|max:5',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('testimoni', 'public');
        }

        $testimoni->update($data);
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diupdate.');
    }

    public function destroy(Testimoni $testimoni)
    {
        $testimoni->delete();
        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }
}
