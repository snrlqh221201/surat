<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = SuratMasuk::with('unitKerja')->get();

        return view ('admin.suratmasuk.index', compact('data'));
    }

    
    public function create()
    {
        $unitKerja = UnitKerja::pluck('namaunit', 'id');

        return view ('admin.suratmasuk.add', compact('unitKerja'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'file_surat' => 'mimes:pdf,doc,docx|max:2048',
        ], [
            'file_surat.mimes' => 'Berkas harus dalam format PDF, DOC, atau DOCX.',
            'file_surat.max' => 'Ukuran berkas maksimum adalah 2MB.',
        ]);

        $data = SuratMasuk::create([
            'tanggal' => $request->tanggal,
            'nosurat' => $request->nosurat,
            'perihal' =>$request->perihal,
            'sifat_surat' => $request->sifat_surat,
            'pengirim'=> $request->pengirim,
            'unit_kerja_id'=> $request->unit_kerja_id,
            'file_surat'=> $request->file_surat,
        ]);

        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('surat/surat masuk', $request->file('file_surat')->getClientOriginalname());
            $data->file_surat = 'surat/surat masuk/'.$request->file('file_surat')->getClientOriginalname();
            $data->save();
        }
        
        return redirect()->route('suratmasuk.index')->with('message', 'Data berhasil dibuat!');
    }

    
    public function show(SuratMasuk $suratMasuk)
    {
        //
    }

    
    public function edit($id)
    {
        $data = SuratMasuk::findOrFail($id);
        $unitkerjas = UnitKerja::select('id', 'namaunit')->get();

        return view('admin.suratmasuk.edit', compact('data', 'unitkerjas'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'file_surat' => 'mimes:pdf,doc,docx|max:2048',
        ], [
            'file_surat.mimes' => 'Berkas harus dalam format PDF, DOC, atau DOCX.',
            'file_surat.max' => 'Ukuran berkas maksimum adalah 2MB.',
        ]);
        
        $data = SuratMasuk::findOrFail($id);

        $data->tanggal = $request->tanggal;
        $data->nosurat = $request->nosurat;
        $data->perihal = $request->perihal;
        $data->sifat_surat = $request->sifat_surat;
        $data->pengirim = $request->pengirim;
        $data->unit_kerja_id = $request->unit_kerja_id;

        if ($request->hasFile('file_surat')) {
            $request->file('file_surat')->move('surat/surat masuk', $request->file('file_surat')->getClientOriginalname());
            $data->file_surat = 'surat/surat masuk/'.$request->file('file_surat')->getClientOriginalname();
        }
        
        $data->update();

        return redirect()->route('suratmasuk.index')->with('message', 'Data berhasil diperbarui!');
    }

    
    public function destroy($id)
    {
        $data = SuratMasuk::findOrFail($id);
        $data->delete();

        return back()->with('message','Data berhasil didelete!');
    }
}
