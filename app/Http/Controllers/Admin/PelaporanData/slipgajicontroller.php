<?php

namespace App\Http\Controllers\Admin\PelaporanData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Knp\Snappy\Pdf;

class slipgajicontroller extends Controller
{
    public function index()
    {
        $pdf = 'admins/PelaporanData/SlipGaji';
        $snappy = new Pdf($pdf . '/vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');
        return $snappy->stream('SlipGaji.pdf');
        
    }
}
