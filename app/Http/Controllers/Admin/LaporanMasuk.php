<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanMasuk extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    
    public function index()
    {
        return view('DashboardAdmin.laporan.laporan');
    }
}
