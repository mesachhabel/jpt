<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_agama;

class tr_agamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_agama::create([
            'kode' => '01',
            'namaagama' => 'Islam',
            'kodekelompok' => '01',
            'kelompok' => 'Islam',
        ]);
        tr_agama::create([
            'kode' => '02',
            'namaagama' => 'Kristen Katolik',
            'kodekelompok' => '02',
            'kelompok' => 'Kristen',
        ]);
        tr_agama::create([
            'kode' => '03',
            'namaagama' => 'Kristen Protestan',
            'kodekelompok' => '03',
            'kelompok' => 'Kristen',
        ]);
        tr_agama::create([
            'kode' => '04',
            'namaagama' => 'Budha',
            'kodekelompok' => '04',
            'kelompok' => 'Budha',
        ]);
        tr_agama::create([
            'kode' => '04',
            'namaagama' => 'Hindu',
            'kodekelompok' => '05',
            'kelompok' => 'Hindu',
        ]);
        tr_agama::create([
            'kode' => '06',
            'namaagama' => 'Konghucu',
            'kodekelompok' => '06',
            'kelompok' => 'Konghucu',
        ]);
    }
}
