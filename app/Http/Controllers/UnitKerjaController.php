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
        $data = UnitKerja::all();
        return view ('admin.setupmanagement.unitkerja.add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = UnitKerja::create([
            'namaunit' => $request->namaunit,
        ]);

        if ($simpan) {
            $data = UnitKerja::all();
            return view('admin.setupmanagement.unitkerja.index', compact('data'));
        }
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
    public function edit(UnitKerja $unitKerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnitKerja $unitKerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnitKerja $unitKerja)
    {
        //
    }
}
