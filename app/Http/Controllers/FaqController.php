<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Toon de FAQ-pagina.
     */
    public function index()
    {
        // Haal alle categorieën en hun gerelateerde FAQ's op
        $categories = Category::with('faqs')->get();

        // Retourneer de view en geef de data door
        return view('faq', compact('categories'));
    }

    /**
     * Admin: Toon het formulier om een nieuwe categorie of FAQ toe te voegen.
     */
    public function create()
    {
        $categories = Category::all();

        return view('faqcreate', compact('categories'));
    }

    /**
     * Admin: Sla een nieuwe categorie of FAQ op.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Voor categorieën
            'question' => 'nullable|string|max:255', // Voor FAQ's
            'answer' => 'nullable|string|max:2000', // Voor FAQ's
            'category_id' => 'nullable|exists:categories,id', // Relatie met categorie
        ]);

        if ($request->filled('name')) {
            // Voeg een nieuwe categorie toe
            Category::create(['name' => $validatedData['name']]);
        } elseif ($request->filled('question') && $request->filled('answer')) {
            // Voeg een nieuwe FAQ toe
            Faq::create([
                'question' => $validatedData['question'],
                'answer' => $validatedData['answer'],
                'category_id' => $validatedData['category_id'],
            ]);
        }

        return redirect()->route('faq')->with('success', 'Categorie of FAQ succesvol toegevoegd!');
    }

    /**
     * Admin: Verwijder een categorie of FAQ.
     */
    public function delete($id)
    {
        $faq = Faq::find($id);
        if ($faq) {
            $faq->delete();
        } else {
            $category = Category::find($id);
            if ($category) {
                $category->delete();
            }
        }

        return redirect()->route('faq')->with('success', 'Categorie of FAQ succesvol verwijderd!');
    }
}
