<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NilaiAkhir extends Model
{
    use HasFactory;
    protected $table = 'nilai_akhir';

    protected $fillable = [
        'nama_santri',
        'preferensi',
    ];
    public function santri(): BelongsTo
    {
        return $this->belongsTo(Santri::class, 'nama_santri');
    }
}
