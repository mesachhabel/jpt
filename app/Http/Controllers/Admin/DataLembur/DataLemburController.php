<?php

namespace App\Http\Controllers\Admin\DataLembur;

use App\Http\Controllers\Controller;
use App\Models\data_lembur;
use DB;
use Alert;
use Illuminate\Http\Request;


class DataLemburController extends Controller
{
    public function index()
    {
        $lemburs = data_lembur::paginate(5);
        return view('admins.DataLembur.DataLemburs', compact('lemburs'));
    }
    public function create()
    {
        $karyawans = DB::table('data_karyawans')->groupBy('nama')->get();
        $lemburs = data_lembur::latest()->paginate(3);
        return view('admins.DataLembur.CreateDataLemburs', compact('karyawans','lemburs'));
    }
    public function store(Request $request)
    {
        $masuk = data_lembur::create($request->all());
        if ($masuk) {
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('lembur.index');
        } else {
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('lembur.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(data_lembur $lembur)
    {
        $lemburs = data_lembur::latest()->paginate(3);
        $lembur = data_lembur::find($lembur->id);
        return view('admins.DataLembur.EditDataLemburs', compact('lembur','lemburs'));
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
// FUNCTION AJAX
    //Ajax CreateDataLemburs.blade.php
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

    //Ajax Di Halaman DataLemburs.blade.php
    public function action(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $query2 = $request->get('query2');
            if($query2 != '')
            {
                $lemburs = data_lembur::where('nama', 'LIKE', '%'.$query2.'%')
                ->orWhere('nik', 'LIKE', '%'.$query2.'%')
                ->orWhere('bulan', 'LIKE', '%'.$query2.'%')
                ->orderBy('nama', 'asc')->get();
            }
            else
            {
                $lemburs = data_lembur::latest()->get();
            }
            $total_row2 = $lemburs->count();
            if($total_row2 > 0)
            {
                $no = 1;
                foreach($lemburs as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$no++.'</td>
                        <td>'.$row->bulan.'</td>
                        <td><strong>'.$row->nama.'</strong>
                        </td>
                        <td>'.$row->jabatan.'</td>
                        <td>'.$row->npp.'</td>
                        <td>'.$row->tanggal_lembur.'</td>
                        <td>'.$row->jumlah_jam_lembur.'</td>
                        <td>'.$row->jenis_hari_lembur.'</td>
                        <td>'.$row->jumlah_insentif.'</td>
                        <td>'.$row->nilai_insentif.'</td>
                        <td>'.$row->total_insentif.'</td>
                        <td>
                            <a href="'.route('lembur.edit', $row->id).'" class="btn btn-warning btn-sm">Edit</a>
                            <a href="'.route('lembur.delete', $row->id).'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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
                $lemburs = array('table_data2' => $output);
                echo json_encode($lemburs);
        }
    }
}
