<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_kodejabatan;
use Alert;

class TRKodeJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodejabatans = tr_kodejabatan::paginate(5);
        return view('admins.TabelReferensi.TR.KodeJabatan',compact('kodejabatans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_kodejabatan::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('kodejabatan.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('kodejabatan.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_kodejabatan $kodejabatan)
    {
        $kodejabatan = tr_kodejabatan::find($kodejabatan->id);
        return view('admins.TabelReferensi.EditTR.EditKodeJabatan',compact('kodejabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_kodejabatan $kodejabatan)
    {
        $kodejabatan = tr_kodejabatan::find($kodejabatan->id);
        $kodejabatan->update($request->all());
        if($kodejabatan){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('kodejabatan.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('kodejabatan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_kodejabatan $kodejabatan)
    {
        //delete post
        $kodejabatan->delete();

        //redirect to index
        if($kodejabatan){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('kodejabatan.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('kodejabatan.index');
        }
    }
}
