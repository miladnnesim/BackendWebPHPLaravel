<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Toon de contactpagina.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Verwerk het contactformulier en stuur een e-mail naar de admin.
     */
    public function store(Request $request)
    {
        // Validatie van de ingevoerde gegevens
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // Opslaan in de database
        $contact = Contact::create($validatedData);

        // E-mail sturen naar de admin
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($contact));

        return redirect()->route('contact')->with('success', 'Uw bericht is succesvol verstuurd!');
    }

    /**
     * Toon een overzicht van alle contactformulieren (voor admins).
     */
    public function adminIndex()
    {
        $contacts = Contact::latest()->get(); // Haal alle berichten op, gesorteerd op nieuwste
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Toon een specifiek contactbericht (voor admins).
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }
}
