<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'namaunit',
    ];

    public function suratMasuk() {
        return $this->hasMany(SuratMasuk::class);
    }
}
