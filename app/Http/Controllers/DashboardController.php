<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date("Y-m-d");
        $mintoday = str_replace('-', '/', $today);
        $yesterday = date("Y-m-d", strtotime($mintoday . "-1 days"));

        $farmer = User::all();



        $date = Jadwal::all();
        if ($comingUP = Jadwal::whereDate('pembibitan', '<', $today)->first()) {
            $dater = Jadwal::whereDate('pembibitan', '>', $comingUP->panen)->first();
        } else {
            $dater = Jadwal::whereDate('pembibitan', '>', $today)->first();
        }

        return view('dashboard', ['farmer' => $farmer, 'comingUP' => $comingUP, 'dater' => $dater, 'date' => $date, 'today' => $today, 'yesterday' => $yesterday]);
    }

    public function changeStatus($id)
    {
        $change = Jadwal::find($id);
        if ($change->status == "belum dibibit") {
            $change->status = "sudah dibibit";
        } else if ($change->status == "sudah dibibit") {
            $change->status = "sudah disemai";
        }
        $change->save();
        return redirect('dashboard');
    }
}
