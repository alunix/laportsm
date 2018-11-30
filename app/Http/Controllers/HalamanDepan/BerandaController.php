<?php

namespace App\Http\Controllers\HalamanDepan;

use Illuminate\Http\Request;
use App\Model\berita;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        $berita = berita::where('status', 1)->latest()->paginate(6);
        return view('HalamanDepan.beranda', compact('berita'));
    }
}
