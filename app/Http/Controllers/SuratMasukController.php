<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SuratMasuk::all();
        return view ('admin.suratmasuk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = SuratMasuk::all();
        return view ('admin.suratmasuk.add', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = SuratMasuk::create([
            'tanggal' => $request->tanggal,
            'nosurat' => $request->nosurat,
            'perihal' =>$request->perihal,
            'sifat surat' => $request->sifatsurat,
            'pengirim'=> $request->pengirim,
            'unitkerja_id'=> $request->untikerja_id, 
        ]);

        if ($simpan) {
            $data = SuratMasuk::all();
            return view ('admin.suratmasuk.index', compact('data'));
        }
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
    public function edit(SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratMasuk $suratMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $suratMasuk)
    {
        //
    }
}
