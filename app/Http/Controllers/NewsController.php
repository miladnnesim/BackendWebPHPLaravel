<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Toon alle nieuwsitems.
     */
    public function index()
    {
        $newsItems = News::latest()->get(); // Haal alle nieuwsitems op, gesorteerd op publicatiedatum
        return view('news.index', compact('newsItems'));
    }

    /**
     * Toon een specifiek nieuwsitem.
     */
    public function show($id)
    {
        $newsItem = News::findOrFail($id); // Haal een specifiek nieuwsitem op
        return view('news.show', compact('newsItem'));
    }

    /**
     * Admin: Voeg een nieuw nieuwsitem toe.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Sla een nieuw nieuwsitem op.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        // Opslaan van afbeelding
        $imagePath = $request->file('image')->store('news_images', 'public');

        // Nieuwsitem opslaan
        News::create([
            'title' => $validatedData['title'],
            'image' => $imagePath,
            'content' => $validatedData['content'],
            'publication_date' => now(),
        ]);

        return redirect()->route('news.index')->with('success', 'Nieuwsitem succesvol toegevoegd!');
    }

    /**
     * Verwijder een nieuwsitem.
     */
    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();

        return redirect()->route('news.index')->with('success', 'Nieuwsitem succesvol verwijderd!');
    }
}
