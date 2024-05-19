<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $santri = Santri::all();
        return view('admin.santri.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.santri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_santri' => 'required|string|max:255',
            'nama_asrama' => 'required|string|max:255',
        ]);

        Santri::create([
            'nama_santri' => $request->nama_santri,
            'nama_asrama' => $request->nama_asrama,
        ]);

        return redirect()->route('admin.santri.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $santri = Santri::findOrFail($id);
        return view('admin.santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_santri' => 'required|string|max:255',
            'nama_asrama' => 'required|string|max:255',
        ]);

        $santri = Santri::findOrFail($id);
        $santri->update([
            'nama_santri' => $request->nama_santri,
            'nama_asrama' => $request->nama_asrama,
        ]);

        return redirect()->route('admin.santri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();

        return redirect()->route('admin.santri.index');
    }
}
