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
use App\Http\Controllers\Admin\TabelRefrensi\TRBank;
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
    Route::resource('/karyawan', DataKaryawanController::class);
    
    //Tabel Absensi Karyawan
    Route::resource('/absensi', AbsensiDataKaryawanController::class);
    
    //Tabel Terima Potong
    Route::resource('/terimapotong', TerimaPotongController::class);
    
    //Tabel Data Lembur
    Route::resource('/lembur', DataLemburController::class);
    
    //Tabel Refrensi
    Route::resource('/refrensi', TabelReferensiController::class);
        //Tabel Referensi Skala Gaji
            Route::resource('/skalagaji', TRSkalaGajiController::class);
        //Tabel Referensi Kode Unit Kerja
            Route::resource('/kodeunitkerja', TRKodeUnitKerjaController::class);
        //Tabel Referensi Kode Jabatan
            Route::resource('/kodejabatan', TRKodeJabatanController::class);
        //Tabel Referensi Kode Struktur
            Route::resource('/kodestruktur', TRKodeStrukturController::class);
        //Tabel Referensi Keterangan Slip Gaji
            Route::resource('/keteranganslipgaji', TRKeteranganSlipGajiController::class);
        //Tabel Referensi Terima    
            Route::resource('/terima', TRTerimaController::class);
        //Tabel Referensi Potong
            Route::resource('/potong', TRPotongController::class);
        //Tabel Referensi Agama
            Route::resource('/agama', TRAgama::class);
        //Tabel Referensi Nilai Baku
            Route::resource('/nilai', TRNilaiBaku::class);
        //Tabel Referensi Penandatangan
            Route::resource('/penandatangan', TRPenandatangan::class);
        //Tabel Referensi Bank Transfer
            Route::resource('/bank', TRBank::class);
        //Tabel Referensi Status Pegawai
            Route::resource('/statuspegawai', TRStatusPegawai::class);
        //Tabel Referensi Status Tugas
            Route::resource('/statustugas', TRStatusTugas::class);

        // Route::get('show-skalagaji', [TRSkalaGajiController::class, 'index'])->name('admin.show-skalagaji');
            
        // Route::post('add-kodestruktur', [TRKodeStrukturController::class, 'store'])->name('admin.add-kodestruktur');
        // Route::get('show-kodejabatan', [TRKodeJabatanController::class, 'index'])->name('admin.show-kodejabatan');
        // Route::post('add-kodejabatan', [TRKodeJabatanController::class, 'store'])->name('admin.add-kodejabatan');
        // Route::get('show-jenisterima', [TRTerimaController::class, 'index'])->name('admin.show-jenisterima');
        // Route::post('add-jenisterima', [TRTerimaController::class, 'store'])->name('admin.add-jenisterima');
        // Route::get('show-jenispotong', [TRPotongController::class, 'index'])->name('admin.show-jenispotong');
        // Route::post('add-jenispotong', [TRPotongController::class, 'store'])->name('admin.add-jenispotong');
        // Route::get('show-keteranganslipgaji', [TRKeteranganSlipGajiController::class, 'index'])->name('admin.show-keteranganslipgaji');
        // Route::post('add-keteranganslipgaji', [TRKeteranganSlipGajiController::class, 'store'])->name('admin.add-keteranganslipgaji');
        // Route::get('show-agama', [TRAgama::class, 'index'])->name('admin.show-agama');
        // Route::post('add-agama', [TRAgama::class, 'store'])->name('admin.add-agama');

        // Route::get('edit-nilaibaku', [TRNilaiBaku::class, 'index'])->name('admin.edit-nilaibaku');
        // Route::get('edit-penandatangan', [TRPenandatangan::class, 'index'])->name('admin.edit-penandatangan');
        // Route::get('edit-banktransfer', [TRBankTransfer::class, 'index'])->name('admin.edit-banktransfer');
        // Route::get('edit-statuspegawai', [TRStatusPegawai::class, 'index'])->name('admin.edit-statuspegawai');
        // Route::get('edit-statustugas', [TRStatusTugas::class, 'index'])->name('admin.edit-statustugas');
});
