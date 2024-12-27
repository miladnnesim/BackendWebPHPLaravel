<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scrim; 
use App\Models\Duo; 

class LftController extends Controller
{
    public function index()
    {

        $scrims = Scrim::with('participants')->get();
        $duos = Duo::all();

        return view('lft', compact('scrims', 'duos'));
    }
}
