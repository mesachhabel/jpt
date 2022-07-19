<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\remunerasi;
use App\Models\tr_nilaibaku;
use App\Models\data_lembur;

class data_karyawan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'nik';

    public function Remunerasi()
    {
        return $this->belongsTo(remunerasi::class, 'remunarasi_id');
    }
    public function nilaibaku()
    {
        return $this->belongsTo(tr_nilaibaku::class, 'nilaibaku_id');
    }
    public function lemburs()
    {
        return $this->belongsTo(data_lembur::class, 'nik');
    }
}
