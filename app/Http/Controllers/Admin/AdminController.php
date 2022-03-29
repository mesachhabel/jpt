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
    public function profile()
    {
        return view('dashboards.admins.profile');
    }
    public function settings()
    {
        return view('dashboards.admins.settings');
    }
    // public function registers(Request $request)
    // {
    //     \App\Models\User::create($request->all());
    //     return view('auth.register');
    // }
}
