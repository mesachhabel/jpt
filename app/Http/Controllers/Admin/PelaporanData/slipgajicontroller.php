<?php

namespace App\Http\Controllers\Admin\PelaporanData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;

class slipgajicontroller extends Controller
{
    public function index()
    {
        return view ('admins.PelaporanData.SlipGaji.SlipGaji');
    }

    public function slipkomisaris()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKomisaris');
    }
    
    public function slipdireksi()
    {
        $today = Carbon::now();
        $year = $today->year;
        $monthName = $today->format('F');
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiDireksi',compact('today','year','monthName'));
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
    public function destroy(tr_agama $agama)
    {
        
    }
}