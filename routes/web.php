<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ReportKeluarController;
use App\Http\Controllers\ReportMasukController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// Dashboard
Route::get('/', [DashboardController::class, "index"])->name('dashboard');

// Unit Kerja
Route::group(['prefix' => 'unitkerja'], function () {
        Route::get('/', [UnitKerjaController::class, "index"])->name('unitkerja.index');
        Route::get('/create', [UnitKerjaController::class, "create"])->name('unitkerja.create');
        Route::post('/store', [UnitKerjaController::class, "store"])->name('unitkerja.store');
        Route::get('/{id}/edit', [UnitKerjaController::class, "edit"])->name('unitkerja.edit');
        Route::put('/{id}/update', [UnitKerjaController::class, "update"])->name('unitkerja.update');
        Route::delete('/{id}/delete', [UnitKerjaController::class, "destroy"])->name('unitkerja.destroy');
});

// Pengguna
Route::group(['prefix' => 'pengguna'], function () {
        Route::get('/', [PenggunaController::class, "index"])->name('pengguna.index');
        Route::get('/create', [PenggunaController::class, "create"])->name('pengguna.create');
        Route::post('/store', [PenggunaController::class, "store"])->name('pengguna.store');
        Route::get('/{id}/edit', [PenggunaController::class, "edit"])->name('pengguna.edit');
        Route::put('/{id}/update', [PenggunaController::class, "update"])->name('pengguna.update');
        Route::delete('/{id}/delete', [PenggunaController::class, "destroy"])->name('pengguna.destroy');
});

// Surat Masuk
Route::group(['prefix' => 'suratmasuk'], function () {
        Route::get('/', [SuratMasukController::class, "index"])->name('suratmasuk.index');
        Route::get('/create', [SuratMasukController::class, "create"])->name('suratmasuk.create');
        Route::post('/store', [SuratMasukController::class, "store"])->name('suratmasuk.store');
        Route::get('/{id}/edit', [SuratMasukController::class, 'edit'])->name('suratmasuk.edit');
        Route::put('/{id}/update', [SuratMasukController::class,'update'])->name('suratmasuk.update');
        Route::delete('/{id}/delete', [SuratMasukController::class,'destroy'])->name('suratmasuk.destroy');
});

// Surat Keluar
Route::group(['prefix' => 'suratkeluar'], function () {
        Route::get('/', [SuratKeluarController::class, "index"])->name('suratkeluar.index');
        Route::get('/create', [SuratKeluarController::class, "create"])->name('suratkeluar.create');
        Route::post('/store', [SuratKeluarController::class, "store"])->name('suratkeluar.store');
        Route::get('/{id}/edit', [SuratKeluarController::class, 'edit'])->name('suratkeluar.edit');
        Route::put('/{id}/update', [SuratKeluarController::class,'update'])->name('suratkeluar.update');
        Route::delete('/{id}/delete', [SuratKeluarController::class,'destroy'])->name('suratkeluar.destroy');
});

// Report Surat Masuk
Route::group(['prefix' => 'reportsuratmasuk'], function () {
        Route::get('/', [ReportMasukController::class, "index"])->name('reportsuratmasuk.index');
        Route::post('/store', [ReportMasukController::class, "store"])->name('reportsuratmasuk.store');
});

// Report Surat Keluar
Route::group(['prefix' => 'reportsuratkeluar'], function () {
        Route::get('/', [ReportKeluarController::class, "index"])->name('reportsuratkeluar.index');
        Route::post('/store', [ReportKeluarController::class, "store"])->name('reportsuratkeluar.store');
});
