<?php

namespace App\Http\Controllers\Admin\PelaporanData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;
use DB;
use App\Models\data_karyawan;
use App\Models\Tab_KeteranganSlip;
use App\Models\tr_nilaibaku;
use Illuminate\Support\Str;

class slipgajicontroller extends Controller
{
    public function index()
    {
        //Jumlah Direksi
        $klp = 'BOD';
        $count_bod = data_karyawan::where('klp', 'LIKE','%'.$klp.'%')->count();

        //Jumlah Komisaris
        $klp = 'BOC';
        $count_boc = data_karyawan::where('klp', 'LIKE','%'.$klp.'%')->count();

        //Jumlah Golongan Kelas 1
        $dataslipkelas1 = data_karyawan::with(['remunerasi'])->where('kelas', '1')->count();

        //Jumlah Golongan Kelas 2
        $dataslipkelas2 = data_karyawan::with(['remunerasi'])->where('kelas', '2')->count();

        //Jumlah Golongan Kelas 3
        $dataslipkelas3 = data_karyawan::with(['remunerasi'])->where('kelas', '3')->count();

        //Jumlah Golongan Kelas 4
        $dataslipkelas4 = data_karyawan::with(['remunerasi'])->where('kelas', '4')->count();

        //Jumlh Golongan Kelas 5
        $dataslipkelas5 = data_karyawan::with(['remunerasi'])->where('kelas', '5')->count();

        return view ('admins.PelaporanData.SlipGaji.SlipGaji',compact('count_bod','count_boc','dataslipkelas1','dataslipkelas2','dataslipkelas3','dataslipkelas4','dataslipkelas5'));
    }

    public function cetak($nik){
        //Pemanggilan Table
            $data = data_karyawan::with(['remunerasi'])->find($nik); //Pemanggilan Tabel Relasi Dari remunerasi
            $bpjs = data_karyawan::with(['nilaibaku'])->find($nik); //Pemanggilan Tabel Relasi Dari tr_nilaibaku
            $lembur = data_karyawan::with(['lembur'])->find($nik); //Pemanggilan Tabel Relasi Dari data_lembur
            //Keterangan Slip
                $keterangan = Tab_KeteranganSlip::all();
        //Months And Year TOday
            $today = Carbon::now(); //Tanggal Bulan Tahun Hari Ini
            $year = $today->year; //Pemanggilan Tahun
            $monthName = $today->format('F'); //Pemanggilan Bulan String

        //Beetween Tanggal Masuk kerja
            $beetween = Carbon::createFromDate($data->tmk)->diff(Carbon::now())->format('%y Tahun, %m Bulan'); //Mencari Masa kerja Efektif

        // Nilai Pensiun
            if ($data->ip == 1){
                $pensiun = 3000000;
            }
            else{
                $pensiun = 0;
            }
        
        //Penerimaan
            //Perhitungan 
                // Batas Maksimal BPJS Kesehatan 
                    $limit_sgp = $data->nilaibaku->max_bpjskes;
                    if ($data->sgp >= $limit_sgp){
                        $sgp = $limit_sgp;
                    }
                    else{
                        $sgp = $data->sgp;
                    }
                // Batas Maksimal JPP BPJS Ketenagakerjaan
                    $limit_jpp = $data->nilaibaku->max_bpjskt;
                    if ($data->sgp >= $limit_jpp){
                        $lim_jpp = $limit_jpp;
                    }
                    else{
                        $lim_jpp = $data->sgp;
                    }
                //Tunjangan
                    $perumkom = $data->remunerasi->tunj_perumahan + $data->remunerasi->tunj_komunikasi; //Tunjangan Perumahan Dan Komunikasi 
                    $total_tunj = $data->remunerasi->tunj_jabatan + $data->remunerasi->tunj_prestasi + $data->remunerasi->tunj_shift + $perumkom; //Total
                $jum_penghasilan = $total_tunj + $data->sgp; //Jumlah Penghasilan Tunjangan
                
                //Umum
                    //BPJS Kesehatan
                        $bpjskes_umum = $sgp * $data->nilaibaku->bpjskes_prs; //BPJS Kesehatan
                        $tambah_bpjs = $data->sgp + $bpjskes_umum; // Hasil Penjumlahan Gaji Pokok Dengan Hasil $pbjskes_umum
                    //BPJS Ketenagakerjaan
                        $jht = $data->sgp * $data->nilaibaku->jht_prs; //Jaminan Hari Tua
                        $jkk = $data->sgp * $data->nilaibaku->jkk; //Jaminan Kematian Keluarga
                        $jkm = $data->sgp * $data->nilaibaku->jkm; //Jaminan Kematian Meninggal
                        $jpp = $lim_jpp * $data->nilaibaku->jpp_prs; //Jaminan Pensiun
                        $bpjskt_umum = $jht + $jkk + $jkm + $jpp; //BPJS Ketenagakerjaan
                $sub_tot_umum = $bpjskes_umum + $bpjskt_umum; //Sub Total Umum
            // Total Penerimaan
                $total_penerimaan = $data->sgp + $total_tunj + $sub_tot_umum; //Total Penerimaan
        // End Penerimaan
        
        // Potongan
            //Umum
                //BPJS Kesehatan
                    $tambah_prs_peg = $data->nilaibaku->bpjskes_prs + $data->nilaibaku->bpjskes_peg; //Penambahan Persentase dari BPJSKES_prs Dengan BPJSKES_PEG
                    $bpjskes_pot = $sgp * $tambah_prs_peg; //Hasil Pemotongan Gaji Dengan Persentase Dari $tambah_prs_peg
                    $potong_bpjskes = $tambah_bpjs - $bpjskes_pot; //Pemotongan Hasil bpjskes_umum Dengan Hasil bpjskes_pot
                    $bpjskes_pot_bp = $sgp * $data->nilaibaku->bpjskes_prs; //Hasil Beban Beban Perusahaan
                    $bpjskes_pot_bk = $sgp * $data->nilaibaku->bpjskes_peg; //Hasil Beban Pegawai
                $sub_tot_bpjskes = $bpjskes_pot_bp + $bpjskes_pot_bk; //Jumlah hasil Potongan BPJS Kesehatan 
                //BPJS Ketenagakerjaan
                    $jht_peg = $data->sgp * $data->nilaibaku->jht_peg; //JHT Pegawai
                    $jpp_peg = $lim_jpp * $data->nilaibaku->jpp_peg; //JPP Pegawai
                    $jum_bebanpeg = $jpp_peg + $jht_peg; //Jumlah Beban Pegawai
                $sub_tot_bpjskt = $jum_bebanpeg + $bpjskt_umum; //Jumlah hasil Potongan BPJS Ketenagakerjaan
            //Total Potongan
                $total_potongan = $sub_tot_bpjskes + $sub_tot_bpjskt; //Total Potongan
        // End Potongan

        //Penerimaan Bersih
            $penerimaan_bersih = $total_penerimaan - $total_potongan; //Penerimaan Bersih
        return view ('admins.PelaporanData.SlipGaji.SG.CetakSlipGaji', 
        compact(
            'data',
            'year', 
            'monthName',
            'today',
            'beetween',
            'keterangan',
            'total_tunj',
            'jum_penghasilan',
            'perumkom',
            'bpjs',
            'bpjskes_umum',
            'bpjskes_pot',
            'potong_bpjskes',
            'bpjskes_pot_bp',
            'bpjskes_pot_bk',
            'sub_tot_bpjskes',
            'bpjskt_umum',
            'sub_tot_umum',
            'total_penerimaan',
            'jum_bebanpeg',
            'sub_tot_bpjskt',
            'total_potongan',
            'penerimaan_bersih',
        ));
    }

