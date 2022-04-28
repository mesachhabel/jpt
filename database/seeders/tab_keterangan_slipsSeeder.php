<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tab_KeteranganSlip;

class tab_keterangan_slipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tab_KeteranganSlip::create([
            'Ur_Keterangan' => 'Jamsostek merupakan tunjangan yang dibayarkan Perusahaan',
        ]);
        Tab_KeteranganSlip::create([
            'Ur_Keterangan' => 'PPh 21 adalah jumlah Pajak yang seharusnya disetor ke Kantor Pajak',
        ]);
        Tab_KeteranganSlip::create([
            'Ur_Keterangan' => 'Rincian Potongan Santunan Duka :',
        ]);
        Tab_KeteranganSlip::create([
            'Ur_Keterangan' => '3 org Karyawan (Suderajat/06864, Abdurahman/10280, Imam Ansori/03693)',
        ]);
    }
}
