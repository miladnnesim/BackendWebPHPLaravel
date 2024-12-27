<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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

}
