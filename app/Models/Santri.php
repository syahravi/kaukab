<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';

    protected $fillable = [
        'nama_santri',
        'nama_asrama',
    ];
    public function alternatif()
    {
        return $this->hasOne(Normalisasi::class);
    }
}
