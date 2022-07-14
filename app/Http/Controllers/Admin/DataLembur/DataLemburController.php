<?php

namespace App\Http\Controllers\Admin\DataLembur;

use App\Http\Controllers\Controller;
use App\Models\data_lembur;
use DB;
use Alert;
use Illuminate\Http\Request;


class DataLemburController extends Controller
{
    public function index(Request $request)
    {
        $lemburs = data_lembur::paginate(5);
        if($request->has('bulan')){
            $lemburs = data_lembur::where('bulan','LIKE','%'.$request->bulan.'%')->get();
        }
        else{
            $lemburs = data_lembur::all();
        }
        return view('admins.DataLembur.DataLemburs', compact('lemburs'));
    }

    public function create()
    {
        $karyawans = DB::table('data_karyawans')->groupBy('nik')->get();
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

    public function edit(data_lembur $lembur)
    {
        $lemburs = data_lembur::latest()->paginate(3);
        $lembur = data_lembur::find($lembur->id);
        return view('admins.DataLembur.EditDataLemburs', compact('lembur','lemburs'));
    }

    public function update(Request $request, data_lembur $lembur)
    {
        $lembur = data_lembur::find($lembur->id);
        $lembur->update($request->all());
        if ($lembur) {
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('lembur.index');
        } else {
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('lembur.edit', $lembur->id);
        }
    }

    public function destroy($id)
    {
        
    }

// FUNCTION AJAX
    //Ajax Di Halaman AbsensiDataKaryawan.blade.php
    public function filter(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $query2 = $request->get('query2');
            if($query2 != '')
            {
                $lembur = data_lembur::Where('bulan', 'LIKE', '%'.$query2.'%')
                ->orderBy('bulan', 'asc')->get();
            }
            else
            {
                $lembur = data_lembur::latest()->get();
            }
            $total_row2 = $lembur->count();
            if($total_row2 > 0)
            {
                $no = 1;
                foreach($lembur as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$no++.'</td>
                        <td>'.$row->bulan.'</td>
                        <td><strong>'.$row->nik.'</strong>
                        <i class=" fa-lg text-danger me-3"></i>
                        </td>
                        <td>'.$row->nama.'</td>
                        <td>'.$row->ska.'</td>
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
            $lembur = array('table_data2' => $output);
            echo json_encode($lembur);
        }
    }

    //Ajax for table npp
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

    //Ajax for table jabatan
    function fetch1(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dynamic = $request->get('dynamic');
        $data = DB::table('data_karyawans')
            ->where($select, $value)
            ->groupBy($dynamic)
            ->get();
        foreach ($data as $row) {
            $output = '<option value="' . $row->$dynamic . '" ska="ska" selected>' . ucfirst($row->$dynamic) . '</option>';
        }
        echo $output;
    }

    //Ajax for table nama
    function fetch2(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dynamic1 = $request->get('dynamic1');
        $data = DB::table('data_karyawans')
            ->where($select, $value)
            ->groupBy($dynamic1)
            ->get();
        foreach ($data as $row) {
            $output = '<option value="' . $row->$dynamic1 . '" nama="nama" selected>' . ucfirst($row->$dynamic1) . '</option>';
        }
        echo $output;
    }
}
