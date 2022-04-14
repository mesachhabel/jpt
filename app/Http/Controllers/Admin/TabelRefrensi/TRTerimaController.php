<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_jenispenerimaan;
use Alert;

class TRTerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenispenerimaans = tr_jenispenerimaan::paginate(5);
        return view('admins.TabelReferensi.TR.JenisTerima', compact('jenispenerimaans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_jenispenerimaan::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('terima.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('terima.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_jenispenerimaan $terima)
    {
        $terima = tr_jenispenerimaan::find($terima->id);
        return view('admins.TabelReferensi.EditTR.EditJenisTerima',compact('terima'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_jenispenerimaan $terima)
    {
        $terima = tr_jenispenerimaan::find($terima->id);
        $terima->update($request->all());
        if($terima){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('terima.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('terima.edit',$terima->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_jenispenerimaan $terima)
    {
        //delete post
        $terima->delete();

        //redirect to index
        if($terima){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('terima.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('terima.index');
        }
    }
}
