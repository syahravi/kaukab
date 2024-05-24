<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\Penilian;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function index()
    {
        $criteria = Criteria::all();
        return view('admin.criteria.index', compact('criteria'));
    }

    public function create()
    {
        return view('admin.criteria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required|numeric',
            'type' => 'required|in:benefit,cost',
        ]);

        // Generate symbol automatically
        $criteriaCount = Criteria::count();
        $symbol = 'C' . ($criteriaCount + 1);

        Criteria::create([
            'kriteria' => $request->kriteria,
            'simbol' => $symbol,
            'bobot' => $request->bobot,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.criteria.index')->with('Berhasil', 'Kriteria Berhasil Dibuat.');
    }

    public function edit(Criteria $criteria)
    {
        return view('admin.criteria.edit', compact('criteria'));
    }

    public function update(Request $request, Criteria $criteria)
    {
        $request->validate([
            'kriteria' => 'required',
            'bobot' => 'required|numeric',
            'type' => 'required|in:benefit,cost',
        ]);

        $criteria->update([
            'kriteria' => $request->kriteria,
            'bobot' => $request->bobot,
            'type' => $request->type,
        ]);

        return redirect()->route('admin.criteria.index')->with('Berhasil', 'Kriteria Berhasil Dibuat.');
    }

    public function destroy(Criteria $criteria)
    {
        // Hapus semua penilian terkait kriteria ini terlebih dahulu
        Penilian::where('criteria_id', $criteria->id)->delete();

        // Kemudian hapus kriteria
        $criteria->delete();

        return redirect()->route('admin.criteria.index')->with('Berhasil', 'Kriteria Berhasil Dibuat.');
    }
}
