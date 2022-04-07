<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class slipgajicontroller extends Controller
{
    public function index()
    {
        $pdf = PDF::loadview('admins\PelaporanData\SlipGaji');
        return $pdf->stream('SlipGaji.pdf');
    }
}
