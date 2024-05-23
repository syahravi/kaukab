<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index()
    {
        $santri = Santri::all();
        // Di dalam metode controller yang sesuai
        $uniqueAsramas = $santri->unique('nama_asrama')->pluck('nama_asrama');

        return view('pages.santri', [
            'santri' => $santri,
            'uniqueAsramas' => $uniqueAsramas,
        ]);
    }
}
