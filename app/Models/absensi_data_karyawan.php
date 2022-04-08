<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\data_karyawan;

class absensi_data_karyawan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function data_karyawans()
    {
        return $this->belongsTo(data_karyawan::class);
    }
}
