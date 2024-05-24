<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\Santri;
use App\Models\Penilian;
use App\Models\NilaiAkhir;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    public function index()
    {
        $santriList = Santri::all();
        $kriteria = Criteria::all();
        $penilian = Penilian::with('criteria')->get()->groupBy('santri_id');
        $normalizedData = $this->normalizeData($penilian, $kriteria);

        return view('admin.normalisasi.index', compact('santriList', 'kriteria', 'penilian', 'normalizedData'));
    }

    private function normalizeData($penilian, $kriteria)
    {
        $maxValues = [];
        $minValues = [];
        $normalizedData = [];

        // Mengelompokkan kriteria berdasarkan tipe (benefit atau cost) dan mencari nilai maksimum dan minimum
        foreach ($kriteria as $k) {
            if ($k->type == 'benefit') {
                $maxValues[$k->id] = Penilian::where('criteria_id', $k->id)->max('nilai');
            } else {
                $minValues[$k->id] = Penilian::where('criteria_id', $k->id)->min('nilai');
            }
        }

        // Normalisasi data
        foreach ($penilian as $santriId => $penilianGroup) {
            $santriNormalizedData = [];
            foreach ($penilianGroup as $pen) {
                $criteriaId = $pen->criteria_id;
                if ($kriteria->find($criteriaId)->type == 'benefit') {
                    $maxValue = $maxValues[$criteriaId] ?? 1;
                    $normalizedValue = $maxValue != 0 ? $pen->nilai / $maxValue : 0;
                } else {
                    $minValue = $minValues[$criteriaId] ?? 1;
                    $normalizedValue = $pen->nilai != 0 ? $minValue / $pen->nilai : 0;
                }
                $normalizedValue = min(round($normalizedValue, 2), 1); // Memastikan nilai tidak lebih dari 1
                $santriNormalizedData[$criteriaId] = number_format($normalizedValue, 2, ',', '');
            }
            $normalizedData[$santriId] = $santriNormalizedData;
        }

        return $normalizedData;
    }

    public function create()
    {
        $santri = Santri::all();
        $kriteria = Criteria::all();
        return view('admin.normalisasi.create', compact('santri', 'kriteria'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'santri_id' => 'required|exists:santri,id',
            'nilai.*' => 'required|numeric',
        ]);

        $santriId = $request->santri_id;
        $nilai = $request->nilai;

        foreach ($nilai as $criteriaId => $value) {
            Penilian::create([
                'santri_id' => $santriId,
                'criteria_id' => $criteriaId,
                'nilai' => $value,
            ]);
        }

        // Hitung dan simpan nilai akhir untuk santri yang bersangkutan
        $this->calculateAndSaveNilaiAkhir($santriId);

        return redirect()->route('admin.normalisasi.index')->with('success', 'Penilian created successfully.');
    }

    public function edit($id)
    {
        $santri = Santri::all();
        $kriteria = Criteria::all();
        $penilian = Penilian::where('santri_id', $id)->get();
        $normalizedData = $this->normalizeData([$id => $penilian], $kriteria);

        return view('admin.normalisasi.edit', compact('santri', 'kriteria', 'penilian', 'normalizedData', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nilai.*' => 'required|numeric',
        ]);

        foreach ($request->nilai as $criteriaId => $nilai) {
            $penilian = Penilian::where('santri_id', $id)->where('criteria_id', $criteriaId)->first();
            if ($penilian) {
                $penilian->update(['nilai' => $nilai]);
            } else {
                // Jika tidak ada, buat entri baru untuk criteria_id yang baru ditambahkan
                Penilian::create([
                    'santri_id' => $id,
                    'criteria_id' => $criteriaId,
                    'nilai' => $nilai,
                ]);
            }
        }

        // Hitung dan simpan nilai akhir untuk santri yang bersangkutan
        $this->calculateAndSaveNilaiAkhir($id);

        return redirect()->route('admin.normalisasi.index')->with('success', 'Penilian updated successfully.');
    }

    private function calculateAndSaveNilaiAkhir($santriId)
    {
        $santri = Santri::findOrFail($santriId);
        $penilianGroup = Penilian::where('santri_id', $santriId)->get();
        $kriteria = Criteria::all();
        $maxValues = [];
        $minValues = [];
        $types = [];

        // Menghitung nilai maksimum dan minimum untuk setiap kriteria
        foreach ($kriteria as $k) {
            if ($k->type == 'benefit') {
                $maxValues[$k->id] = Penilian::where('criteria_id', $k->id)->max('nilai');
            } else {
                $minValues[$k->id] = Penilian::where('criteria_id', $k->id)->min('nilai');
            }
            $types[$k->id] = $k->type;
        }

        // Menghitung nilai akhir untuk santri yang bersangkutan
        $nilaiAkhir = 0;

        foreach ($penilianGroup as $pen) {
            $criteriaId = $pen->criteria_id;
            if ($types[$criteriaId] == 'benefit') {
                $maxValue = $maxValues[$criteriaId] ?? 1;
                $normalizedValue = $maxValue != 0 ? $pen->nilai / $maxValue : 0;
            } else {
                $minValue = $minValues[$criteriaId] ?? 1;
                $normalizedValue = $pen->nilai != 0 ? $minValue / $pen->nilai : 0;
            }
            $normalizedValue = round($normalizedValue, 3); // Membulatkan hingga tiga angka desimal
            $bobot = $kriteria->find($criteriaId)->bobot;
            $nilaiAkhir += $normalizedValue * $bobot;
        }

        $nilaiAkhir = round($nilaiAkhir, 3); // Membulatkan nilai akhir hingga tiga angka desimal

        // Simpan atau update nilai akhir
        NilaiAkhir::updateOrCreate(['santri_id' => $santriId], ['nilai_akhir' => $nilaiAkhir]);
    }

    public function destroy($id)
    {
        Penilian::where('santri_id', $id)->delete();

        // Hapus juga nilai akhir jika ada
        NilaiAkhir::where('santri_id', $id)->delete();

        return redirect()->route('admin.normalisasi.index')->with('success', 'Penilian deleted successfully.');
    }
}
