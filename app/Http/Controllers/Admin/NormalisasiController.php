<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\Santri;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    public function index()
    {
        $normalisasi = Normalisasi::get();
        $kriteria = Criteria::get();
        return view('admin.normalisasi.index', compact('normalisasi', 'kriteria'));
    }
    public function create()
    {
        $santri = Santri::get();
        $kriteria = Criteria::get();
        return view('admin.normalisasi.create', compact('santri', 'kriteria'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'alternatif' => 'required',
            'kriteria_1' => 'required',
            'kriteria_2' => 'required',
            'kriteria_3' => 'required',
            'kriteria_4' => 'required',
            'kriteria_5' => 'required',
            'kriteria_6' => 'required',
            'kriteria_7' => 'required',
        ]);

        $normalisasi = Normalisasi::create($data);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'alternatif' => 'sometimes|required|string|max:255',
            'kriteria_1' => 'sometimes|required|numeric',
            'kriteria_2' => 'sometimes|required|numeric',
            'kriteria_3' => 'sometimes|required|numeric',
            'kriteria_4' => 'sometimes|required|numeric',
            'kriteria_5' => 'sometimes|required|numeric',
            'kriteria_6' => 'sometimes|required|numeric',
            'kriteria_7' => 'sometimes|required|numeric',
        ]);

        $normalisasi = Normalisasi::findOrFail($id);
        $normalisasi->update($data);
        return response()->json($normalisasi);
    }

    // Delete
    public function destroy($id)
    {
        $normalisasi = Normalisasi::findOrFail($id);
        $normalisasi->delete();
        return response()->json(null, 204);
    }
}
