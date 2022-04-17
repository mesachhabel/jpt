<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_kodeunitkerja;
use Alert;

class TRKodeUnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodeunitkerjas = tr_kodeunitkerja::paginate(5);
        return view('admins.TabelReferensi.TR.KodeUnitKerja',compact('kodeunitkerjas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tr_kodeunitkerja = tr_kodeunitkerja::create($request->all());
        if($tr_kodeunitkerja){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('kodeunitkerja.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('kodeunitkerja.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_kodeunitkerja $kodeunitkerja)
    {
        $kodeunitkerja = tr_kodeunitkerja::find($kodeunitkerja->id);
        return view('admins.TabelReferensi.EditTR.EditKodeUnitKerja',compact('kodeunitkerja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tr_kodeunitkerja $tr_kodeunitkerja)
    {
        $tr_kodeunitkerja->update($request->all());
        if($tr_kodeunitkerja){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('kodeunitkerja.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('kodeunitkerja.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_kodeunitkerja $kodeunitkerja)
    {
        $kodeunitkerja->delete();
        if($kodeunitkerja){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('kodeunitkerja.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('kodeunitkerja.index');
        }
    }
}
