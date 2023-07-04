<?php

namespace App\Http\Controllers;

use App\Models\ReportMasuk;
use Illuminate\Http\Request;

class ReportMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Reportsurat()
    {
        $data = ReportMasuk::all();
        return view ('admin.reportsurat.suratmasuk.index', compact('data'));
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
    public function show(ReportMasuk $reportMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReportMasuk $reportMasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReportMasuk $reportMasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReportMasuk $reportMasuk)
    {
        //
    }
}
