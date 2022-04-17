<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_kodestruktur;
use Alert;

class TRKodeStrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kodestrukturs = tr_kodestruktur::paginate(5);
        return view('admins.TabelReferensi.TR.KodeStruktur', compact('kodestrukturs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_kodestruktur::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('kodestruktur.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('kodestruktur.index');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_kodestruktur $kodestruktur)
    {
        $kodestruktur = tr_kodestruktur::find($kodestruktur->id);
        return view('admins.TabelReferensi.EditTR.EditKodeStruktur', compact('kodestruktur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_kodestruktur $kodestruktur)
    {
        $kodestruktur = tr_kodestruktur::find($kodestruktur->id);
        $kodestruktur->update($request->all());
        Alert::success('Data Berhasil Diubah', 'Selamat');
        return redirect()->route('kodestruktur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_kodestruktur $kodestruktur)
    {
        //delete post
        $kodestruktur->delete();

        //redirect to index
        if($kodestruktur){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('kodestruktur.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('kodestruktur.index');
        }
    }
}
