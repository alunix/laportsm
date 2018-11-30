<?php

namespace App\Http\Controllers\HalamanDepan;

use Illuminate\Http\Request;
use App\Model\berita;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function berita(berita $berita)
    {
        return view('HalamanDepan.post',compact('berita'));
    }
}
