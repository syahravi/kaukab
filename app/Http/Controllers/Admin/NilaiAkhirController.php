<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NilaiAkhir;
use Illuminate\Http\Request;

class NilaiAkhirController extends Controller
{
    public function index()
    {
        $nilai_akhir = NilaiAkhir::get();
        return view('admin.hasil.index', compact('nilai_akhir'));
    }
}
