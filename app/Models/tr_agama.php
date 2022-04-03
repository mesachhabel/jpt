<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\data_karyawan;

class tr_agama extends Model
{
    use HasFactory;
    Protected $guarded = ['id'];

    // public function data_karyawans()
    // {
    //     return $this->belongsToMany(data_karyawan::class,'relasis','tr_agama_id','data_karyawan_id');
    // }
}
