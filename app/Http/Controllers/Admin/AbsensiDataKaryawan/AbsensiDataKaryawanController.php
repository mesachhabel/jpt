<?php

namespace App\Http\Controllers\Admin\AbsensiDataKaryawan;

use App\Http\Controllers\Controller;
use App\Models\data_karyawan;
use App\Models\absensi_data_karyawan;
use Illuminate\Http\Request;
use Alert;
use DB;

class AbsensiDataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $absensis = absensi_data_karyawan::paginate(5);
        return view('admins.AbsensiDataKaryawan.AbsensiDataKaryawans', compact('absensis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_karyawans = DB::table('data_karyawans')->groupBy('nik')->get();
        return view('admins.AbsensiDataKaryawan.CreateAbsensiDataKaryawans', compact('data_karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk = absensi_data_karyawan::create($request->all());
        if ($masuk) {
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('absensi.index');
        } else {
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('absensi.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(absensi_data_karyawan $absensi)
    {
        $absensi = absensi_data_karyawan::find($absensi->id);
        return view('admins.AbsensiDataKaryawan.EditAbsensiDataKaryawans', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,absensi_data_karyawan $absensi)
    {
        $absensi = absensi_data_karyawan::find($absensi->id);
        $absensi->update($request->all());
        if ($absensi) {
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('absensi.index');
        } else {
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('absensi.edit', $absensi->id);
        }
    }
    public function delete($id)
    {
        $absensi =   absensi_data_karyawan::find($id);
        $absensi->delete();
        //redirect to index
        if($absensi){
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('absensi.index');
        }else{
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('absensi.index');
        }
    }

// FUNCTION AJAX
    //Ajax CreateAbsensiDataKaryawan.blade.php
    function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('data_karyawans')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        foreach ($data as $row) {
            $output = '<option value="' . $row->$dependent . '" name="nama" selected>' . ucfirst($row->$dependent) . '</option>';
        }
        echo $output;
    }

    //Ajax Di Halaman AbsensiDataKaryawan.blade.php
    public function action(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $query1 = $request->get('query1');
            if($query1 != '')
            {
                $absensis = absensi_data_karyawan::Where('bulantahun', 'LIKE', '%'.$query1.'%')
                ->orderBy('bulantahun', 'asc')->get();
            }
            else
            {
                $absensis = absensi_data_karyawan::latest()->get();
            }
            $total_row1 = $absensis->count();
            if($total_row1 > 0)
            {
                $no = 1;
                foreach($absensis as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$no++.'</td>
                        <td>'.$row->bulantahun.'</td>
                        <td><strong>'.$row->nik.'</strong>
                        <i class=" fa-lg text-danger me-3"></i>
                        </td>
                        <td>'.$row->nama.'</td>
                        <td>'.$row->telat.'</td>
                        <td>'.$row->plgcpt.'</td>
                        <td>'.$row->alpha.'</td>
                        <td>'.$row->ijin.'</td>
                        <td>'.$row->sakit.'</td>
                        <td>'.$row->dnsluar.'</td>
                        <td>'.$row->cuti.'</td>
                        <td>
                            <a href="'.route('absensi.edit', $row->id).'" class="btn btn-warning btn-sm">Edit</a>
                            <a href="'.route('absensi.delete', $row->id).'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                        </td>                 
                    </tr>
                    ';
                }
            }
            else
            {
            $output = '
            <tr>
                <td align="center" colspan="15"><strong> No Data Found </strong></td>
            </tr>
            ';
            }
            $absensis = array('table_data1' => $output);
            echo json_encode($absensis);
        }
    }
}
