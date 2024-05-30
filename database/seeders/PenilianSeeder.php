<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penilian;
use App\Models\Santri;
use App\Models\Criteria;

class PenilianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua santri dan criteria yang ada
        $santris = Santri::all();
        $criterias = Criteria::all();

        // Data penilian berdasarkan tabel yang diberikan
        $penilians = [
            // Santri A1
            ['santri' => 'A1', 'criteria' => 'C1', 'nilai' => 95],
            ['santri' => 'A1', 'criteria' => 'C2', 'nilai' => 2],
            ['santri' => 'A1', 'criteria' => 'C3', 'nilai' => 10],
            ['santri' => 'A1', 'criteria' => 'C4', 'nilai' => 1],
            ['santri' => 'A1', 'criteria' => 'C5', 'nilai' => 86],
            ['santri' => 'A1', 'criteria' => 'C6', 'nilai' => 98],
            ['santri' => 'A1', 'criteria' => 'C7', 'nilai' => 9],

            // Santri A2
            ['santri' => 'A2', 'criteria' => 'C1', 'nilai' => 97],
            ['santri' => 'A2', 'criteria' => 'C2', 'nilai' => 5],
            ['santri' => 'A2', 'criteria' => 'C3', 'nilai' => 11],
            ['santri' => 'A2', 'criteria' => 'C4', 'nilai' => 2],
            ['santri' => 'A2', 'criteria' => 'C5', 'nilai' => 88],
            ['santri' => 'A2', 'criteria' => 'C6', 'nilai' => 95],
            ['santri' => 'A2', 'criteria' => 'C7', 'nilai' => 10],

            // Santri A3
            ['santri' => 'A3', 'criteria' => 'C1', 'nilai' => 96],
            ['santri' => 'A3', 'criteria' => 'C2', 'nilai' => 1],
            ['santri' => 'A3', 'criteria' => 'C3', 'nilai' => 10],
            ['santri' => 'A3', 'criteria' => 'C4', 'nilai' => 4],
            ['santri' => 'A3', 'criteria' => 'C5', 'nilai' => 85],
            ['santri' => 'A3', 'criteria' => 'C6', 'nilai' => 92],
            ['santri' => 'A3', 'criteria' => 'C7', 'nilai' => 7],

            // Santri A4
            ['santri' => 'A4', 'criteria' => 'C1', 'nilai' => 96],
            ['santri' => 'A4', 'criteria' => 'C2', 'nilai' => 6],
            ['santri' => 'A4', 'criteria' => 'C3', 'nilai' => 7],
            ['santri' => 'A4', 'criteria' => 'C4', 'nilai' => 5],
            ['santri' => 'A4', 'criteria' => 'C5', 'nilai' => 84],
            ['santri' => 'A4', 'criteria' => 'C6', 'nilai' => 96],
            ['santri' => 'A4', 'criteria' => 'C7', 'nilai' => 12],

            // Santri A5
            ['santri' => 'A5', 'criteria' => 'C1', 'nilai' => 95],
            ['santri' => 'A5', 'criteria' => 'C2', 'nilai' => 6],
            ['santri' => 'A5', 'criteria' => 'C3', 'nilai' => 6],
            ['santri' => 'A5', 'criteria' => 'C4', 'nilai' => 7],
            ['santri' => 'A5', 'criteria' => 'C5', 'nilai' => 80],
            ['santri' => 'A5', 'criteria' => 'C6', 'nilai' => 94],
            ['santri' => 'A5', 'criteria' => 'C7', 'nilai' => 8],
            // Santri A6
            ['santri' => 'A5', 'criteria' => 'C1', 'nilai' => 98],
            ['santri' => 'A5', 'criteria' => 'C2', 'nilai' => 8],
            ['santri' => 'A5', 'criteria' => 'C3', 'nilai' => 9],
            ['santri' => 'A5', 'criteria' => 'C4', 'nilai' => 5],
            ['santri' => 'A5', 'criteria' => 'C5', 'nilai' => 82],
            ['santri' => 'A5', 'criteria' => 'C6', 'nilai' => 96],
            ['santri' => 'A5', 'criteria' => 'C7', 'nilai' => 6],
            // Santri A7
            ['santri' => 'A5', 'criteria' => 'C1', 'nilai' => 95],
            ['santri' => 'A5', 'criteria' => 'C2', 'nilai' => 7],
            ['santri' => 'A5', 'criteria' => 'C3', 'nilai' => 8],
            ['santri' => 'A5', 'criteria' => 'C4', 'nilai' => 4],
            ['santri' => 'A5', 'criteria' => 'C5', 'nilai' => 84],
            ['santri' => 'A5', 'criteria' => 'C6', 'nilai' => 95],
            ['santri' => 'A5', 'criteria' => 'C7', 'nilai' => 9],
        ];

        foreach ($penilians as $penilian) {
            $santri = $santris->where('nama_santri', $penilian['santri'])->first();
            $criteria = $criterias->where('kriteria', $penilian['criteria'])->first();

            if ($santri && $criteria) {
                Penilian::create([
                    'santri_id' => $santri->id,
                    'criteria_id' => $criteria->id,
                    'nilai' => $penilian['nilai'],
                ]);
            }
        }
    }
}
