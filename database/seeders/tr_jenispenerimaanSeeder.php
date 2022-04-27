<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_jenispenerimaan;

class tr_jenispenerimaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_jenispenerimaan::Create([
            'kode' => '1',
            'uraianpenerimaan' => 'THR'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '2',
            'uraianpenerimaan' => 'Jasa Produksi'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '3',
            'uraianpenerimaan' => 'Ongkos Cuti'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '4',
            'uraianpenerimaan' => 'Lembur'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '5',
            'uraianpenerimaan' => 'Premi Purna Jabatan'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '6',
            'uraianpenerimaan' => 'Rapel Gaji'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '7',
            'uraianpenerimaan' => 'Rapel BPJS Ketenagakerjaan (JKM, JKK, JHT)'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '8',
            'uraianpenerimaan' => 'Rapel Tunjangan'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '9',
            'uraianpenerimaan' => 'Tunjangan Pulsa'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '10',
            'uraianpenerimaan' => 'Tkomunkasi Direksi'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '11',
            'uraianpenerimaan' => 'Rapel THR'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '12',
            'uraianpenerimaan' => 'Honor Tugas Piket'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '13',
            'uraianpenerimaan' => 'Insentif'
        ]);
        tr_jenispenerimaan::Create([
            'kode' => '14',
            'uraianpenerimaan' => 'Insentif Pajak Penghasilan PPh21'
        ]);
    }
}
