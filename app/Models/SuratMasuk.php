<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nosurat',
        'perihal',
        'sifat_surat',
        'pengirim',
        'unit_kerja_id',
    ];

    public function unitKerja(){
        return $this->belongsTo(UnitKerja::class);
    }
}
