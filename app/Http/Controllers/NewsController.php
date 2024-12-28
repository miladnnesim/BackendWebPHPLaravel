<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
 
    public function index()
    {
        $newsItems = News::latest()->get(); 
        return view('home', compact('newsItems')); 
    }
    public function show($id)
    {
        $newsItem = News::findOrFail($id); 
        return view('news.show', compact('newsItem'));
    }

   
    public function create()
    {
        return view('admin.create');
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('news_images', 'public');

        News::create([
            'title' => $validatedData['title'],
            'image' => $imagePath,
            'content' => $validatedData['content'],
            'publication_date' => now(),
        ]);

        return redirect()->route('home')->with('success', 'Nieuwsitem succesvol toegevoegd!');
    }

   
    public function destroy($id)
    {
        $newsItem = News::findOrFail($id);
        $newsItem->delete();

        return redirect()->route('admin.news.index')->with('success', 'Nieuwsitem succesvol verwijderd!');
    }

    public function adminIndex()
    { 
    $newsItems = News::latest()->get(); // Haal alle nieuwsitems op
    return view('admin.news.index', compact('newsItems')); // Admin specifieke view
    }

}
