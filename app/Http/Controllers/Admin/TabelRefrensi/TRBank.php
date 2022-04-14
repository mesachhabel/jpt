<?php

namespace App\Http\Controllers\Admin\TabelRefrensi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tr_bank;
use Alert;

class TRBank extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = tr_bank::paginate(5);
        return view('admins.TabelReferensi.TR.Bank', compact('banks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tr_bank::create($request->all());
        return redirect()->route('bank.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tr_bank $bank)
    {
        $bank = tr_bank::find($bank->id);
        return view('admins.TabelReferensi.EditTR.EditBank', compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,tr_bank $bank)
    {
        $bank = tr_bank::find($bank->id);
        $bank->update($request->all());
        if($bank){
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('bank.index');
        }
        else{
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('bank.edit');
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
