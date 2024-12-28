<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duo;

class LftduoController extends Controller
{
    public function index()
    {
        $duos = Duo::with('user')->latest()->get(); // Laadt alle Duo's samen met de bijbehorende gebruiker
        return view('lft', compact('duos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rank' => 'required|string',
            'type' => 'required|in:competitive,casual',
        ]);

        if (!auth()->user()->riot_id) {
            return redirect()->back()->with('errorDuo', 'Je moet een Riot ID hebben ingevuld om een duo te posten.');
        }

        $duo = new Duo();
        $duo->user_id = auth()->id();
        $duo->rank = $validatedData['rank'];
        $duo->type = $validatedData['type'];
        $duo->save();

        return redirect()->route('lft')->with('success', 'Je duo-post is succesvol aangemaakt!');
    }
}
