<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LftController extends Controller
{
    public function index()
    {
        return view('lft' , [
            'scrims' => [
                [
                    'type' => 'Scrim',
                    'date' => '27/12/2024',
                    'start' => '20:00',
                    'end' => '22:00',
                    'players' => '5/5',
                    'languages' => 'nl, fr, en',
                    'rank' => 'Competitive',
                    'play_style' => 'Competitive'
                ],
                [
                    'type' => '5 stack',
                    'date' => '28/12/2024',
                    'start' => '20:00',
                    'end' => '22:00',
                    'players' => '5/5',
                    'languages' => 'nl, fr, en',
                    'rank' => 'Competitive',
                    'play_style' => 'Competitive'
                ],
                [
                    'type' => '10 man',
                    'date' => '30/12/2024',
                    'start' => '20:00',
                    'end' => '22:00',
                    'players' => '10/10',
                    'languages' => 'nl, fr, en',
                    'rank' => 'Competitive',
                    'play_style' => 'Fun'
                ]
            ],
            'duos' => [
                [
                    'player' => 'mYm WeeDYYYY #1111',
                    'rating' => 'Diamond 1',
                    'wants_to_play' => 'Competitive',
                    'language' => 'nl, fr, en'
                ],
                [
                    'player' => 'NLG C00chieツ #Tasty',
                    'rating' => 'Ascendant 1',
                    'wants_to_play' => 'Casual',
                    'language' => 'en'
                ],
                [
                    'player' => 'Peachie #Boo',
                    'rating' => 'Ascendant 2',
                    'wants_to_play' => 'Casual',
                    'language' => 'nl, fr'
                ]
            ]
        ]);
    }
}
