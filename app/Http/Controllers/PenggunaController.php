<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\UnitKerja;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pengguna::with('unitKerja')->get();

        return view ('admin.setupmanagement.pengguna.index', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $unitKerja = UnitKerja::pluck('namaunit', 'id');

        return view ('admin.setupmanagement.pengguna.add', compact('unitKerja'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pengguna::create([
            'usrname' => $request->username,
            'nama'=> $request->nama,
            'hakakses'=> $request->hakakses,  
            'unit_kerja_id'=> $request->unit_kerja_id,
        ]);

        return redirect('pengguna');
    }

    /**
     * Display the specified resource.
     */
    public function show(pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Pengguna::findOrFail($id);
        $unitkerjas = UnitKerja::select('id', 'namaunit')->get();

        return view ('admin.setupmanagement.pengguna.edit', compact('data', 'unitkerjas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Pengguna::findOrFail($id);
        $data->usrname = $request->username;
        $data->nama = $request->nama;
        $data->hakakses = $request->hakakses; 
        $data->namaunit = $request->unit_kerja_id;

        $data->update();

        return redirect()->route('pengguna.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengguna $pengguna)
    {
        //
    }
}
