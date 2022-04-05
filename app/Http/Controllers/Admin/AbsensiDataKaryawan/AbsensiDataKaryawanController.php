<?php

namespace App\Http\Controllers\Admin\AbsensiDataKaryawan;

use App\Http\Controllers\Controller;
use App\Models\data_karyawan;
use App\Models\absensi_data_karyawan;
use Illuminate\Http\Request;
use Alert;
use DB;

class AbsensiDataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.AbsensiDataKaryawan.AbsensiDataKaryawans');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_karyawans = DB::table('data_karyawans')->groupBy('id')->get();
        return view('admins.AbsensiDataKaryawan.CreateAbsensiDataKaryawans',compact('data_karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=absensi_data_karyawan::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('absensi.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('absensi.create');
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
    function fetch(Request $request)
    {
    $select = $request->get('select');
    $value = $request->get('value');
    $dependent = $request->get('dependent');
    $data = DB::table('data_karyawans')
    ->where($select, $value)
    ->groupBy($dependent)
    ->get();
    foreach($data as $row)
    {
        $output = '<option value="'.$row->$dependent.'" name="nama" selected>'.ucfirst($row->$dependent).'</option>';
    }
    echo $output;
    }
}
