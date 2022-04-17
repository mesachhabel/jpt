<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_penandatangan;
use Alert;

class TRPenandatangan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penandatangans = tr_penandatangan::paginate(5);
        return view('admins.TabelReferensi.TR.Penandatangan', compact('penandatangans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tr_penandatangan::create($request->all());
        return redirect()->route('penandatangan.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_penandatangan $penandatangan)
    {
        $penandatangan = tr_penandatangan::find($penandatangan->id);
        return view('admins.TabelReferensi.EditTR.EditPenandatangan', compact('penandatangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_penandatangan $penandatangan)
    {
        $penandatangan = tr_penandatangan::find($penandatangan->id);
        $penandatangan->update($request->all());
        if($penandatangan){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('penandatangan.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('penandatangan.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_penandatangan $penandatangan)
    {
        $penandatangan->delete();
        if($penandatangan){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('penandatangan.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('penandatangan.index');
        }
    }
}