    //Slip Gaji Direksi
    public function slipdireksi()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipDireksi');
    }

    public function dataslipdireksi()
    {
        $klp = 'BOD';
        $dataslipdireksi = data_karyawan::where('klp', 'LIKE','%'.$klp.'%')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiDireksi', compact('dataslipdireksi'));
    }

    // Slip Gaji Komisaris
    public function slipkomisaris()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipKomisaris');
    }

    public function dataslipkomisaris()
    {
        $klp = 'BOC';
        $dataslipkomisaris = data_karyawan::where('klp', 'LIKE','%'.$klp.'%')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKomisaris', compact('dataslipkomisaris'));
    }

    // Slip Gaji Kelas 1
    public function slipkelas1()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipKelas1');
    }

    public function dataslipkelas1()
    {
        $dataslipkelas1 = data_karyawan::with(['remunerasi'])->where('kelas', '1')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas1', compact('dataslipkelas1'));
    }
    
    // Slip Gaji Kelas 2
    public function slipkelas2()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas2');
    }
    public function dataslipkelas2()
    {
        $dataslipkelas2 = data_karyawan::with(['remunerasi'])->where('kelas', '2')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas2', compact('dataslipkelas2'));
    }

    // Slip Gaji Kelas 3
    public function slipkelas3()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas3');
    }
    public function dataslipkelas3()
    {
        $dataslipkelas3 = data_karyawan::with(['remunerasi'])->where('kelas', '3')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas3', compact('dataslipkelas3'));
    }

    // Slip Gaji Kelas 4
    public function slipkelas4()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas3');
    }
    public function dataslipkelas4()
    {
        $dataslipkelas4 = data_karyawan::with(['remunerasi'])->where('kelas', '4')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas4', compact('dataslipkelas4'));
    }

    // Slip Gaji Kelas 5
    public function slipkelas5()
    {
        return view ('admins.PelaporanData.SlipGaji.SG.SlipGajiKelas5');
    }
    public function dataslipkelas5()
    {
        $dataslipkelas5 = data_karyawan::with(['remunerasi'])->where('kelas', '5')->get();
        return view ('admins.PelaporanData.SlipGaji.SG.DataSlipGajiKelas5', compact('dataslipkelas5'));
    }
}