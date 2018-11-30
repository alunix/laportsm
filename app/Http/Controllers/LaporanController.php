<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\Model\kategori;
use App\Model\user\laporan;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans = laporan::where('user_id', Auth::user()->id)->paginate(10);
        return view('DashboardUser.Laporan.laporan', compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = kategori::all();
        return view('DashboardUser.Laporan.tulislaporan', compact('kategoris'));
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
            'judul'=> 'required',
            'kategori'=> 'required',
            'detail'=> 'required',
            // 'gambar'=> 'required',
        ]);

        // if ($request->hasFile('gambar')){
        //     $imageName = $request->gambar->store('public');
        
        
        $laporan = new laporan;
        $laporan->judul = $request->judul;
        $laporan->kategori = $request->kategori;
        $laporan->detail = $request->detail;
        // $laporan->gambar = $imageName;
        $laporan->user_id = Auth::user()->id;
        $laporan->save();

        return redirect(route('laporan.index'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = laporan::where('id',$id)->delete();
        return redirect()->back();
    }
}
