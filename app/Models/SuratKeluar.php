<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'nosurat',
        'perihal',
        'sifat_surat',
        'unit_kerja_id',
        'kepada',
    ];

    public function UnitKerja(){
        return $this->belongsTo(UnitKerja::class);
    }
}
