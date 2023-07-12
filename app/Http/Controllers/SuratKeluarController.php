<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = SuratKeluar::with('unitKerja')->get();

        return view ('admin.suratkeluar.index', compact('data'));
    }

    
    public function create()
    {
        $unitKerja = UnitKerja::pluck('namaunit', 'id');

        return view ('admin.suratkeluar.add', compact('unitKerja'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'file_surat' => 'mimes:pdf,doc,docx|max:2048',
        ], [
            'file_surat.mimes' => 'Berkas harus dalam format PDF, DOC, atau DOCX.',
            'file_surat.max' => 'Ukuran berkas maksimum adalah 2MB.',
        ]);

        $data = SuratKeluar::create([
            'tanggal' => $request->tanggal,
            'nosurat' => $request->nosurat,
            'perihal' =>$request->perihal,
            'sifat_surat' => $request->sifat_surat,
            'kepada'=> $request->kepada,
            'unit_kerja_id'=> $request->unit_kerja_id,
        ]);

        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('surat/surat keluar', $request->file('file_surat')->getClientOriginalname());
            $data->file_surat = 'surat/surat keluar/'.$request->file('file_surat')->getClientOriginalname();
            $data->save();
        }

        return redirect()->route('suratkeluar.index')->with('message', 'Data berhasil dibuat!');
        
    }


    public function show(SuratKeluar $suratKeluar)
    {
        //
    }

    
    public function edit($id)
    {
        $data = SuratKeluar::findOrFail($id);
        $unitkerjas = UnitKerja::select('id', 'namaunit')->get();

        return view('admin.suratkeluar.edit', compact('data', 'unitkerjas'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'file_surat' => 'mimes:pdf,doc,docx|max:2048',
        ], [
            'file_surat.mimes' => 'Berkas harus dalam format PDF, DOC, atau DOCX.',
            'file_surat.max' => 'Ukuran berkas maksimum adalah 2MB.',
        ]);

        $data = SuratKeluar::findOrFail($id);
        $data->tanggal = $request->tanggal;
        $data->nosurat = $request->nosurat;
        $data->perihal = $request->perihal;
        $data->sifat_surat = $request->sifat_surat;
        $data->unit_kerja_id = $request->unit_kerja_id;
        $data->kepada = $request->kepada;

        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('surat/surat keluar', $request->file('file_surat')->getClientOriginalname());
            $data->file_surat = 'surat/surat keluar/'.$request->file('file_surat')->getClientOriginalname();
        }

        $data->update();

        return redirect()->route('suratkeluar.index')->with('message', 'Data berhasil diperbarui!');
    }
    

    public function destroy($id)
    {
        $data = SuratKeluar::findOrFail($id);
        $data -> delete();

        return back()->with('message', 'Data berhasil didelete!');
    }
}
