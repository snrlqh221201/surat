<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data = UnitKerja::all();
        
        return view ('admin.setupmanagement.unitkerja.index', compact('data'));
    }


    public function create()
    {
        return view ('admin.setupmanagement.unitkerja.add');
    }


    public function store(Request $request)
    {
        UnitKerja::create([
            'namaunit' => $request->namaunit,
        ]);

        return redirect()->route('unitkerja.index')->with('message', 'Data berhasil dibuat!');
    }


    public function show(UnitKerja $unitKerja)
    {
        //
    }


    public function edit($id)
    {
        $data = UnitKerja::findOrFail($id);

        return view('admin.setupmanagement.unitkerja.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = UnitKerja::findOrFail($id);
        $data->namaunit = $request->namaunit;

        $data->update();

        return redirect()->route('unitkerja.index')->with('message', 'Data berhasil diperbarui!');
    
    }


    public function destroy($id)
    {
        $data = UnitKerja::findOrFail($id);
        $data->delete();

        return back()->with('message', 'Data berhasil didelete!');
    }
}
