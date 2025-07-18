<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkingProcess;

class WorkingProcessController extends Controller
{
    public function index()
    {
        $workingprocesses = WorkingProcess::latest()->get();
        return view('admin.workingprocess.index', compact('workingprocesses'));
    }

    public function create()
    {
        return view('admin.workingprocess.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'tittle' => 'required',
            'description' => 'required',
        ]);

        WorkingProcess::create($request->all());
        return redirect()->route('working-process.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(WorkingProcess $working_process)
    {
        return view('admin.workingprocess.edit', ['working_process' => $working_process]);
    }

    public function update(Request $request, WorkingProcess $working_process)
    {
        $request->validate([
            'icon' => 'required',
            'tittle' => 'required',
            'description' => 'required',
        ]);

        $working_process->update($request->all());
        return redirect()->route('working-process.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(WorkingProcess $working_process)
    {
        $working_process->delete();
        return redirect()->route('working-process.index')->with('success', 'Data berhasil dihapus.');
    }
}
