<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = UnitKerja::all();
        
        return view ('admin.setupmanagement.unitkerja.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.setupmanagement.unitkerja.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UnitKerja::create([
            'namaunit' => $request->namaunit,
        ]);

        return redirect()->route('unitkerja.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(UnitKerja $unitKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = UnitKerja::findOrFail($id);

        return view('admin.setupmanagement.unitkerja.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = UnitKerja::findOrFail($id);
        $data->namaunit = $request->namaunit;

        $data->update();

        return redirect()->route('unitkerja.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = UnitKerja::findOrFail($id);
        $data->delete();

        return back()->with('message', 'Data berhasil didelete!');
    }
}
