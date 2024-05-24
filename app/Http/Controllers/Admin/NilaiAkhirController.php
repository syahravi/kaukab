<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NilaiAkhir;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class NilaiAkhirController extends Controller
{
    public function index()
    {
        $nilaiAkhir = NilaiAkhir::all();
        return view('admin.hasil.index', compact('nilaiAkhir'));
    }

    public function downloadPDF()
    {
        $nilaiAkhir = NilaiAkhir::all();

        $pdf = PDF::loadView('admin.hasil.pdf', compact('nilaiAkhir'));
        return $pdf->download('nilai-akhir.pdf');
    }

    public function destroy($id)
    {
        $nilaiAkhir = NilaiAkhir::findOrFail($id);
        $nilaiAkhir->delete();

        return redirect()->route('admin.hasil.index')->with('success', 'Nilai Akhir deleted successfully.');
    }
}
