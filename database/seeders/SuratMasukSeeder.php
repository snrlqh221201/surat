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
            'tanggal' => '12 may 2023',
            'nosurat' => '01/08/20/2023',
            'perihal' => 'riset penelitian',
            'sifat surat' => 'penting',
            'pengirim' => 'pt kominfo',
            'unitkerja_id' => 1,
        ]);
    }
}
