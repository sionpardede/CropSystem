<?php

namespace App\Http\Controllers;

//Y
use App\Http\Requests\UpdateTanamanRequest;
use App\Models\Jadwal;
use App\Models\KategoriTanaman;
use App\Models\Pupuk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Tanaman;

class TanamansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanamans = Tanaman::all();

        return view('tanamans.index', compact('tanamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('tanamans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tanaman = new Tanaman();
        $tanaman->kategori = $request->kategori;
        $tanaman->jenisTanaman = $request->jenisTanaman;
        $tanaman->caraTanam = $request->caraTanam;
        $tanaman->video = $request->video;
        $tanaman->ph = $request->ph;
        $tanaman->humidity = $request->humidity;
        $tanaman->temp = $request->temp;
        $tanaman->rainfall = $request->rainfall;
        $tanaman->land = $request->land;
        $tanaman->urea = $request->urea;
        $tanaman->za = $request->za;
        $tanaman->sp36 = $request->sp36;
        $tanaman->kcl = $request->kcl;
        $tanaman->npk = $request->npk;
        $tanaman->dolomite = $request->dolomite;
        $tanaman->zk = $request->zk;
        $tanaman->organik = $request->organik;
        $tanaman->kandang = $request->kandang;
        $tanaman->hijau = $request->hijau;
        $tanaman->kompos = $request->kompos;
        $tanaman->hayati = $request->hayati;
        $tanaman->humus = $request->humus;
        $tanaman->save();

        return redirect()->route('tanamans.index');
    }

    public function show($str)
    {
        $tanaman = Tanaman::where('jenisTanaman', $str)->first();

        return view('tanamans.show', ['tanaman' => $tanaman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tanaman $tanaman)
    {
        return view('tanamans.edit', compact('tanaman'));
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
        $tanaman = Tanaman::find($id);
        $tanaman->jenisTanaman = $request->jenisTanaman;
        $tanaman->caraTanam = $request->caraTanam;
        $tanaman->video = $request->video;
        $tanaman->ph = $request->ph;
        $tanaman->humidity = $request->humidity;
        $tanaman->temp = $request->temp;
        $tanaman->rainfall = $request->rainfall;
        $tanaman->land = $request->land;
        $tanaman->save();


        return redirect()->route('tanamans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tanaman $tanaman)
    {
        $tanaman->delete();

        return redirect()->route('tanamans.index');
    }

    public function detail($str)
    {
        //tanaman
        $tanamans = Tanaman::select('tanamans.*')->get();

        //jadwal penanaman
        $jadwals = Jadwal::where('jenis_tanaman', $str)->get();

        $today = date("Y-m-d");
        $date = Jadwal::all();

        return view('tanamans.detail', ['date' => $date, 'today' => $today, 'tanamans' => $tanamans, 'jadwals' => $jadwals]);
    }
}
