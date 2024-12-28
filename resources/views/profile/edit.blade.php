@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Profiel Bewerken</h1>

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username" value="{{ old('username', $user->username) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="riot_id">Riot ID</label>
            <input type="text" name="riot_id" id="riot_id" value="{{ old('riot_id', $user->riot_id) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="birthday">Geboortedatum</label>
            <input type="date" name="birthday" id="birthday" value="{{ old('birthday', $user->birthday) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="profile_photo">Profielfoto</label>
            <input type="file" name="profile_photo" id="profile_photo" class="form-control">
            @if ($user->profile_photo)
                <p>Huidige foto:</p>
                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profielfoto" style="width: 100px; border-radius: 50%;">
            @endif
        </div>

        <div class="form-group">
            <label for="about_me">Over Mij</label>
            <textarea name="about_me" id="about_me" rows="4" class="form-control">{{ old('about_me', $user->about_me) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>

    <hr>
    <h2>Wachtwoord Bijwerken</h2>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="current_password">Huidig Wachtwoord</label>
            <input type="password" name="current_password" id="current_password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Nieuw Wachtwoord</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Bevestig Nieuw Wachtwoord</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Wachtwoord Bijwerken</button>
    </form>
   

    <hr>
    <h2>Account Verwijderen</h2>
    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('delete')

        <div class="form-group">
            <label for="password">Voer je wachtwoord in om te bevestigen</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger">Account Verwijderen</button>
    </form>
</div>

<style>
    .container {
        max-width: 600px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn {
        display: inline-block;
        padding: 10px 15px;
        font-size: 14px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    

    hr {
        margin: 30px 0;
    }
</style>
@endsection
