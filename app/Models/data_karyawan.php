<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\remunerasi;

class data_karyawan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'nik';

    public function Remunerasi()
    {
        return $this->belongsTo(remunerasi::class, 'remunarasi_id');
    }
}
