<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\data_karyawan;

class remunerasi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class,'id', 'remunarasi_id');
    }
}
