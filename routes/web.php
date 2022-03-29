<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataKaryawanController;
use App\Http\Controllers\Admin\AbsensiDataKaryawanController;
use App\Http\Controllers\Admin\TerimaPotongController;
use App\Http\Controllers\Admin\DataLemburController;
use App\Http\Controllers\Admin\TabelReferensiController;
use App\Http\Controllers\Admin\TRKeteranganSlipGajiController;
use App\Http\Controllers\Admin\TRKodeJabatanController;
use App\Http\Controllers\Admin\TRKodeStrukturController;
use App\Http\Controllers\Admin\TRKodeUnitKerjaController;
use App\Http\Controllers\Admin\TRSkalaGajiController;
use App\Http\Controllers\Admin\TRTerimaController;
use App\Http\Controllers\Admin\TRPotongController;
use App\Http\Controllers\Admin\TRAgama;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth']],function(){

    //Tabel Karyawan 
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('datakaryawan', [DataKaryawanController::class, 'index'])->name('admin.datakaryawan');
    Route::get('create-datakaryawan', [DataKaryawanController::class, 'create'])->name('admin.create-datakaryawan');
    Route::post('add-datakaryawan', [DatakaryawanController::class, 'store'])->name('admin.add-datakaryawan');
    Route::get('absensidatakaryawan', [AbsensiDataKaryawanController::class, 'index']);
    Route::get('create-absensidatakaryawan', [AbsensiDataKaryawanController::class, 'create']);
    Route::get('terimapotong', [TerimaPotongController::class, 'index']);
    Route::get('create-terimapotong', [TerimaPotongController::class, 'create']);
    Route::get('datalembur', [DataLemburController::class, 'index']);
    Route::get('create-datalembur', [DataLemburController::class, 'create']);
    Route::get('tabelreferensi', [TabelReferensiController::class, 'index']);

    // Tabel Referensi
    Route::get('edit-skalagaji', [TRSkalaGajiController::class, 'index']);
    Route::get('edit-kodeunitkerja', [TRKodeUnitKerjaController::class, 'index']);
    Route::get('edit-kodestruktur', [TRKodeStrukturController::class, 'index']);
    Route::get('edit-kodejabatan', [TRKodeJabatanController::class, 'index']);
    Route::get('edit-jenisterima', [TRTerimaController::class, 'index']);
    Route::get('edit-jenispotong', [TRPotongController::class, 'index']);
    Route::get('edit-keteranganslipgaji', [TRKeteranganSlipGajiController::class, 'index']);
    Route::get('edit-agama', [TRAgama::class, 'index']);
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
