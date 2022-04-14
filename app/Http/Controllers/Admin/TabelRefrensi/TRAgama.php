<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_agama;
use Alert;

class TRAgama extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agamas = tr_agama::paginate(5);
        return view('admins.TabelReferensi.TR.Agama', compact('agamas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_agama::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('agama.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('agama.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_agama $agama)
    {
        $agama = tr_agama::find($agama->id);
        return view('admins.TabelReferensi.EditTR.EditAgama', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_agama $agama)
    {
        $agama = tr_agama::find($agama->id);
        $agama->update($request->all());
        if($agama){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('agama.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('agama.edit', $agama->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_agama $agama)
    {
        //delete post
        $agama->delete();

        //redirect to index
        if($agama){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('agama.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('agama.index');
        }
    }
}
