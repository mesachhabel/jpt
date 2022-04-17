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
use App\Http\Controllers\Admin\TabelRefrensi\TRStatusTugasDB;
use App\Http\Controllers\Admin\PelaporanData\slipgajicontroller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});
route::get('daftar-ptjpt', [RegisterController::class,'showRegistrationForm'] );
route::post('register', [RegisterController::class,'register'] );

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {

    //Tabel Karyawan 
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/karyawan', DataKaryawanController::class);
    
    //Tabel Absensi Karyawan
    Route::resource('/absensi', AbsensiDataKaryawanController::class);
    route::get('/absensi/{id}/delete', [AbsensiDataKaryawanController::class,'delete'])->name('absensi.delete');
    Route::post('absensi/fetch', [AbsensiDataKaryawanController::class,'fetch'])->name('absensi.fetch');
    Route::get('/absensi_search/action', [AbsensiDataKaryawanController::class, 'action'])->name('absensi.action');
    
    //Tabel Terima Potong
    Route::resource('/terimapotong', TerimaPotongController::class);
    Route::post('/potong/fetch', [TerimaPotongController::class,'fetch'])->name('potong.fetch');
    
    //Tabel Data Lembur
    Route::resource('/lembur', DataLemburController::class);
    Route::post('/lembur/fetch', [DataLemburController::class,'fetch'])->name('lembur.fetch');

    //--------------Tabel Refrensi-------------------------
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
            Route::resource('/statustugasdb', TRStatusTugasDB::class);
//------------------End Tabel Refrensi----------------------------------

    //Pelaporan Data
        //Slip Gaji
        Route::resource('/slipgaji', slipgajicontroller::class);
            // //Direksi
            Route::get('/slipdireksi', [slipgajicontroller::class,'slipdireksi'])->name('slipgaji.slipdireksi');   
            Route::get('/dataslipdireksi', [slipgajicontroller::class,'dataslipdireksi'])->name('slipgaji.dataslipdireksi');   
            // //Komisaris
            Route::get('/slipkomisaris', [slipgajicontroller::class,'slipkomisaris'])->name('slipgaji.slipkomisaris');
            Route::get('/dataslipkomisaris', [slipgajicontroller::class,'dataslipkomisaris'])->name('slipgaji.dataslipkomisaris');
            //Karyawan Tetap
             Route::get('/slipkaryawantetap', [slipgajicontroller::class,'slipkaryawantetap'])->name('slipgaji.slipkaryawantetap');
    //End of Pelaporan Data
});


Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    
});
Route::group(['prefix' => 'editor', 'middleware' => ['isEditor', 'auth']], function () {
    
});