<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scrim;

class LftscrimController extends Controller
{

    public function index()
    {
        return view('lftscrimform');
    }


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

        if ($rankOrder[$validatedData['min_rank']] > $rankOrder[$validatedData['max_rank']]) {
            return redirect()->back()->withErrors(['min_rank' => 'De minimumrang moet lager of gelijk zijn aan de maximumrang.']);
        }

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


    public function join($scrimId)
    {
        $scrim = Scrim::findOrFail($scrimId);

        if ($scrim->participants()->where('user_id', auth()->id())->exists()) {
            return redirect()->route('lft')->with('error', 'Je bent al deelnemer van deze scrim.');
        }

        $scrim->participants()->attach(auth()->id());

        return redirect()->route('lft')->with('success', 'Je hebt succesvol deelgenomen aan de scrim!');
    }
    public function leave($scrimId)
{
    $scrim = Scrim::findOrFail($scrimId);

    if (!$scrim->participants()->where('user_id', auth()->id())->exists()) {
        return redirect()->route('lft')->with('error', 'Je bent geen deelnemer van deze scrim.');
    }

    $scrim->participants()->detach(auth()->id());

    return redirect()->route('lft')->with('success', 'Je hebt de scrim verlaten.');
}
}
