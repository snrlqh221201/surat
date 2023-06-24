<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SuratKeluar::all();
        return view ('admin.suratkeluar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = SuratKeluar::all();
        return view ('admin.suratkeluar.add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = SuratKeluar::create([
            'tanggal' => $request->tanggal,
            'nosurat' => $request->nosurat,
            'perihal' =>$request->perihal,
            'sifat surat' => $request->sifatsurat,
            'kepada'=> $request->kepada,
            'unitkerja_id'=> $request->untikerja_id, 
        ]);

        if ($simpan) {
            $data = SuratKeluar::all();
            return view ('admin.suratkeluar.index', compact('data'));
        }
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
    public function edit(SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeluar $suratKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeluar $suratKeluar)
    {
        //
    }
}
