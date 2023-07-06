<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SuratKeluar::with('unitKerja')->get();

        return view ('admin.suratkeluar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unitKerja = UnitKerja::pluck('namaunit', 'id');

        return view ('admin.suratkeluar.add', compact('unitKerja'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SuratKeluar::create([
            'tanggal' => $request->tanggal,
            'nosurat' => $request->nosurat,
            'perihal' =>$request->perihal,
            'sifat_surat' => $request->sifat_surat,
            'kepada'=> $request->kepada,
            'unit_kerja_id'=> $request->unit_kerja_id,
        ]);

        return redirect()->route('suratkeluar')->with('message', 'Data berhasil dibuat!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
        public function edit($id)
        {
            $data = SuratKeluar::findOrFail($id);
            $unitkerjas = UnitKerja::select('id', 'namaunit')->get();

            return view('admin.suratkeluar.edit', compact('data', 'unitkerjas'));
        }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
        {
            $data = SuratKeluar::findOrFail($id);
            $data->tanggal = $request->tanggal;
            $data->nosurat = $request->nosurat;
            $data->perihal = $request->perihal;
            $data->sifat_surat = $request->sifat_surat;
            $data->unit_kerja_id = $request->unit_kerja_id;
            $data->kepada = $request->kepada;
    
            $data->update();
    
            return redirect()->route('suratkeluar')->with('message', 'Data berhasil diperbarui!');
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = SuratKeluar::findOrFail($id);
        $data -> delete();

        return back()->with('message', 'Data berhasil didelete!');
    }
}
