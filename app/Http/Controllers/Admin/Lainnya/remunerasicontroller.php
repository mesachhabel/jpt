<?php

namespace App\Http\Controllers\Admin\Lainnya;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\remunerasi;
use App\Models\tr_kodejabatan;
use Alert;
use DB;

class remunerasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remunerasis = remunerasi::paginate(5);
        $jabatan = tr_kodejabatan::all();
        return view('admins.Lainnya.remunerasi', compact('remunerasis','jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk=remunerasi::create($request->all());
        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('remunerasi.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('remunerasi.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(remunerasi $remunerasi)
    {
        $remunerasi = remunerasi::find($remunerasi->id);
        return view('admins.Lainnya.edit_remunerasi', compact('remunerasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,remunerasi $remunerasi)
    {
        $remunerasi = remunerasi::find($remunerasi->id);
        $remunerasi->update($request->all());
        if($remunerasi){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('remunerasi.index');
        }else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('remunerasi.edit', $remunerasi->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(remunerasi $remunerasi)
    {
        //delete post
        $remunerasi->delete();

        //redirect to index
        if($remunerasi){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('remunerasi.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('remunerasi.index');
        }
    }

    //Ajax remunerasu.blade.php
    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('tr_kodejabatans')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        foreach ($data as $row) {
            $output = '<option value="' . $row->$dependent . '" name="kelas" selected>' . ucfirst($row->$dependent) . '</option>';
        }
        echo $output;
    }
}
