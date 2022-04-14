<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_statuspegawai;
use Alert;

class TRStatusPegawai extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuspegawais = tr_statuspegawai::paginate(5);
        return view('admins.TabelReferensi.TR.StatusPegawai', compact('statuspegawais'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tr_statuspegawai::create($request->all());
        return redirect()->route('statuspegawai.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_statuspegawai $statuspegawai)
    {
        $statuspegawai = tr_statuspegawai::find($statuspegawai->id);
        return view('admins.TabelReferensi.EditTR.EditStatusPegawai', compact('statuspegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_statuspegawai $statuspegawai)
    {
        $statuspegawai = tr_statuspegawai::find($statuspegawai->id);
        $statuspegawai->update($request->all());
        if($statuspegawai){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('statuspegawai.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('statuspegawai.edit', $statuspegawai->id);
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
}
