<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'gambar1' => 'nullable|image',
            'gambar2' => 'nullable|image',
            'video_url' => 'nullable|string',
            'tittle' => 'nullable|string',
            'description' => 'nullable|string',
            'link' => 'nullable|string',
            'experience' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar1')) {
            $data['gambar1'] = $request->file('gambar1')->store('aboutus', 'public');
        }
        if ($request->hasFile('gambar2')) {
            $data['gambar2'] = $request->file('gambar2')->store('aboutus', 'public');
        }

        AboutUs::create($data);
        return redirect()->route('about.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(AboutUs $about)
{
    return view('admin.about.edit', compact('about'));
}


    public function update(Request $request, AboutUs $about)
    {
        $data = $request->validate([
            'gambar1' => 'nullable|image',
            'gambar2' => 'nullable|image',
            'video_url' => 'nullable|string',
            'tittle' => 'nullable|string',
            'description' => 'nullable|string',
            'link' => 'nullable|string',
            'experience' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar1')) {
            $data['gambar1'] = $request->file('gambar1')->store('aboutus', 'public');
        }
        if ($request->hasFile('gambar2')) {
            $data['gambar2'] = $request->file('gambar2')->store('aboutus', 'public');
        }

        $about->update($data);
        return redirect()->route('about.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(AboutUs $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('success', 'Data berhasil dihapus');
    }
}
