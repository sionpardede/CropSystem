<?php

namespace App\Http\Controllers;

use App\Models\Pupuk;
use App\Models\Tanaman;
use Illuminate\Http\Request;

class PupukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Tanaman::all();

        return view('pupuks.index', ['index' => $index]);
    }

    public function create($str)
    {
        $create = Pupuk::where('jenis_tanaman', 'like', $str)->first();

        return view('pupuks.create', ['create' => $create]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = Pupuk::where('jenis_tanaman', 'like', $request->jenis_tanaman)->first();
        $store->urea = $request->urea;
        $store->za = $request->za;
        $store->sp36 = $request->sp36;
        $store->kcl = $request->kcl;
        $store->npk = $request->npk;
        $store->dolomite = $request->dolomite;
        $store->zk = $request->zk;
        $store->organik = $request->organik;
        $store->kandang = $request->kandang;
        $store->hijau = $request->hijau;
        $store->kompos = $request->kompos;
        $store->hayati = $request->hayati;
        $store->humus = $request->humus;
        $store->save();

        $index = Tanaman::all();
        $pupuk = Pupuk::all();
        return view('pupuks.index', ['index' => $index, 'pupuk' => $pupuk]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
