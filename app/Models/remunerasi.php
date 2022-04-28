<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tr_kodejabatan;

class remunerasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'kelas';

    public function tr_kodejabatan()
    {
        return $this->hasOne('App\Models\tr_kodejabatan');
    }
}
