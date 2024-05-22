<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;
    protected $table = 'normalisasi';

    protected $fillable = [
        'alternatif',
        'kriteria_1',
        'kriteria_2',
        'kriteria_3',
        'kriteria_4',
        'kriteria_5',
        'kriteria_6',
        'kriteria_7',
    ];
}
