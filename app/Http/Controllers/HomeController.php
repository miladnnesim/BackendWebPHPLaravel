<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Haal de laatste 3 nieuwsitems op, gesorteerd op publicatiedatum
        $newsItems = News::latest()->take(10)->get();

        return view('home', compact('newsItems'));
    }
}