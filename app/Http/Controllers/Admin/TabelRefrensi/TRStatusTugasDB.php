<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_statustugas_db;
use Alert;
use DB;

class TRStatusTugasDB extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statustugasdbs = tr_statustugas_db::paginate(5);
        return view('admins.TabelReferensi.TR.StatusTugas', compact('statustugasdbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tr_statustugas_db::create($request->all());
        return redirect()->route('statustugasdb.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_statustugas_db $statustugasdb)
    {
        $statustugasdb = tr_statustugas_db::find($statustugasdb->id);
        return view('admins.TabelReferensi.EditTR.EditStatusTugas', compact('statustugasdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tr_statustugas_db $statustugasdb)
    {
        $statustugasdb = tr_statustugas_db::find($statustugasdb->id);
        $statustugasdb->update($request->all());
        if ($statustugasdb) {
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('statustugasdb.index');
        } else {
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('statustugasdb.edit', $statustugasdb->id);
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
