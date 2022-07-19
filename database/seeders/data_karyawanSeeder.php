<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\data_karyawan;

class data_karyawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        data_karyawan::create([
            'nik' => '10062',
            'remunarasi_id' => 1,
            'nilaibaku_id' => 1,
            'nama' => 'Brahmo Wardhono Sudibyo',
            'nppi' => '123456789',
            'jk' => 'Laki-laki',
            'agama' => 'Islam',
            'skk' => '1',
            'ia' => 'PT. Jasamarga Pandaan Tol',
            'gi' => 1,
            'npwp' => '08.862.809.4.602.000',
            'nktp' => '123456789',
            'nbpkt' => '123456789',
            'nbpks' => '123456789',
            'tmk' => '2017-01-01',
            'ska' => 'Operasional',
            'klp' => 'Struktural',
            'kelas' => 1,
            'sgp' => 5000000,
            'uk' => 'CS',
            'suk' => 'Struktueal',
            'bank' => 'Bank Mandiri',
            'norek' => '123456789',
            'an' => 'John Doe',
            'ip' => 1,
            'is' => 0,
            'sky' => 1,
            'image' => '',
            'nppin' => '',
            'goli' => '',
            'phdp' => '',
            'ujsm' => '',
            'phda' => '',
        ]);
        data_karyawan::create([
            'nik' => '6434242',
            'remunarasi_id' => 1,
            'nilaibaku_id' => 1,
            'nama' => 'John Doe',
            'nppi' => '123456789',
            'jk' => 'Laki-laki',
            'agama' => 'Islam',
            'skk' => '1',
            'ia' => 'PT. Jasamarga Pandaan Tol',
            'gi' => 1,
            'npwp' => '123456789',
            'nktp' => '123456789',
            'nbpkt' => '123456789',
            'nbpks' => '123456789',
            'tmk' => '2017-01-01',
            'ska' => 'Direksi',
            'klp' => 'BOD',
            'kelas' => 'BOD1',
            'sgp' => 54320000,
            'uk' => 'CS',
            'suk' => 'Struktueal',
            'bank' => 'Bank Mandiri',
            'norek' => '123456789',
            'an' => 'John Doe',
            'ip' => 1,
            'is' => 0,
            'sky' => 1,
            'image' => '',
            'nppin' => '',
            'goli' => '',
            'phdp' => '',
            'ujsm' => '',
            'phda' => '',
        ]);

        data_karyawan::create([
            'nik' => '6434243',
            'remunarasi_id' => 1,
            'nilaibaku_id' => 1,
            'nama' => 'John Doe',
            'nppi' => '123456789',
            'jk' => 'Laki-laki',
            'agama' => 'Islam',
            'skk' => '1',
            'ia' => 'PT. Jasamarga Pandaan Tol',
            'gi' => 1,
            'npwp' => '123456789',
            'nktp' => '123456789',
            'nbpkt' => '123456789',
            'nbpks' => '123456789',
            'tmk' => '2017-01-01',
            'ska' => 'Direksi',
            'klp' => 'BOC',
            'kelas' => 'BOC1',
            'sgp' => 54320000,
            'uk' => 'CS',
            'suk' => 'Struktueal',
            'bank' => 'Bank Mandiri',
            'norek' => '123456789',
            'an' => 'John Doe',
            'ip' => 1,
            'is' => 0,
            'sky' => 1,
            'image' => '',
            'nppin' => '',
            'goli' => '',
            'phdp' => '',
            'ujsm' => '',
            'phda' => '',
        ]);
    }
}
