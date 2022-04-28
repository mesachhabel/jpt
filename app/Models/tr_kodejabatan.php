<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\remunerasi;

class tr_kodejabatan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function remunerasi()
    {
        return $this->belongsTo('App\Models\remunerasi', 'kelas');
    }
}
