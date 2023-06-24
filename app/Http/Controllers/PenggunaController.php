<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $data = Pengguna::all();
            return view ('admin.setupmanagement.pengguna.index', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $data = Pengguna::all();
            return view ('admin.setupmanagement.pengguna.add', compact('data'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $simpan = Pengguna::create([
            'usrname' => $request->username,
            'nama'=> $request->nama,
            'hakakses'=> $request->hakakses,  
            'namaunit'=> $request->unitkerja,
        ]);
        
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
    public function edit(pengguna $pengguna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pengguna $pengguna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengguna $pengguna)
    {
        //
    }
}
