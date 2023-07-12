<?php

namespace App\Http\Controllers;

use App\Models\ReportKeluar;
use App\Models\SuratKeluar;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class ReportKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = ReportKeluar::all();
        $unitKerja = UnitKerja::select(['id', 'namaunit'])->get();
    
        return view ('admin.reportsurat.suratkeluar.index', compact('data', 'unitKerja'));
    }


    public function store(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;
        $unitKerja = $request->unitKerja;

        $suratkeluar = SuratKeluar::with('unitKerja')->whereBetween('tanggal', [$dari , $sampai])->orderBy('tanggal', 'asc');

        if ($unitKerja !== 'all') {
            $suratkeluar->where('unit_kerja_id', $unitKerja);
        }

        $suratkeluar = $suratkeluar->get();

        return view('admin.reportsurat.suratkeluar.show', compact('suratkeluar'));
    }
}
