<?php

namespace App\Http\Controllers;

use App\Model\berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::where('status', 1)->latest()->paginate(6);   
        return view('DashboardUser.user',compact('berita'));
    }
}
