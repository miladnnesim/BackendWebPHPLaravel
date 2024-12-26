<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scrim; // Importeer het Scrim-model
use App\Models\Duo;  // Importeer het Duo-model

class LftController extends Controller
{
    public function index()
    {
        // Haal alle scrims en duo's op vanuit de database
        $scrims = Scrim::with('participants')->get();
        $duos = Duo::all();

        return view('lft', compact('scrims', 'duos'));
    }
}
