<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_nilaibaku;
use Alert;

class TRNilaiBaku extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaibakus = tr_nilaibaku::paginate(5);
        return view('admins.TabelReferensi.TR.NilaiBaku', compact('nilaibakus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_nilaibaku::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('nilai.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('nilai.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_nilaibaku $nilai)
    {
        $nilai = tr_nilaibaku::find($nilai->id);
        return view('admins.TabelReferensi.EditTR.EditNilaiBaku', compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_nilaibaku $nilai)
    {
        $nilai = tr_nilaibaku::find($nilai->id);
        $nilai->update($request->all());
        if($nilai){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('nilai.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('nilai.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_nilaibaku $nilai)
    {
        //delete post
        $nilai->delete();

        //redirect to index
        if($nilai){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('nilai.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('nilai.index');
        }
    }
}
