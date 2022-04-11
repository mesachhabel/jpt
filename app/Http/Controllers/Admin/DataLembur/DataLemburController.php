<?php

namespace App\Http\Controllers\Admin\DataLembur;

use App\Http\Controllers\Controller;
use App\Models\absensi_data_karyawan;
use App\Models\data_lembur;
use DB;
use Alert;
use Illuminate\Http\Request;


class DataLemburController extends Controller
{
    public function index()
    {
        return view('admins.DataLembur.DataLemburs');
    }
    public function create()
    {
        $karyawans = DB::table('data_karyawans')->groupBy('nama')->get();
        $lemburs = data_lembur::latest()->paginate(3);
        return view('admins.DataLembur.CreateDataLemburs', compact('karyawans','lemburs'));
    }
    public function store(Request $request)
    {
        $masuk = data_lembur::create($request->all());
        if ($masuk) {
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('lembur.index');
        } else {
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('lembur.create');
        }
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
    public function destroy($id)
    {
        //
    }
// FUNCTION AJAX
    //Ajax CreateDataLemburs.blade.php
    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('data_karyawans')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        foreach ($data as $row) {
            $output = '<option value="' . $row->$dependent . '" name="nama" selected>' . ucfirst($row->$dependent) . '</option>';
        }
        echo $output;
    }
}
