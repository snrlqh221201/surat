<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\PenggunaController;
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

Route::get('/', function() {
        return view('admin.dashboard.index');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, "index"]);

Route::get('/unitkerja', [UnitKerjaController::class, "index"])->name('unitkerja.index');
Route::get('/tambahunitkerja', [UnitKerjaController::class, "create"]);
Route::post('/daftarunitkerja/store', [UnitKerjaController::class, "store"]);
Route::get('/daftarunitkerja/{id}/edit', [UnitKerjaController::class, "edit"])->name('daftarunitkerja.edit');
Route::put('/daftarunitkerja/{id}/update', [UnitKerjaController::class, "update"])->name('unitkerja.update');
Route::delete('/daftarunitkerja/{id}/delete', [UnitKerjaController::class, "destroy"])->name('unitkerja.delete');

Route::get('/pengguna', [PenggunaController::class, "index"])->name('pengguna.index');
Route::get('/tambahpengguna', [PenggunaController::class, "create"]);
Route::post('/daftarpengguna/store', [PenggunaController::class, "store"]);
Route::get('/tambahpengguna/{id}/edit', [PenggunaController::class, "edit"])->name('tambahpengguna.edit');
Route::put('/tambahpengguna/{id}/update', [PenggunaController::class, "update"])->name('pengguna.update');

Route::get('/suratmasuk',[SuratMasukController::class, "index"])->name('suratmasuk');
Route::get('/tambahsuratmasuk', [SuratMasukController::class, "create"]);
Route::post('/daftarsuratmasuk/store', [SuratMasukController::class, "store"]);
Route::get('/suratmasuk/{id}/edit', [SuratMasukController::class, 'edit'])->name('suratmasuk.edit');
Route::put('/suratmasuk/{id}/update',[SuratMasukController::class,'update'])->name('suratmasuk.update');

Route::get('/suratkeluar',[SuratKeluarController::class, "index"])->name('suratkeluar');
Route::get('/tambahsuratkeluar', [SuratKeluarController::class, "create"]);
Route::post('/daftarsuratkeluar/store', [SuratKeluarController::class, "store"]);
Route::get('/suratkeluar/{id}/edit', [SuratKeluarController::class, 'edit'])->name('suratkeluar.edit');
Route::put('/suratkeluar/{id}/update',[SuratKeluarController::class,'update'])->name('suratkeluar.update');
Route::get('/reportsuratmasuk',[ReportMasukController::class, "Reportsurat"]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
