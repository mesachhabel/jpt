<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DataKaryawan\DataKaryawanController;
use App\Http\Controllers\Admin\AbsensiDataKaryawan\AbsensiDataKaryawanController;
use App\Http\Controllers\Admin\TerimaPotong\TerimaPotongController;
use App\Http\Controllers\Admin\DataLembur\DataLemburController;
use App\Http\Controllers\Admin\TabelRefrensi\TabelReferensiController;
use App\Http\Controllers\Admin\TabelRefrensi\TRKeteranganSlipGajiController;
use App\Http\Controllers\Admin\TabelRefrensi\TRKodeJabatanController;
use App\Http\Controllers\Admin\TabelRefrensi\TRKodeStrukturController;
use App\Http\Controllers\Admin\TabelRefrensi\TRKodeUnitKerjaController;
use App\Http\Controllers\Admin\TabelRefrensi\TRSkalaGajiController;
use App\Http\Controllers\Admin\TabelRefrensi\TRTerimaController;
use App\Http\Controllers\Admin\TabelRefrensi\TRPotongController;
use App\Http\Controllers\Admin\TabelRefrensi\TRAgama;
use App\Http\Controllers\Admin\TabelRefrensi\TRNilaiBaku;
use App\Http\Controllers\Admin\TabelRefrensi\TRPenandatangan;
use App\Http\Controllers\Admin\TabelRefrensi\TRBankTransfer;
use App\Http\Controllers\Admin\TabelRefrensi\TRStatusPegawai;
use App\Http\Controllers\Admin\TabelRefrensi\TRStatusTugas;
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
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {

    //Tabel Karyawan 
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('datakaryawan', [DataKaryawanController::class, 'index'])->name('admin.datakaryawan');
    Route::get('create-datakaryawan', [DataKaryawanController::class, 'create'])->name('admin.create-datakaryawan');
    Route::post('add-datakaryawan', [DatakaryawanController::class, 'store'])->name('admin.add-datakaryawan');
    Route::get('absensidatakaryawan', [AbsensiDataKaryawanController::class, 'index'])->name('admin.absensidatakaryawan');
    Route::get('create-absensidatakaryawan', [AbsensiDataKaryawanController::class, 'create'])->name('admin.create-absensidatakaryawan');
    Route::get('terimapotong', [TerimaPotongController::class, 'index'])->name('admin.terimapotong');
    Route::get('create-terimapotong', [TerimaPotongController::class, 'create'])->name('admin.create-terimapotong');
    Route::get('datalembur', [DataLemburController::class, 'index'])->name('admin.datalembur');
    Route::get('create-datalembur', [DataLemburController::class, 'create'])->name('admin.create-datalembur');
    Route::get('tabelreferensi', [TabelReferensiController::class, 'index'])->name('admin.tabelreferensi');

    // Tabel Referensi
    Route::get('edit-skalagaji', [TRSkalaGajiController::class, 'index'])->name('admin.edit-skalagaji');
    Route::get('edit-kodeunitkerja', [TRKodeUnitKerjaController::class, 'index'])->name('admin.edit-kodeunitkerja');
    Route::get('edit-kodestruktur', [TRKodeStrukturController::class, 'index'])->name('admin.edit-kodestruktur');
    Route::get('edit-kodejabatan', [TRKodeJabatanController::class, 'index'])->name('admin.edit-kodejabatan');
    Route::get('edit-jenisterima', [TRTerimaController::class, 'index'])->name('admin.edit-jenisterima');
    Route::get('edit-jenispotong', [TRPotongController::class, 'index'])->name('admin.edit-jenispotong');
    Route::get('edit-keteranganslipgaji', [TRKeteranganSlipGajiController::class, 'index'])->name('admin.edit-keteranganslipgaji');
    Route::get('edit-agama', [TRAgama::class, 'index'])->name('admin.edit-agama');
    Route::get('edit-nilaibaku', [TRNilaiBaku::class, 'index'])->name('admin.edit-nilaibaku');
    Route::get('edit-penandatangan', [TRPenandatangan::class, 'index'])->name('admin.edit-penandatangan');
    Route::get('edit-banktransfer', [TRBankTransfer::class, 'index'])->name('admin.edit-banktransfer');
    Route::get('edit-statuspegawai', [TRStatusPegawai::class, 'index'])->name('admin.edit-statuspegawai');
    Route::get('edit-statustugas', [TRStatusTugas::class, 'index'])->name('admin.edit-statustugas');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
