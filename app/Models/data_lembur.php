<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\data_karyawan;

class data_lembur extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'nik';

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class,'nik', 'nik');
    }
}
