<?php

namespace App\Http\Controllers\Admin\PelaporanData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use App\Models\data_karyawan;

class slipgajicontroller extends Controller
{
    public function index()
    {
        return view ('admins.PelaporanData.SlipGaji.SlipGaji');
    }

    public function slipdireksi()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipDireksi');
    }

    public function dataslipdireksi()
    {
        $dataslipdireksi = data_karyawan::where('jabatan', 1)->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiDireksi', compact('dataslipdireksi'));
    }
    public function slipkomisaris()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipKomisaris');
    }

    public function dataslipkomisaris()
    {
        $dataslipkomisaris = data_karyawan::where('jabatan', 1)->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKomisaris', compact('dataslipkomisaris'));
    }
    public function slipkelas1()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipKelas1');
    }

    public function dataslipkelas1()
    {
        $dataslipkelas1 = data_karyawan::where('jabatan', 1)->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas1', compact('dataslipkelas1'));
    }
    
    public function slipkelas2()
    {
        $today = Carbon::now();
        $year = $today->year;
        $monthName = $today->format('F');
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas2',compact('today','year','monthName'));
    }
    public function dataslipkelas2()
    {
        $dataslipkelas2 = data_karyawan::where('jabatan', kelas2)->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas2', compact('dataslipkelas2'));
    }

    public function slipkelas3()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas3');
    }
    public function dataslipkelas3()
    {
        $dataslipkelas3 = data_karyawan::where('jabatan', 3)->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas3', compact('dataslipkelas3'));
    }

    public function slipkelas4()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas3');
    }
    public function dataslipkelas4()
    {
        $dataslipkelas4 = data_karyawan::where('jabatan', 4)->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas4', compact('dataslipkelas4'));
    }

    public function slipkelas5()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas5');
    }
    public function dataslipkelas5()
    {
        $dataslipkelas3 = data_karyawan::where('jabatan', 5)->get();
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