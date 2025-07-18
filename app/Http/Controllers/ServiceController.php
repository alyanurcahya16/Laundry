<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

public function store(Request $request)
{
    $data = $request->validate([
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        'icon' => 'required|string',
        'tittle' => 'required|string',
        'description' => 'required|string',
        'link' => 'required|string',
    ]);

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('service', 'public');
    }


    Service::create($data);
    return redirect()->route('services.index')->with('success', 'Data berhasil ditambahkan.');
}




    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'icon' => 'required',
            'tittle' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('service', 'public');
        }

        $service->update($data);
        return redirect()->route('services.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Data berhasil dihapus.');
    }
}
