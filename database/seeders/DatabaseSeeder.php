<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Criteria;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RoleSeeder::class, UserSeeder::class]);

        $data = [
            [
                'kriteria' => 'Kriteria 1',
                'simbol' => 'C1',
                'bobot' => 0.5,
                'type' => 'benefit',
            ],
            [
                'kriteria' => 'Kriteria 2',
                'simbol' => 'C2',
                'bobot' => 0.8,
                'type' => 'cost',
            ],
            [
                'kriteria' => 'Kriteria 3',
                'simbol' => 'C3',
                'bobot' => 0.6,
                'type' => 'benefit',
            ],
            [
                'kriteria' => 'Kriteria 4',
                'simbol' => 'C4',
                'bobot' => 0.7,
                'type' => 'cost',
            ],
            [
                'kriteria' => 'Kriteria 5',
                'simbol' => 'C5',
                'bobot' => 0.9,
                'type' => 'benefit',
            ],
            [
                'kriteria' => 'Kriteria 6',
                'simbol' => 'C6',
                'bobot' => 0.4,
                'type' => 'cost',
            ],
            [
                'kriteria' => 'Kriteria 7',
                'simbol' => 'C7',
                'bobot' => 0.3,
                'type' => 'benefit',
            ],
        ];

        // Memasukkan data ke dalam tabel menggunakan model
        foreach ($data as $item) {
            Criteria::create($item);
        }
    }
}
