<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_nilaibaku;

class tr_nilaibakuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_nilaibaku::create([
            'st_peg' => 'DR',
            'st_tugas' => '00',
            'jkm' => 0.003,
            'jkk' => 0.0054,
            'jht_prs' => 0.057,
            'jht_peg' => 0.02,
            'max_bpjskes' => 12000000,
            'jpk' => 0.05,
            'bpjskes_prs' => 0.04,
            'bpjskes_peg' => 0.01,
            'max_bpjskt' => 9077600,
            'jpp_prs' => 0.02,
            'jpp_peg' => 0.01,
            'pajak_jamsostek' => 0.0084,
            'jamsostek' => 0.0654,
            'jams_prs' => 0.0454,
            'jams_peg' => 0.02,
            'menit_telat' => 10380.0,
            'hari_kerja' => 480.0,
            'purnajab_dir' => 0.0,
            'purna_karya' => 0.02,
            'dana_pensiun' => 0.03,
            'tarif_1' => 173.0,
            'tarif_2' => 0.0,
        ]);
    }
}
