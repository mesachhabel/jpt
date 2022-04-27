<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_statuspegawai;

class tr_statuspegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'DR',
            'keteranganpegawai' => 'Direksi'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'KM',
            'keteranganpegawai' => 'Komisaris'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'OP',
            'keteranganpegawai' => 'Operasional'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'OS',
            'keteranganpegawai' => 'Outsourcing'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'TP',
            'keteranganpegawai' => 'Karaywan Tetap'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'TX',
            'keteranganpegawai' => 'PKWT Jasamarga'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'TY',
            'keteranganpegawai' => 'PKWT External'
        ]);
        tr_statuspegawai::create([
            'kodestatuspegawai' => 'TZ',
            'keteranganpegawai' => 'Tenaga Ahli'
        ]);
    }
}
