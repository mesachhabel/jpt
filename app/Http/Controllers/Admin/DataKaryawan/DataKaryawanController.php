<?php

namespace App\Http\Controllers\Admin\DataKaryawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_karyawan;
use Illuminate\Support\Facades\Storage;
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
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        $masuk = data_karyawan::create([
            'image'     => $image->hashName(),
            'nama'      => $request->nama,
            'nik'       => $request->nik,
            'nppi'      => $request->nppi,
            'jk'        => $request->jk,
            'agama'     => $request->agama,
            'skk'       => $request->skk,
            'ia'        => $request->ia,
            'gi'        => $request->gi,
            'npwp'      => $request->npwp,
            'nktp'      => $request->nktp,
            'nbpkt'     => $request->nbpkt,
            'nbpks'     => $request->nbpks,
            'tmk'       => $request->tmk,
            'ska'       => $request->ska,
            'jabatan'   => $request->jabatan,
            'gj'        => $request->gj,
            'bg'        => $request->bg,
            'as'        => $request->as,
            'uk'        => $request->uk,
            'auk'       => $request->auk,
            'so'        => $request->so,
            'bank'      => $request->bank,
            'norek'     => $request->norek,
            'an'        => $request->an,
            'ip'        => $request->ip,
            'sky'       => $request->sky,
            'tb'        => $request->tb,
        ]);

        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('data_karyawans.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('data_karyawans.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = data_karyawan::find($id);
        return view('admins.DataKaryawan.EditDataKaryawans', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, data_karyawan $post)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
            'image'     => $image->hashName(),
            'nama'      => $request->nama,
            'nik'       => $request->nik,
            'nppi'      => $request->nppi,
            'jk'        => $request->jk,
            'agama'     => $request->agama,
            'skk'       => $request->skk,
            'ia'        => $request->ia,
            'gi'        => $request->gi,
            'npwp'      => $request->npwp,
            'nktp'      => $request->nktp,
            'nbpkt'     => $request->nbpkt,
            'nbpks'     => $request->nbpks,
            'tmk'       => $request->tmk,
            'ska'       => $request->ska,
            'jabatan'   => $request->jabatan,
            'gj'        => $request->gj,
            'bg'        => $request->bg,
            'as'        => $request->as,
            'uk'        => $request->uk,
            'auk'       => $request->auk,
            'so'        => $request->so,
            'bank'      => $request->bank,
            'norek'     => $request->norek,
            'an'        => $request->an,
            'ip'        => $request->ip,
            'sky'       => $request->sky,
            'tb'        => $request->tb
            ]);

        } else {

            //update post without image
            $post->update([
            'nama'      => $request->nama,
            'nik'       => $request->nik,
            'nppi'      => $request->nppi,
            'jk'        => $request->jk,
            'agama'     => $request->agama,
            'skk'       => $request->skk,
            'ia'        => $request->ia,
            'gi'        => $request->gi,
            'npwp'      => $request->npwp,
            'nktp'      => $request->nktp,
            'nbpkt'     => $request->nbpkt,
            'nbpks'     => $request->nbpks,
            'tmk'       => $request->tmk,
            'ska'       => $request->ska,
            'jabatan'   => $request->jabatan,
            'gj'        => $request->gj,
            'bg'        => $request->bg,
            'as'        => $request->as,
            'uk'        => $request->uk,
            'auk'       => $request->auk,
            'so'        => $request->so,
            'bank'      => $request->bank,
            'norek'     => $request->norek,
            'an'        => $request->an,
            'ip'        => $request->ip,
            'sky'       => $request->sky,
            'tb'        => $request->tb,
            ]);
        }
        return redirect()->route('data_karyawans.index');
        // if($post){
        //     Alert::success('Data Berhasil Di Edit', 'Selamat');
        //     return redirect()->route('data_karyawans.index');
        // }else{
        //     Alert::error('Data Gagal Di Edit', 'Maaf');
        //     return redirect()->route('data_karyawans.edit');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_karyawan $post)
    {
         //delete image
         Storage::delete('public/posts/'. $post->image);

         //delete post
         $post->delete();

         if($post){
            Alert::success('Data Berhasil Di Hapus', 'Selamat');
            return redirect()->route('data_karyawans.index');
        }else{
            Alert::error('Data Gagal Di Hapus', 'Maaf');
            return redirect()->route('data_karyawans.index');
        }
    }
}
