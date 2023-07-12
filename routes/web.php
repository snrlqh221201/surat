<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ReportKeluarController;
use App\Http\Controllers\ReportMasukController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Models\instansi;
use App\Models\SuratMasuk;
use APP\Models\Pengguna;
use App\Models\ReportMasuk;
use App\Models\SuratKeluar;

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
Route::get('/', [DashboardController::class, "index"]);

// Unit Kerja
Route::get('/unitkerja', [UnitKerjaController::class, "index"])->name('unitkerja.index');
Route::get('/tambahunitkerja', [UnitKerjaController::class, "create"])->name('unitkerja.create');
Route::post('/daftarunitkerja/store', [UnitKerjaController::class, "store"])->name('unitkerja.store');
Route::get('/daftarunitkerja/{id}/edit', [UnitKerjaController::class, "edit"])->name('unitkerja.edit');
Route::put('/daftarunitkerja/{id}/update', [UnitKerjaController::class, "update"])->name('unitkerja.update');
Route::delete('/daftarunitkerja/{id}/delete', [UnitKerjaController::class, "destroy"])->name('unitkerja.destroy');

// Pengguna
Route::get('/pengguna', [PenggunaController::class, "index"])->name('pengguna.index');
Route::get('/tambahpengguna', [PenggunaController::class, "create"])->name('pengguna.create');
Route::post('/daftarpengguna/store', [PenggunaController::class, "store"])->name('pengguna.store');
Route::get('/tambahpengguna/{id}/edit', [PenggunaController::class, "edit"])->name('pengguna.edit');
Route::put('/tambahpengguna/{id}/update', [PenggunaController::class, "update"])->name('pengguna.update');
Route::delete('/tambahpengguna/{id}/delete', [PenggunaController::class, "destroy"])->name('pengguna.destroy');

// Surat Masuk
Route::get('/suratmasuk', [SuratMasukController::class, "index"])->name('suratmasuk.index');
Route::get('/tambahsuratmasuk', [SuratMasukController::class, "create"])->name('suratmasuk.create');
Route::post('/daftarsuratmasuk/store', [SuratMasukController::class, "store"])->name('suratmasuk.store');
Route::get('/suratmasuk/{id}/edit', [SuratMasukController::class, 'edit'])->name('suratmasuk.edit');
Route::put('/suratmasuk/{id}/update', [SuratMasukController::class,'update'])->name('suratmasuk.update');
Route::delete('/suratmasuk/{id}/delete', [SuratMasukController::class,'destroy'])->name('suratmasuk.destroy');

// Surat Keluar
Route::get('/suratkeluar', [SuratKeluarController::class, "index"])->name('suratkeluar.index');
Route::get('/tambahsuratkeluar', [SuratKeluarController::class, "create"])->name('suratkeluar.create');
Route::post('/daftarsuratkeluar/store', [SuratKeluarController::class, "store"])->name('suratkeluar.store');
Route::get('/suratkeluar/{id}/edit', [SuratKeluarController::class, 'edit'])->name('suratkeluar.edit');
Route::put('/suratkeluar/{id}/update', [SuratKeluarController::class,'update'])->name('suratkeluar.update');
Route::delete('/suratkeluar/{id}/delete', [SuratKeluarController::class,'destroy'])->name('suratkeluar.destroy');

// Report Surat Masuk
Route::get('/reportsuratmasuk', [ReportMasukController::class, "index"])->name('reportsuratmasuk.index');
Route::post('/reportsuratmasuk/store', [ReportMasukController::class, "store"])->name('reportsuratmasuk.store');

// Report Surat Keluar
Route::get('/reportsuratkeluar', [ReportKeluarController::class, "index"])->name('reportsuratkeluar.index');
Route::post('/reportsuratkeluar/store', [ReportKeluarController::class, "store"])->name('reportsuratkeluar.store');
