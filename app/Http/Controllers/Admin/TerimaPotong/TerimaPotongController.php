<?php

namespace App\Http\Controllers\Admin\TerimaPotong;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\terima_potong;
use App\Models\data_karyawans;
use Alert;

class TerimaPotongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $terimapotongs = terima_potong::latest()->paginate(5);
        if($request->has('bulan')){
            $terimapotongs = terima_potong::where('bulan','LIKE','%'.$request->bulan.'%')->get();
        }
        else{
            $terimapotongs = terima_potong::all();
        }
        return view('admins.TerimaPotong.TerimaPotongs', compact('terimapotongs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_karyawans = DB::table('data_karyawans')->groupBy('nik')->get();
        $potongs = terima_potong::latest()->paginate(3);
        return view('admins.TerimaPotong.CreateTerimaPotongs', compact('potongs','data_karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=terima_potong::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('terimapotong.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('terimapotong.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(terima_potong $terimapotong)
    {
        $terimapotong = terima_potong::find($terimapotong->id);
        return view('admins.TerimaPotong.EditTerimaPotongs', compact('terimapotong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, terima_potong $terimapotong)
    {
        $terimapotong = terima_potong::find($terimapotong->id);
        $terimapotong->update($request->all());
        if ($terimapotong) {
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('terimapotong.index');
        } else {
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('terimapotong.edit', $terimapotong->id);
        }
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
