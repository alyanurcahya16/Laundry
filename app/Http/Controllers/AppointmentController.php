<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->get();
        return view('admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        return view('admin.appointments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required',
            'service' => 'required',
        ]);

        Appointment::create($request->all());
        return redirect()->route('appointments.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Appointment $appointment)
    {
        return view('admin.appointments.edit', compact('appointment'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required',
            'service' => 'required',
        ]);

        $appointment->update($request->all());
        return redirect()->route('appointments.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('appointments.index')->with('success', 'Data berhasil dihapus.');
    }
}
