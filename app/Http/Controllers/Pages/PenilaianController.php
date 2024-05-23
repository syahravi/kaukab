<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\NilaiAkhir;
use App\Models\Normalisasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PenilaianController extends Controller
{
    public function index()
    {
        $penilaians = NilaiAkhir::with('santri')->get();
        return view('pages.penilaian', compact('penilaians'));
    }

    public function show($nama_santri)
    {
        $penilaian = NilaiAkhir::with('santri')->whereHas('santri', function ($query) use ($nama_santri) {
            $query->where('nama_santri', $nama_santri);
        })->firstOrFail();
    
        $normalisasi = Normalisasi::where('alternatif', $penilaian->nama_santri)->first();
    
        return view('pages.penilian-show', compact('penilaian', 'normalisasi'));
    }
    
    public function download($nama_santri)
    {
        $penilaian = NilaiAkhir::with('santri')->whereHas('santri', function ($query) use ($nama_santri) {
            $query->where('nama_santri', $nama_santri);
        })->firstOrFail();
    
        $normalisasi = Normalisasi::where('alternatif', $penilaian->nama_santri)->first();
    
        $pdf = PDF::loadView('pages.penilaian-download', compact('penilaian', 'normalisasi'));
        return $pdf->download('penilaian_' . $penilaian->santri->nama_santri . '.pdf');
    }
}
