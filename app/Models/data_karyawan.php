<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\absensi_data_karyawan;

class data_karyawan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function absensi_data_karyawans()
    {
        return $this->hasmany(absensi_data_karyawan::class);
    }
}
