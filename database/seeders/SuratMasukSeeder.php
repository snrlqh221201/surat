<?php

namespace Database\Seeders;

use App\Models\SuratMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuratMasuk::create([                                                
            'tanggal' => '2023/05/12',
            'nosurat' => '12/23/0409',
            'perihal' => 'Riset Penelitian',
            'sifat_surat' => 'Penting',
            'pengirim' => 'PT. Kominfo',
            'unit_kerja_id' => 1,
        ]);
    }
}
