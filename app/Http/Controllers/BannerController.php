<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'gambarbanner' => 'nullable|image',
            'gifbanner' => 'nullable|image',
            'tittle' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'linkgetrarted' => 'nullable|string',
        ]);

        if ($request->hasFile('gambarbanner')) {
            $data['gambarbanner'] = $request->file('gambarbanner')->store('banners', 'public');
        }
        if ($request->hasFile('gifbanner')) {
            $data['gifbanner'] = $request->file('gifbanner')->store('banners', 'public');
        }

        Banner::create($data);
        return redirect()->route('banners.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $data = $request->validate([
            'gambarbanner' => 'nullable|image',
            'gifbanner' => 'nullable|image',
            'tittle' => 'nullable|string',
            'deskripsi' => 'nullable|string',
            'linkgetrarted' => 'nullable|string',
        ]);

        if ($request->hasFile('gambarbanner')) {
            $data['gambarbanner'] = $request->file('gambarbanner')->store('banners', 'public');
        }
        if ($request->hasFile('gifbanner')) {
            $data['gifbanner'] = $request->file('gifbanner')->store('banners', 'public');
        }

        $banner->update($data);
        return redirect()->route('banners.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Data berhasil dihapus');
    }
}
