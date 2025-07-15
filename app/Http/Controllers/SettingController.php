<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view('admin.settings.index', compact('settings'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'nomor' => 'nullable|string',
            'alamat' => 'nullable|string',
            'email' => 'nullable|email',
            'company_name' => 'nullable|string',
            'company_description' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }

        Setting::create($data);
        return redirect()->route('settings.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'tiktok' => 'nullable|string',
            'nomor' => 'nullable|string',
            'alamat' => 'nullable|string',
            'email' => 'nullable|email',
            'company_name' => 'nullable|string',
            'company_description' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }

        $setting->update($data);
        return redirect()->route('settings.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('settings.index')->with('success', 'Data berhasil dihapus');
    }
}
