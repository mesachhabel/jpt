<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tr_agama;

class data_karyawan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function tr_agamas()
    // {
    //     return $this->belongsToMany(tr_agama::class,'relasis','tr_agama_id','data_karyawan_id');
    // }
}
