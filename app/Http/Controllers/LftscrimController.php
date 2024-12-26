<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scrim;

class LftscrimController extends Controller
{
    /**
     * Toon het formulier voor het organiseren van een scrim.
     */
    public function index()
    {
        return view('lftscrimform');
    }

    /**
     * Verwerk het formulier en sla een nieuwe scrim op.
     */
    public function store(Request $request)
    {
        $rankOrder = [
            'iron' => 1,
            'bronze' => 2,
            'silver' => 3,
            'gold' => 4,
            'platinum' => 5,
            'diamond' => 6,
            'ascendant' => 7,
            'immortal' => 8,
            'radiant' => 9,
        ];

        $validatedData = $request->validate([
            'type' => 'required|in:scrim,5stack,10man',
            'date' => 'required|date|after:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'players_needed' => 'required|integer|min:1|max:10',
            'language' => 'required|in:nl,fr,en,other',
            'min_rank' => 'required|in:' . implode(',', array_keys($rankOrder)),
            'max_rank' => 'required|in:' . implode(',', array_keys($rankOrder)),
            'notes' => 'nullable|string|max:500',
        ]);

        // Controleer rangvolgorde
        if ($rankOrder[$validatedData['min_rank']] > $rankOrder[$validatedData['max_rank']]) {
            return redirect()->back()->withErrors(['min_rank' => 'De minimumrang moet lager of gelijk zijn aan de maximumrang.']);
        }

        // Maak een nieuwe scrim aan
        $scrim = new Scrim();
        $scrim->type = $validatedData['type'];
        $scrim->date = $validatedData['date'];
        $scrim->start_time = $validatedData['start_time'];
        $scrim->end_time = $validatedData['end_time'];
        $scrim->players_needed = $validatedData['players_needed'];
        $scrim->language = $validatedData['language'];
        $scrim->min_rank = $validatedData['min_rank'];
        $scrim->max_rank = $validatedData['max_rank'];
        $scrim->notes = $validatedData['notes'] ?? null;
        $scrim->save();

        return redirect()->route('lft')->with('success', 'De scrim is succesvol aangemaakt!');
    }

    /**
     * Laat een gebruiker deelnemen aan een scrim.
     */
    public function join($scrimId)
    {
        $scrim = Scrim::findOrFail($scrimId);

        // Controleer of de gebruiker al deelnemer is
        if ($scrim->participants()->where('user_id', auth()->id())->exists()) {
            return redirect()->route('lft')->with('error', 'Je bent al deelnemer van deze scrim.');
        }

        // Voeg de gebruiker toe als deelnemer
        $scrim->participants()->attach(auth()->id());

        return redirect()->route('lft')->with('success', 'Je hebt succesvol deelgenomen aan de scrim!');
    }
}
