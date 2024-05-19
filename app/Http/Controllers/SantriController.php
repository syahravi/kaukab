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
        $santri = new Santri;
        $santri->nama_santri = $request->nama_santri;
        $santri->nama_asrama = $request->nama_asrama;
        $santri->save();

        return redirect('admin.santri.index');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $santri = Santri::find($id);
        return view('admin.santri.edit', compact('santri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $santri = Santri::find($id);
        $santri->nama_santri = $request->nama_santri;
        $santri->nama_asrama = $request->nama_asrama;
        $santri->save();

        return redirect('admin.santri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $santri = Santri::find($id);
        $santri->delete();

        return redirect('/santri');
    }
}
