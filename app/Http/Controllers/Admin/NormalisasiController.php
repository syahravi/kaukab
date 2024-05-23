<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\NilaiAkhir;
use App\Models\Santri;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    public function index()
    {
        $normalisasi = Normalisasi::get();
        $kriteria = Criteria::get();

        $c1 = Criteria::find(1)->type == 'Benefit' ? Normalisasi::max('kriteria_1') : Normalisasi::min('kriteria_1');
        $c2 = Criteria::find(2)->type == 'Benefit' ? Normalisasi::max('kriteria_2') : Normalisasi::min('kriteria_2');
        $c3 = Criteria::find(3)->type == 'Benefit' ? Normalisasi::max('kriteria_3') : Normalisasi::min('kriteria_3');
        $c4 = Criteria::find(4)->type == 'Benefit' ? Normalisasi::max('kriteria_4') : Normalisasi::min('kriteria_4');
        $c5 = Criteria::find(5)->type == 'Benefit' ? Normalisasi::max('kriteria_5') : Normalisasi::min('kriteria_5');
        $c6 = Criteria::find(6)->type == 'Benefit' ? Normalisasi::max('kriteria_6') : Normalisasi::min('kriteria_6');
        $c7 = Criteria::find(7)->type == 'Benefit' ? Normalisasi::max('kriteria_7') : Normalisasi::min('kriteria_7');
        return view('admin.normalisasi.index', compact('normalisasi', 'kriteria', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7'));
    }
    public function create()
    {
        $santri = Santri::get();
        $kriteria = Criteria::get();
        return view('admin.normalisasi.create', compact('santri', 'kriteria'));
    }
    public function edit($id)
    {
        $normalisasi = Normalisasi::findOrFail($id);
        $santri = Santri::get();
        $kriteria = Criteria::get();
        return view('admin.normalisasi.edit', compact('normalisasi', 'santri', 'kriteria'));
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

        $nama_santri = $request->alternatif;
        $preferensi = $normalisasi->kriteria_1 * Criteria::find(1)->bobot + $normalisasi->kriteria_2 * Criteria::find(2)->bobot + $normalisasi->kriteria_3 * Criteria::find(3)->bobot + $normalisasi->kriteria_4 * Criteria::find(4)->bobot + $normalisasi->kriteria_5 * Criteria::find(5)->bobot + $normalisasi->kriteria_6 * Criteria::find(6)->bobot + $normalisasi->kriteria_7 * Criteria::find(7)->bobot;

        $data = ['nama_santri' => $nama_santri, 'preferensi' => $preferensi];

        $nilai_akhir = NilaiAkhir::create($data);
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
