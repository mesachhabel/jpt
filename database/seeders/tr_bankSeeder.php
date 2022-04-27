<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tr_bank;

class tr_bankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tr_bank::create([
            'kode' => '10',
            'bank' => 'BANK MANDIRI'
        ]);
        tr_bank::create([
            'kode' => '30',
            'bank' => 'BANK BCA'
        ]);
        tr_bank::create([
            'kode' => '20',
            'bank' => 'BANK BNI'
        ]);
        tr_bank::create([
            'kode' => '11',
            'bank' => 'BANK BRI'
        ]);
        tr_bank::create([
            'kode' => '50',
            'bank' => 'BANK SYARIAHINDONESIA'
        ]);
        tr_bank::create([
            'kode' => '13',
            'bank' => 'BANK PERMATA'
        ]);
        tr_bank::create([
            'kode' => '40',
            'bank' => 'BANK JATIM'
        ]);
        tr_bank::create([
            'kode' => '99',
            'bank' => 'TUNAI'
        ]);
    }
}
