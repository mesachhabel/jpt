<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_statustugas;
use Alert;

class TRStatusTugas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statustugas = tr_statustugas::paginate(5);
        return view('admins.TabelReferensi.TR.StatusTugas', compact('statustugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tr_statustugas::create($request->all());
        return redirect()->route('statustugas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_statustugas $statustugas)
    {
        $statustugas = tr_statustugas::find($statustugas->id);
        return view('admins.TabelReferensi.EditTR.EditStatusTugas', compact('statustugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_statustugas $statustugas)
    {
        $statustugas = tr_statustugas::find($statustugas->id);
        $statustugas->update($request->all());
        if($statustugas){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('statustugas.index');
        }
        else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('statustugas.edit', $statustugas->id);
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
