<?php

namespace App\Http\Controllers;

use App\Models\instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = instansi::all();
        return view ('admin.setupmanagement.instansi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(instansi $instansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(instansi $instansi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, instansi $instansi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(instansi $instansi)
    {
        //
    }
}
