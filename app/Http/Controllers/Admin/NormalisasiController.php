<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Criteria;
use App\Models\Santri;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    public function index()
    {
        // $santri = Santri::all();
        return view('admin.normalisasi.index');
    }
}
