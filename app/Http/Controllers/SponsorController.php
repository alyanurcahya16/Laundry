<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sponsor;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::latest()->get();
        return view('admin.sponsor.index', compact('sponsors'));
    }

    public function create()
    {
        return view('admin.sponsor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('sponsor', 'public');
        }

        Sponsor::create($data);
        return redirect()->route('sponsor.index')->with('success', 'Sponsor berhasil ditambahkan.');
    }

    public function edit(Sponsor $sponsor)
    {
        return view('admin.sponsor.edit', compact('sponsor'));
    }

    public function update(Request $request, Sponsor $sponsor)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('sponsor', 'public');
        }

        $sponsor->update($data);
        return redirect()->route('sponsor.index')->with('success', 'Sponsor berhasil diupdate.');
    }

    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();
        return redirect()->route('sponsor.index')->with('success', 'Sponsor berhasil dihapus.');
    }
}
