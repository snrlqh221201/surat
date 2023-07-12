<?php

namespace App\Http\Controllers;

use App\Models\ReportMasuk;
use App\Models\SuratMasuk;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class ReportMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = ReportMasuk::all();
        $unitKerja = UnitKerja::select(['id', 'namaunit'])->get();
    
        return view ('admin.reportsurat.suratmasuk.index', compact('data', 'unitKerja'));
    }


    public function store(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;
        $unitKerja = $request->unitKerja;

        $suratmasuk = SuratMasuk::with('unitKerja')->whereBetween('tanggal', [$dari , $sampai])->orderBy('tanggal', 'asc');
        
        if ($unitKerja !== 'all') {
            $suratmasuk->where('unit_kerja_id', $unitKerja);
        }
        
        $suratmasuk = $suratmasuk->get();

        return view('admin.reportsurat.suratmasuk.show', compact('suratmasuk'));
    }
}
