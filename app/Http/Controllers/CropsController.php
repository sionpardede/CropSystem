<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCropRequest;
use App\Http\Requests\UpdateCropRequest;
use App\Models\Crop;

class CropsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date("Y-m-d");
        $date = Jadwal::all();

        $a = 0;
        foreach($date as $dates){
            if($dates->pembibitan <= $today && $today < $dates->panen){
                $str = $dates->jenis_tanaman;
                $a = 1;
            }
        }

        if($a == 1) {
            //tanaman
            $tanamans = Tanaman::where('tanamans.jenisTanaman', $str)->select('tanamans.*')->get();

            //jadwal penanaman
            $jadwals = Jadwal::where('jenis_tanaman', $str)->get();
        }else{
            $tanamans = Tanaman::select('tanamans.*')->get();
            $jadwals = Jadwal::first();
        }

        return view('crops.index', ['date'=>$date, 'today'=>$today,'tanamans'=>$tanamans ,'jadwals'=>$jadwals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCropRequest $request)
    {
        Crop::create($request->validated());

        return redirect()->route('crops.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Crop $crop)
    {
        return view('crops.show', compact('crop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Crop $crop)
    {
        return view('crops.edit', compact('crop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCropRequest $request, Crop $crop)
    {
        $crop->update($request->validate());

        return redirect()->route('crops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crop $crop)
    {
        $crop->delete();

        return redirect()->route('crops.index');
    }
}
