<?php

namespace Database\Seeders;

use App\Models\SuratKeluar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuratKeluar::create([
            'tanggal' => '2023/07/11',
            'nosurat' => '12/23/0409',
            'perihal' => 'Call Center',
            'sifat_surat'=>'Penting',
            'unit_kerja_id' => 1,
            'kepada' => 'PT. Kominfo',
        ]);
    }
}
