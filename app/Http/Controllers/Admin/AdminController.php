<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $count=DB::table('data_karyawans')->count();
        return view('dashboard',compact('count'));
        // return view('dashboard');
    }
}
