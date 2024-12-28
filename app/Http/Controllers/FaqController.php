<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Faq;

class FaqController extends Controller
{


    public function index()
    {
        $categories = Category::with('faqs')->get();

        return view('faq', compact('categories'));
    }

 
    public function create()
    {
        $categories = Category::all();

        return view('faqcreate', compact('categories'));
    }

 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255', 
            'category_id' => 'nullable|exists:categories,id', 
            'question' => 'required|string|max:255',
        ]);
    
        if ($request->filled('name')) {
            $category = Category::create(['name' => $validatedData['name']]);
            $categoryId = $category->id; 
        } else {
            $categoryId = $validatedData['category_id']; 
        }
    
        // Voeg de vraag toe
        Faq::create([
            'question' => $validatedData['question'],
            'answer' => '', 
            'category_id' => $categoryId,
        ]);
        
    
        return redirect()->route('faq')->with('success', 'Je vraag is succesvol ingediend! Een admin zal binnenkort een antwoord toevoegen.');
    }
    public function storeAdmin(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'nullable|string|max:255', 
        'question' => 'nullable|string|max:255', 
        'answer' => 'nullable|string|max:2000', 
        'category_id' => 'nullable|exists:categories,id', 
    ]);

    if ($request->filled('name')) {
      
        $category = Category::create(['name' => $validatedData['name']]);
        $categoryId = $category->id;
    } elseif ($request->filled('category_id')) {
       
        $categoryId = $validatedData['category_id'];
    } else {
        return redirect()->route('admin.faq.index')->with('error', 'Je moet een categorie selecteren of een nieuwe categorie toevoegen.');
    }

    if ($request->filled('question')) {
      
        Faq::create([
            'question' => $validatedData['question'],
            'answer' => $validatedData['answer'] ?? null, 
            'category_id' => $categoryId,
        ]);
    }

    return redirect()->route('admin.faq.index')->with('success', 'De FAQ is succesvol toegevoegd!');
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

    return redirect()->route('admin.faq.index')->with('success', 'Categorie of FAQ succesvol verwijderd!');
}

    public function indexAdmin()
    {
        // Haal alle categorieën op
        $categories = Category::with('faqs')->get();
    
        // Haal alle niet-beantwoorde vragen op
        $unansweredFaqs = Faq::whereNull('answer')->get();
    
        // Retourneer de admin view voor FAQ beheer
        return view('admin.faqpanel', compact('categories', 'unansweredFaqs'));
    }
    public function update(Request $request, $id)
{
    $faq = Faq::findOrFail($id);
    $validatedData = $request->validate([
        'answer' => 'required|string|max:2000',
    ]);

    $faq->update(['answer' => $validatedData['answer']]);

    return redirect()->route('admin.faq.index')->with('success', 'FAQ succesvol beantwoord!');
}


public function updateCategory(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $category = Category::findOrFail($id);
    $category->update(['name' => $validatedData['name']]);

    return redirect()->route('admin.faq.index')->with('success', 'Categorie succesvol bijgewerkt!');
}


    
}
