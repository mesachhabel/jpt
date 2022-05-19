<?php

namespace App\Http\Controllers\Admin\PelaporanData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use DB;
use App\Models\data_karyawan;
use App\Models\Tab_KeteranganSlip;
use App\Models\tr_nilaibaku;
use Illuminate\Support\Str;

class slipgajicontroller extends Controller
{
    public function index()
    {
        return view ('admins.PelaporanData.SlipGaji.SlipGaji');
    }

    //Slip Gaji Direksi
    public function slipdireksi()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipDireksi');
    }

    public function dataslipdireksi()
    {
        $klp = 'BOD';
        $dataslipdireksi = data_karyawan::where('klp', 'LIKE','%'.$klp.'%')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiDireksi', compact('dataslipdireksi'));
    }

    public function cetak($nik){
        //Pemanggilan Table
            $data=data_karyawan::with(['remunerasi'])->find($nik);
            $tunjangan = tr_nilaibaku::first();
        //Months And Year TOday
            $today = Carbon::now();
            $year = $today->year;
            $monthName = $today->format('F');

        //Beetween Tanggal Masuk kerja
            $beetween = Carbon::createFromDate($data->tmk)->diff(Carbon::now())->format('%y Tahun, %m Bulan');
        
        //Keterangan Slip
            $keterangan = Tab_KeteranganSlip::all();

        //Perhitungan Tunjangan
            $total_tunj = $data->remunerasi->tunj_jabatan + $data->remunerasi->tunj_perumahan;

        return view ('admins.PelaporanData.SlipGaji.SG.CetakSlipGaji', compact('data','total_tunj','tunjangan' ,'year', 'monthName','today','beetween','keterangan'));
    }

    // Slip Gaji Komisaris
    public function slipkomisaris()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipKomisaris');
    }

    public function dataslipkomisaris()
    {
        $klp = 'BOC';
        $dataslipkomisaris = data_karyawan::where('klp', 'LIKE','%'.$klp.'%')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKomisaris', compact('dataslipkomisaris'));
    }

    // Slip Gaji Kelas 1
    public function slipkelas1()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipKelas1');
    }

    public function dataslipkelas1()
    {
        $dataslipkelas1 = data_karyawan::with(['remunerasi'])->where('kelas', '1')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas1', compact('dataslipkelas1'));
    }
    
    // Slip Gaji Kelas 2
    public function slipkelas2()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas2');
    }
    public function dataslipkelas2()
    {
        $dataslipkelas2 = data_karyawan::with(['remunerasi'])->where('kelas', '2')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas2', compact('dataslipkelas2'));
    }

    // Slip Gaji Kelas 3
    public function slipkelas3()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas3');
    }
    public function dataslipkelas3()
    {
        $dataslipkelas3 = data_karyawan::with(['remunerasi'])->where('kelas', '3')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas3', compact('dataslipkelas3'));
    }

    // Slip Gaji Kelas 4
    public function slipkelas4()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas3');
    }
    public function dataslipkelas4()
    {
        $dataslipkelas4 = data_karyawan::with(['remunerasi'])->where('kelas', '4')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas4', compact('dataslipkelas4'));
    }

    // Slip Gaji Kelas 5
    public function slipkelas5()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas5');
    }
    public function dataslipkelas5()
    {
        $dataslipkelas5 = data_karyawan::with(['remunerasi'])->where('kelas', '5')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas5', compact('dataslipkelas5'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        
    }
}