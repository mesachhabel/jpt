<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\data_lembur;

class data_lemburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        data_lembur::create([
            'bulan' => '2022-01',
            'nik' => '6434242',
            'nama' => 'John Doe',
            'ska' => 'Direksi',
            'npp' => '123456789',
            'tanggal_lembur' => '2022-07-19',
            'jumlah_jam_lembur' => 2,
            'jenis_hari_lembur' => 1,
            'jumlah_insentif' => 5,
            'nilai_insentif' => 6,
            'total_insentif' => 30,
        ]);
    }
}
