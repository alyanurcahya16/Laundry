<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Porto;

class PortoController extends Controller
{
    public function index()
    {
        $portos = Porto::latest()->get();
        return view('admin.porto.index', compact('portos'));
    }

    public function create()
    {
        return view('admin.porto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
            'lokasi' => 'required',
            'nama' => 'required',
            'link' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('porto', 'public');
        }

        Porto::create($data);
        return redirect()->route('porto.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Porto $porto)
    {
        return view('admin.porto.edit', compact('porto'));
    }

    public function update(Request $request, Porto $porto)
    {
        $request->validate([
            'type' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
            'lokasi' => 'required',
            'nama' => 'required',
            'link' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('porto', 'public');
        }

        $porto->update($data);
        return redirect()->route('porto.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Porto $porto)
    {
        $porto->delete();
        return redirect()->route('porto.index')->with('success', 'Data berhasil dihapus.');
    }
}
