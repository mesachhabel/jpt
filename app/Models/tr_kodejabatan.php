<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\remunerasi;
use App\Models\data_karyawan;

class tr_kodejabatan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function remunerasi()
    {
        return $this->belongsTo('App\Models\remunerasi', 'kelas');
    }

    public function data_karyawan()
    {
        return $this->hasMany('App\Models\tr_kodejabatan');
    }
}
