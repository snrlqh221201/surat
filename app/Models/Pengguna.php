<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'usrname',
        'nama',
        'hakakses',
        'unit_kerja_id',
    ];

    public function UnitKerja(){
        return $this->belongsTo(UnitKerja::class);
    }
}
