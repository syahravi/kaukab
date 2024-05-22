<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Criteria;

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
    public function hitungRasio()
    {
        // $max = Criteria::max()
        // $kriteria1 = $this->kriteria_1;
        // $kriteria2 = $this->kriteria_2;

        // return $kriteria1 / max($kriteria1, $kriteria2);
    }
}
