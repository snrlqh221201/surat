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
        'sifat surat',
        'kepada',
        'unitkerja_id',
    ];

    public function UnitKerja(){
        return $this->belongsTo(UnitKerja::class);
    }
}
