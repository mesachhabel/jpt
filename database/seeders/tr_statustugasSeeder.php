<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_statustugas_db;

class tr_statustugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_statustugas_db::create([
            'kode' => '00',
            'instansi' => 'PT Jasamarga Pandaan Tol',
            'bank' => '',
            'norek' => '',
            'atasnama' => '',
        ]);
        tr_statustugas_db::create([
            'kode' => '01',
            'instansi' => 'PT Jasa Marga (Persero) Tbk',
            'bank' => 'Bank Bukopin, Capem Kebon Sirih,Jakarta',
            'norek' => '101.8193.015',
            'atasnama' => 'PT Jamsostek (Persero) Cabang Kebon Sirih',
        ]);
        tr_statustugas_db::create([
            'kode' => '02',
            'instansi' => 'PT Trans Optima Luhur',
            'bank' => '',
            'norek' => '',
            'atasnama' => '',
        ]);
        tr_statustugas_db::create([
            'kode' => '03',
            'instansi' => 'PT Entrada Utama',
            'bank' => '',
            'norek' => '',
            'atasnama' => '',
        ]);
        tr_statustugas_db::create([
            'kode' => '04',
            'instansi' => 'PT Jalan Tol Kabupaten Pasuruan',
            'bank' => '',
            'norek' => '',
            'atasnama' => '',
        ]);
    }
}
