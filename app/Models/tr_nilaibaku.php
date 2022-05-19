<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\data_karyawan;

class tr_nilaibaku extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function data_karyawan()
    {
        return $this->hasMany(data_karyawan::class,'id', 'nilaibaku_id');
    }
}
