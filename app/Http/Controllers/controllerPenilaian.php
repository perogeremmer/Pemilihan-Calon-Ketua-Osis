<?php

namespace App\Http\Controllers;

use App\modelPenilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllerPenilaian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $max = DB::table('penilaian')
            ->select(DB::raw('MAX(c1) as maxc1'),DB::raw('MAX(c2) as maxc2'),DB::raw('MAX(c3) as maxc3'),DB::raw('MAX(c4) as maxc4'),DB::raw('MAX(c5) as maxc5'))
            ->first();

        $bobot = [0.15, 0.20, 0.25, 0.20, 0.20];
        $data = modelPenilaian::all();

        foreach ($data as $dataz){
            $input = modelPenilaian::where('id',$dataz->id)->first();

            $r1 = ($dataz->c1)/($max->maxc1);
            $r2 = ($dataz->c2)/($max->maxc2);
            $r3 = ($dataz->c3)/($max->maxc3);
            $r4 = ($dataz->c4)/($max->maxc4);
            $r5 = ($dataz->c5)/($max->maxc5);

            $v = ($r1 * $bobot[0]) + ($r2 * $bobot[1]) + ($r3 * $bobot[2])+ ($r4 * $bobot[3])+ ($r5 * $bobot[4]);
            
            $input->total_nilai = $v;
            $input->save();
        }

        return redirect('kandidat')->with('sweet-alert','<script> window.onload = swal("Sukses!", "Berhasil Memberi Penilaian", "success")</script>');



    }

    public function scoreCalculate(){
        $max = DB::table('penilaian')
            ->select('penilaian.*',DB::raw('MAX(c1) as maxc1'),DB::raw('MAX(c2) as maxc2'),DB::raw('MAX(c3) as maxc3'),DB::raw('MAX(c4) as maxc4'),DB::raw('MAX(c5) as maxc5'))
            ->where('id', '4')
            ->first();

        dd($max);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $data = modelPenilaian::where('id',$id)->first();
        return view('kaleya.penilaian.add')->with(['data' => $data]);
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
        $data = modelPenilaian::where('id',$id)->first();

        $data->c1 = $request->c1;
        $data->c2 = $request->c2;
        $data->c3 = $request->c3;
        $data->c4 = $request->c4;
        $data->c5 = $request->c5;
        $data->save();
        return redirect('kandidat')->with('sweet-alert','<script> window.onload = swal("Sukses!", "Berhasil Memberi Penilaian", "success")</script>');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
