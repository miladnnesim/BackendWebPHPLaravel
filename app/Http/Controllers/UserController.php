<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Toon een overzicht van alle gebruikers.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    /**
     * Promoveer een gebruiker tot admin.
     */
    public function promoteToAdmin($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->isAdmin()) {
            $user->role = 'admin';
            $user->save();

            return redirect()->back()->with('success', 'Gebruiker succesvol verheven tot admin.');
        }

        return redirect()->back()->with('error', 'Je hebt geen rechten om dit te doen.');
    }

    /**
     * Degradeer een admin naar een gewone gebruiker.
     */
    public function demoteToUser($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->isAdmin()) {
            $user->role = 'user';
            $user->save();

            return redirect()->back()->with('success', 'Admin succesvol gedegradeerd naar gebruiker.');
        }

        return redirect()->back()->with('error', 'Je hebt geen rechten om dit te doen.');
    }

    /**
     * Toon het formulier om een nieuwe gebruiker aan te maken.
     */
    public function create()
    {
        return view('admin.create-user');
    }

    /**
     * Sla een nieuwe gebruiker op in de database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:user,admin',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Gebruiker succesvol aangemaakt.');
    }
}
