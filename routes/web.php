<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\AbsensiDataKaryawanController;
use App\Http\Controllers\TerimaPotongController;
use App\Http\Controllers\DataLemburController;
use App\Http\Controllers\TabelReferensiController;
use App\Http\Controllers\TRKeteranganSlipGajiController;
use App\Http\Controllers\TRKodeJabatanController;
use App\Http\Controllers\TRKodeStrukturController;
use App\Http\Controllers\TRKodeUnitKerjaController;
use App\Http\Controllers\TRSkalaGajiController;
use App\Http\Controllers\TRTerimaController;
use App\Http\Controllers\TRPotongController;
use App\Http\Controllers\TRAgama;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

Route::get('/datakaryawan', [DataKaryawanController::class, 'index']);
Route::get('/create-datakaryawan', [DataKaryawanController::class, 'create']);

Route::get('/absensidatakaryawan', [AbsensiDataKaryawanController::class, 'index']);
Route::get('/create-absensidatakaryawan', [AbsensiDataKaryawanController::class, 'create']);

Route::get('/terimapotong', [TerimaPotongController::class, 'index']);
Route::get('/create-terimapotong', [TerimaPotongController::class, 'create']);

Route::get('/datalembur', [DataLemburController::class, 'index']);
Route::get('/create-datalembur', [DataLemburController::class, 'create']);

Route::get('/tabelreferensi', [TabelReferensiController::class, 'index']);

// Tabel Referensi
Route::get('/edit-skalagaji', [TRSkalaGajiController::class, 'index']);

Route::get('/edit-kodeunitkerja', [TRKodeUnitKerjaController::class, 'index']);

Route::get('/edit-kodestruktur', [TRKodeStrukturController::class, 'index']);

Route::get('/edit-kodejabatan', [TRKodeJabatanController::class, 'index']);

Route::get('/edit-jenisterima', [TRTerimaController::class, 'index']);

Route::get('/edit-jenispotong', [TRPotongController::class, 'index']);

Route::get('/edit-keteranganslipgaji', [TRKeteranganSlipGajiController::class, 'index']);

Route::get('/edit-agama', [TRAgama::class, 'index']);
