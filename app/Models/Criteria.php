<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    protected $table = 'criteria';

    protected $fillable = [
        'kriteria',
        'simbol',
        'bobot',
        'type',
    ];

    public function penilian()
    {
        return $this->hasMany(Penilian::class);
    }
}
