<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJadwalRequest;
use App\Http\Requests\UpdateJadwalRequest;
use App\Models\Jadwal;
use App\Models\Tanaman;

class JadwalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::select('jadwals.*')->orderBy('jadwals.pembibitan')->get();
        $sequences = Tanaman::where('tanamans.sequence', '>=', 1)->select('tanamans.*')->orderBy('tanamans.sequence')->get();

        return view('jadwals.index', compact('jadwals', 'sequences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $varietas = Tanaman::all();
        return view('jadwals.create', compact('varietas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jadwal = new Jadwal();
        $jadwal->jenis_tanaman = $request->jenis_tanaman;
        $jadwal->pembibitan = $request->pembibitan;
        $jadwal->penyemaian = $request->penyemaian;
        $jadwal->panen = $request->panen;
        $jadwal->save();

        return redirect()->route('jadwals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('jadwals.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwals.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->jenis_tanaman = $request->jenis_tanaman;
        $jadwal->pembibitan = $request->pembibitan;
        $jadwal->penyemaian = $request->penyemaian;
        $jadwal->panen = $request->panen;
        $jadwal->save();

        return redirect()->route('jadwals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal::find($id)->delete();

        return redirect()->route('jadwals.index');
    }
}
