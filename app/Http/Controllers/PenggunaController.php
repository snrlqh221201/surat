<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = Pengguna::with('unitKerja')->get();

        return view ('admin.setupmanagement.pengguna.index', compact('data'));
        
    }

    public function create()
    {
        $unitKerja = UnitKerja::pluck('namaunit', 'id');

        return view ('admin.setupmanagement.pengguna.add', compact('unitKerja'));
    }
    

    public function store(Request $request)
    {
        Pengguna::create([
            'usrname' => $request->username,
            'nama'=> $request->nama,
            'hakakses'=> $request->hakakses,  
            'unit_kerja_id'=> $request->unit_kerja_id,
        ]);

        return redirect()->route('pengguna.index')->with('message', 'Data berhasil dibuat!');
    }

    
    public function show(pengguna $pengguna)
    {
        //
    }


    public function edit($id)
    {
        $data = Pengguna::findOrFail($id);
        $unitkerjas = UnitKerja::select('id', 'namaunit')->get();

        return view ('admin.setupmanagement.pengguna.edit', compact('data', 'unitkerjas'));
    }


    public function update(Request $request, $id)
    {
        $data = Pengguna::findOrFail($id);
        $data->usrname = $request->username;
        $data->nama = $request->nama;
        $data->hakakses = $request->hakakses; 
        $data->unit_kerja_id = $request->unit_kerja_id;

        $data->update();

        return redirect()->route('pengguna.index')->with('message', 'Data berhasil diperbarui!');
    }

    
    public function destroy($id)
    {
        $data = Pengguna::findOrFail($id);
        $data->delete();

        return back()->with('message','Data berhasil didelete!');
    }
}
