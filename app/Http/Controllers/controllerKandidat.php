<?php

namespace App\Http\Controllers;

use App\modelKandidat;
use App\modelPenilaian;
use Illuminate\Http\Request;

class controllerKandidat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelKandidat::all();
        return view('kaleya.penilaian.show')->with(['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kaleya.kandidat.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new modelKandidat();
        $data->nama = $request->nama;
        $data->nis = $request->nis;
        $data->save();
        return redirect('kandidat')->with('sweet-alert','<script> window.onload = swal("Sukses!", "Berhasil Menambahkan Data", "success")</script>');
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
        $data = modelPenilaian::where('id',$id)->first();
        $data->delete();
        return redirect('kandidat.index')->with('sweet-alert','Berhasil Menambahkan Data');
    }
}
