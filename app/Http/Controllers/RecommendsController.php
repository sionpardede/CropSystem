<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommend;
use App\Models\Ph;
use App\Models\Musim;

class RecommendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musim = Musim::all();
        return view('recommends.index', compact('musim'));
    }

    public function getPhs($id)
    {
        $phs = Ph::where('musim_id', $id)->pluck("ph", "id");
        return json_encode($phs);
    }

    public function getData($id)
    {
        $data = Recommend::where("ph_id", $id)->get();
        return view('recommends.data_view', compact('data'));
    }
}
