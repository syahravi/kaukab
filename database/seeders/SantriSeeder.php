<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Santri;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data nama santri dan asrama
        $santriAsramas = [['nama_santri' => 'Nafissa Dhia Izzatunnisa', 'nama_asrama' => 'Asrama A'], ['nama_santri' => 'Unifah Fajarwati', 'nama_asrama' => 'Asrama B'], ['nama_santri' => 'Muhda Luthfa Azizah', 'nama_asrama' => 'Asrama A'], ['nama_santri' => 'Syeima Salsabila', 'nama_asrama' => 'Asrama A'], ['nama_santri' => 'Tasa Khoirunisa', 'nama_asrama' => 'Asrama A'], ['nama_santri' => 'Aidah Aryani', 'nama_asrama' => 'Asrama A'], ['nama_santri' => 'Elza Salsabella', 'nama_asrama' => 'Asrama A']];

        // Masukkan data ke dalam database
        foreach ($santriAsramas as $santriAsrama) {
            Santri::create([
                'nama_santri' => $santriAsrama['nama_santri'],
                'nama_asrama' => $santriAsrama['nama_asrama'],
            ]);
        }
    }
}
