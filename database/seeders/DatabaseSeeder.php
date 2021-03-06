<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            tr_agamaSeeder::class,
            tr_bankSeeder::class,
            tr_kodejabatanSeeder::class,
            tr_nilaibakuSeeder::class,
            tr_statuspegawaiSeeder::class,
            tr_statustugasSeeder::class,
            tr_jenispenerimaanSeeder::class,
            UserSeeder::class,
            tab_keterangan_slipsSeeder::class,
            remunerasiSeeder::class,
            data_karyawanSeeder::class,
            data_lemburSeeder::class,
        ]);
    }
}
