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
            'tanggal' => '12 may 2023',
            'nosurat' => '01/08/20/2023',
            'perihal' => 'callcenter',
            'sifatsurat'=>'penting',
            'unit_kerja_id' => 1,
            'kepada' => 'pt.kominfo',
        ]);
    }
}
