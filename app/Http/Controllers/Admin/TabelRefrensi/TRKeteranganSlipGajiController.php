<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_keteranganslipgaji;
use Alert;

class TRKeteranganSlipGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keteranganslipgajis = tr_keteranganslipgaji::paginate(5);
        return view('admins.TabelReferensi.TR.KeteranganSlipGaji', compact('keteranganslipgajis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_keteranganslipgaji::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('keteranganslipgaji.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('keteranganslipgaji.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_keteranganslipgaji $keteranganslipgaji)
    {
        $keteranganslipgaji=tr_keteranganslipgaji::find($keteranganslipgaji->id);
        return view('admins.TabelReferensi.EditTR.EditKeteranganSlipGaji', compact('keteranganslipgaji'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_keteranganslipgaji $keteranganslipgaji)
    {
        $keteranganslipgaji=tr_keteranganslipgaji::find($keteranganslipgaji->id);
        $keteranganslipgaji->update($request->all());
        if($keteranganslipgaji){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('keteranganslipgaji.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('keteranganslipgaji.edit',$keteranganslipgaji->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_keteranganslipgaji $keteranganslipgaji)
    {
        //delete post
        $keteranganslipgaji->delete();

        //redirect to index
        if($keteranganslipgaji){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('keteranganslipgaji.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('keteranganslipgaji.index');
        }
    }
}
