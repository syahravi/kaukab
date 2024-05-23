<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Criteria; // Import model Criteria

class KriteriaController extends Controller
{
    public function index()
    {
        $criteria = Criteria::all();

        return view('pages.kriteria', compact('criteria'));
    }
}
