<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SuratMasuk::with('unitKerja')->get();

        return view ('admin.suratmasuk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unitKerja = UnitKerja::pluck('namaunit', 'id');

        return view ('admin.suratmasuk.add', compact('unitKerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SuratMasuk::create([
            'tanggal' => $request->tanggal,
            'nosurat' => $request->nosurat,
            'perihal' =>$request->perihal,
            'sifat_surat' => $request->sifat_surat,
            'pengirim'=> $request->pengirim,
            'unit_kerja_id'=> $request->unit_kerja_id,
        ]);
        
        return redirect()->route('suratmasuk');
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = SuratMasuk::findOrFail($id);
        $unitkerjas = UnitKerja::select('id', 'namaunit')->get();

        return view('admin.suratmasuk.edit', compact('data', 'unitkerjas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = SuratMasuk::findOrFail($id);

        $data->tanggal = $request->tanggal;
        $data->nosurat = $request->nosurat;
        $data->perihal = $request->perihal;
        $data->sifat_surat = $request->sifat_surat;
        $data->pengirim = $request->pengirim;
        $data->unit_kerja_id = $request->unit_kerja_id;

        $data->update();

        return redirect()->route('suratmasuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        //
    }
}
