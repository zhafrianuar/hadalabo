<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;

class StationController extends Controller
{
    public function station(Station $station)
    {
        return view('station',compact('station'));
    }
}
