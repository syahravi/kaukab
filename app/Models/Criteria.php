<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'kriteria',
        'simbol',
        'bobot',
        'type',
    ];
    protected $table = 'criteria';

    protected $casts = [
        'bobot' => 'float',
    ];

    public function getTypeAttribute($value)
    {
        return ucfirst($value);
    }
}
