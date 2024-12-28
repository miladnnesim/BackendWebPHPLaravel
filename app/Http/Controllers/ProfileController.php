<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;


class ProfileController extends Controller
{

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }


    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();
    $validatedData = $request->validated();

    if ($request->hasFile('profile_photo')) {
        $validatedData['profile_photo'] = $request->file('profile_photo')->store('profile_photos', 'public');
    }

    $user->update($validatedData);

    return Redirect::route('profile.edit')->with('status', 'profile-updated');
}



    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function show($id)
{
    if($id==null){
        return view('login');
    }
    else if ($id == 0) {
        $id = auth()->user()->id;
    }
    
    $user = User::with('organizedScrims')->findOrFail($id);

    return view('profile.profile', compact('user'));
}

}
