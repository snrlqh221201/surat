<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unitkerja::create([
            'namaunit' => 'Kepala Desa',
        ]);
        
        Unitkerja::create([
            'namaunit' => 'Kaur Umum',
        ]);
    }
}
