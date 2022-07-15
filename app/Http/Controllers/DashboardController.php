<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::now(); //TimeNow
        $HI = $today->format('H:i'); //Pemanggilan Jam dan Menit dalam bentuk String

        $count=DB::table('data_karyawans')->count();
        return view('dashboard',compact('count','HI'));
        // return view('dashboard');
    }
}
