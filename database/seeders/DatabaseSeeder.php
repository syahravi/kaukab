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
        $this->call([
            SantriSeeder::class,
            PenilianSeeder::class,
        ]);
       
       
        
        $data = [
            [
                'kriteria' => 'Sikap',
                'simbol' => 'C1',
                'bobot' => 0.2,
                'type' => 'benefit',
            ],
            [
                'kriteria' => 'Pelanggaran Keamanan',
                'simbol' => 'C2',
                'bobot' => 0.19,
                'type' => 'cost',
            ],
            [
                'kriteria' => 'Absen Ubudiyah',
                'simbol' => 'C3',
                'bobot' => 0.18,
                'type' => 'cost',
            ],
            [
                'kriteria' => ' Absen Halaqoh',
                'simbol' => 'C4',
                'bobot' => 0.13,
                'type' => 'cost',
            ],
            [
                'kriteria' => 'Nilai Raport Pesantren',
                'simbol' => 'C5',
                'bobot' => 0.1,
                'type' => 'benefit',
            ],
            [
                'kriteria' => ' Nilai Raport Madrasah',
                'simbol' => 'C6',
                'bobot' => 0.1,
                'type' => 'benefit',
            ],
            [
                'kriteria' => ' Pelanggaran Bahasa',
                'simbol' => 'C7',
                'bobot' => 0.1,
                'type' => 'cost',
            ],
        ];

        // Memasukkan data ke dalam tabel menggunakan model
        foreach ($data as $item) {
            Criteria::create($item);
        }
    }
}
