<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\absensi_data_karyawan;
use App\Models\tr_kodejabatan;

class data_karyawan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'nik';

    public function absensi_data_karyawans()
    {
        return $this->hasmany(absensi_data_karyawan::class);
    }

    public function tr_kodejabatan()
    {
        return $this->belongsTo('App\Models\tr_kodejabatan', 'kelas');
    }
}
