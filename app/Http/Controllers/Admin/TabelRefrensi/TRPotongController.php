<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_potong;
use Alert;

class TRPotongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potongs = tr_potong::paginate(5);
        return view('admins.TabelReferensi.TR.JenisPotong', compact('potongs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=tr_potong::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('potong.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('potong.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_potong $potong)
    {
        $potong = tr_potong::find($potong->id);
        return view('admins.TabelReferensi.EditTR.EditJenisPotong', compact('potong'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_potong $potong)
    {
        $potong = tr_potong::find($potong->id);
        $potong->update($request->all());
        if($potong){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('potong.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('potong.edit', $potong->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tr_potong $potong)
    {
        //delete post
        $potong->delete();

        //redirect to index
        if($potong){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('potong.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('potong.index');
        }
    }
}
