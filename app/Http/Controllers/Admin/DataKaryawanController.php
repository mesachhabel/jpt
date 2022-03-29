<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_karyawan;
use DB;
use Auth;
use Alert;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_karyawans = data_karyawan::paginate(5);
        return view('admins.DataKaryawan.DataKaryawans', compact('data_karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.DataKaryawan.CreateDataKaryawans');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk = data_karyawan::create($request->all());
        
        // //membuat validasi, jika tidak diisi maka akan menampilkan pesan error
        // $this->validate($request, [
        //     'image'          => 'required'
        // ]);

        // //mengambil data file yang diupload
        // $file           = $request->file('image');
        // //mengambil nama file
        // $nama_file      = $file->getClientOriginalName();

        // //memindahkan file ke folder tujuan
        // $file->move('images',$file->getClientOriginalName());


        // $upload = new Upload;
        // $upload->image= $nama_file;

        // //menyimpan data ke database
        // $upload->save();

        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('admin.datakaryawan');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('admin.datakaryawan');
        }
        // Alert()->success('Data Berhasil Masuk', 'Sukses');
        // Alert()->error('Data Gagal Masuk', 'Gagal');
        // return redirect()->route('admin.datakaryawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
