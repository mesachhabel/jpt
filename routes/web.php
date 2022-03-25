<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\AbsensiDataKaryawanController;
use App\Http\Controllers\TerimaPotongController;
use App\Http\Controllers\DataLemburController;
use App\Http\Controllers\TabelReferensiController;
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
