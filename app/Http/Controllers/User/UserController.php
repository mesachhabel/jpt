<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $count=DB::table('data_karyawans')->count();
        return view('dashboard',compact('count'));
        // return view('dashboard');
    }
}
