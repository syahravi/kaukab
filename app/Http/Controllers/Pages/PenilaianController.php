<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\NilaiAkhir;
use App\Models\Penilian; // Menggunakan model Penilian
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

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

        $penilian = Penilian::where('santri_id', $penilaian->santri->id)->get();

        return view('pages.penilian-show', compact('penilaian', 'penilian'));
    }

    public function download($nama_santri)
    {
        $penilaian = NilaiAkhir::with('santri')->whereHas('santri', function ($query) use ($nama_santri) {
            $query->where('nama_santri', $nama_santri);
        })->firstOrFail();

        $penilian = Penilian::where('santri_id', $penilaian->santri->id)->get();

        $pdf = PDF::loadView('pages.penilaian-download', compact('penilaian', 'penilian'));
        return $pdf->download('penilaian_' . $penilaian->santri->nama_santri . '.pdf');
    }
}
