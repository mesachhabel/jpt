<?php

namespace App\Http\Controllers\Admin\DataKaryawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data_karyawan;
use App\Models\tr_agama;
use App\Models\tr_bank;
use App\Models\tr_kodejabatan;
use Alert;
use Illuminate\Support\Facades\Storage;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = data_karyawan::latest()->paginate(5);
        return view('admins.DataKaryawan.DataKaryawans', compact('karyawans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agamas = tr_agama::all();
        $banks = tr_bank::all();
        $jabatan = tr_kodejabatan::all();
        return view('admins.DataKaryawan.CreateDataKaryawans',compact('agamas','banks','jabatan'));
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
            'nik'       => $request->nik,
            'nama'      => $request->nama,
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
            'klp'        => $request->klp,
            'sgp'        => $request->sgp,
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
            'nppin'     => $request->nppin,
            'goli'      => $request->goli,
            'phdp'      => $request->phdp,
            'ujsm'      => $request->ujsm,
            'phda'      => $request->phda
        ]);

        if($masuk){
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('karyawan.index');
        }else{
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('karyawan.create');
        }
    }

    public function edit(data_karyawan $karyawan)
    {
        $karyawan = data_karyawan::find($karyawan->nik);
        $jabatan = tr_kodejabatan::all();
        $banks = tr_bank::all();
        return view('admins.DataKaryawan.EditDataKaryawans', compact('karyawan','jabatan','banks'));
    }

    public function update(Request $request, data_karyawan $karyawan)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$karyawan->image);

            //update post with new image
            $karyawan->update([
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
            'klp'        => $request->klp,
            'sgp'        => $request->sgp,
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
            'nppin'     => $request->nppin,
            'goli'      => $request->goli,
            'phdp'      => $request->phdp,
            'ujsm'      => $request->ujsm,
            'phda'      => $request->phda
            ]);

        } else {

            //update post without image
            $karyawan->update([
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
            'klp'        => $request->klp,
            'sgp'        => $request->sgp,
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
            'nppin'     => $request->nppin,
            'goli'      => $request->goli,
            'phdp'      => $request->phdp,
            'ujsm'      => $request->ujsm,
            'phda'      => $request->phda
            ]);
        }
        if($karyawan){
            Alert::success('Data Berhasil Di Edit', 'Selamat');
            return redirect()->route('karyawan.index');
        }else{
            Alert::error('Data Gagal Di Edit', 'Maaf');
            return redirect()->route('karyawan.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(data_karyawan $karyawan)
    {
        $karyawan = data_karyawan::find($karyawan->nik);
        //delete image
        Storage::delete('public/posts/'. $karyawan->image);

        //delete post
        $karyawan->delete();

        //redirect to index
        if($karyawan){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('karyawan.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('karyawan.index');
        }
    }

    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = tr_kodejabatan::where($select, $value)
            ->groupBy($dependent)
            ->get();
        foreach ($data as $row) {
            $output = '<option value="' . $row->$dependent . '" name="kelas" selected>' . ucfirst($row->$dependent) . '</option>';
        }
        echo $output;
    }
}
