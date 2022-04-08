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
    public function edit($id)
    {
        return 'all posts';
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
    //Ajax Create
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
    //Ajax Index
    public function action(Request $request)
    {
        if($request->ajax()){
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $absensis = absensi_data_karyawan::where('nama', 'LIKE', '%'.$query.'%')
                ->orWhere('nik', 'LIKE', '%'.$query.'%')
                ->orWhere('bulantahun', 'LIKE', '%'.$query.'%')
                ->orderBy('bulantahun', 'asc')->get();
            }
            else
            {
                $absensis = absensi_data_karyawan::latest('bulantahun', 'asc')->get();
            }
            $total_row = $absensis->count();
            if($total_row > 0)
            {
                $no = 1;
                foreach($absensis as $row)
                {
                    $output .= '
                    <tr>
                        <td>'.$no++.'</td>
                        <td>'.$row->bulantahun.'</td>
                        <td><strong>'.$row->nik.'</strong>
                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
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
                            <a href="'.route('absensi.edit', $row->nik).'" class="btn btn-warning btn-sm">Edit</a>
                            <a href="'.route('absensi.delete', $row->nik).'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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
            $absensis = array('table_data' => $output);
            echo json_encode($absensis);
        }
    }
}
