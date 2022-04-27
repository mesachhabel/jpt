<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_kodejabatan;

class tr_kodejabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_kodejabatan::create([
            'kelas' => 'BOC1',
            'jabatan' => 'Komisaris Utama',
            'klp' => 'BOC'
        ]);
        tr_kodejabatan::create([
            'kelas' => 'BOC2',
            'jabatan' => 'Anggota Dewan Komisaris',
            'klp' => 'BOC'
        ]);
        tr_kodejabatan::create([
            'kelas' => 'BOD1',
            'jabatan' => 'Direktur Utama',
            'klp' => 'BOD'
        ]);
        tr_kodejabatan::create([
            'kelas' => 'BOD2',
            'jabatan' => 'Direktur Keuangan',
            'klp' => 'BOD'
        ]);
        tr_kodejabatan::create([
            'kelas' => 'BOD3',
            'jabatan' => 'Direktur Umum',
            'klp' => 'BOD'
        ]);
        tr_kodejabatan::create([
            'kelas' => '1',
            'jabatan' => 'General Manager',
            'klp' => 'Struktural'
        ]);
        tr_kodejabatan::create([
            'kelas' => '2',
            'jabatan' => 'Manager',
            'klp' => 'Struktural'
        ]);
        tr_kodejabatan::create([
            'kelas' => '3',
            'jabatan' => 'Assistant Manager',
            'klp' => 'Fungsional'
        ]);
        tr_kodejabatan::create([
            'kelas' => '4',
            'jabatan' => 'Supervisor',
            'klp' => 'Struktural'
        ]);
        tr_kodejabatan::create([
            'kelas' => '4',
            'jabatan' => 'Senior Officer',
            'klp' => 'Fungsional'
        ]);
        tr_kodejabatan::create([
            'kelas' => '5',
            'jabatan' => 'Officer',
            'klp' => 'Fungsional'
        ]);
        tr_kodejabatan::create([
            'kelas' => '5',
            'jabatan' => 'Customer Service',
            'klp' => 'Fungsional'
        ]);
        tr_kodejabatan::create([
            'kelas' => '5',
            'jabatan' => 'Mobile Customer Service',
            'klp' => 'Fungsional'
        ]);
    }
}
