<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Toon nieuwsitems op de homepage.
     */
    public function index()
    {
        $newsItems = News::latest()->get(); // Haal alle nieuwsitems op, gesorteerd op datum
        return view('home', compact('newsItems')); // Laadt de home.blade.php view
    }
    public function show($id)
    {
        $newsItem = News::findOrFail($id); 
        return view('news.show', compact('newsItem'));
    }

    /**
     * Admin: Toon het formulier om nieuwsitems te maken.
     */
    public function create()
    {
        return view('admin.news.create'); // Specifieke view voor het maken van nieuws
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

        // Afbeelding opslaan
        $imagePath = $request->file('image')->store('news_images', 'public');

        // Nieuw item maken
        News::create([
            'title' => $validatedData['title'],
            'image' => $imagePath,
            'content' => $validatedData['content'],
            'publication_date' => now(),
        ]);

        return redirect()->route('home')->with('success', 'Nieuwsitem succesvol toegevoegd!');
    }

    /**
     * Verwijder een nieuwsitem.
     */
    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();

        return redirect()->route('home')->with('success', 'Nieuwsitem succesvol verwijderd!');
    }
}
