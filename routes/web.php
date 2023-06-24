<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Models\instansi;
use App\Models\SuratMasuk;
use APP\Models\Pengguna;
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

Route::get('/', function() {
        return view('admin.dashboard.index');
});

Route::get('/dashboard', [DashboardController::class, "index"]);
Route::get('/unitkerja', [UnitKerjaController::class, "index"]);
Route::get('/tambahunitkerja', [UnitKerjaController::class, "create"]);
Route::post('/daftarunitkerja/store', [UnitKerjaController::class, "store"]);
Route::get('/pengguna', [PenggunaController::class, "index"]);
Route::get('/tambahpengguna', [PenggunaController::class, "create"]);
Route::post('/daftarpengguna/store', [PenggunaController::class, "store"]);
Route::get('/suratmasuk',[SuratMasukController::class, "index"]);
Route::get('/tambahsuratmasuk', [SuratMasukController::class, "create"]);
Route::post('/daftarsuratmasuk/store', [SuratMasukController::class, "store"]);
Route::get('/suratkeluar',[SuratKeluarController::class, "index"]);
Route::get('/tambahsuratkeluar', [SuratKeluarController::class, "create"]);
Route::post('/daftarsuratkeluar/store', [SuratKeluarController::class, "store"]);
Route::get('/instansi', [InstansiController::class, "index"]);