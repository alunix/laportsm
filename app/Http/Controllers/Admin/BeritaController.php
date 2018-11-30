<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\berita;
use App\Model\kategori;
use App\Model\tag;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $beritas = berita::all();
        return view('DashboardAdmin.berita.berita',compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = kategori::all();
        $tags = tag::all();
        return view('DashboardAdmin.berita.tulisberita', compact('kategoris','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'=>'required',
            'slug'=>'required',
            'detail'=>'required',
            'deskripsi'=>'required',
            'kategori'=>'required',
            'tag'=>'required',
            'detail'=>'required',
            'gambar'=>'required',
        ]);

        if ($request->hasFile('gambar')){
            $imageName = $request->gambar->store('public');
        }

        $berita = new berita;
        $berita->judul = $request->judul;
        $berita->gambar = $imageName;
        $berita->detail = $request->detail;
        $berita->deskripsi = $request->deskripsi;
        $berita->slug = $request->slug;
        $berita->status = $request->status;
        $berita->kategori = $request->kategori;
        $berita->tag = $request->tag;
        $berita->save();

        
        return redirect(route('berita.index'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoris = kategori::all();
        $tags = tag::all();
        $berita = berita::where('id',$id)->first();
        return view('DashboardAdmin.berita.editberita',compact('berita', 'kategoris','tags'));

        
        return redirect(route('berita.index'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'=>'required',
            'slug'=>'required',
            'detail'=>'required',
            'deskripsi'=>'required',
            'kategori'=>'required',
            'tag'=>'required',
            'detail'=>'required',
            'gambar'=>'required',
        ]);

        if ($request->hasFile('gambar')){
            $imageName = $request->gambar->store('public');
        }

        $berita = berita::find($id);
        $berita->judul = $request->judul;
        $berita->gambar = $imageName;
        $berita->detail = $request->detail;
        $berita->deskripsi = $request->deskripsi;
        $berita->slug = $request->slug;
        $berita->status = $request->status;
        $berita->kategori = $request->kategori;
        $berita->tag = $request->tag;
        $berita->save();

        
        return redirect(route('berita.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = berita::where('id',$id)->delete();
        return redirect()->back();
    }
}
