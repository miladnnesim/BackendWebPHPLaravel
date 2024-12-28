@extends('layouts.layout')

@section('content')
<div class="container">

<br>
    <div class="profile-header"><a href="javascript:history.back()" class="back-link">← Terug</a>
        <h1>{{ $user->username ?? $user->name }}'s Profiel</h1>
        @if ($user->profile_photo)
            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->username ?? $user->name }}" class="profile-photo">
        @else
            <img src="{{ asset('Images/default-avatar.png') }}" alt="Default Avatar" class="default">
        @endif
    </div>

    <div class="profile-details">
        <p><strong>Riot ID:</strong> {{ $user->riot_id ?? 'Niet ingevuld' }}</p>
        <p><strong>Geboortedatum:</strong> 
    {{ $user->birthday ? $user->birthday : 'Niet ingevuld' }}
</p>
        <p><strong>Over Mij:</strong></p>
        <p>{{ $user->about_me ?? 'Geen informatie opgegeven' }}</p>
        <br>
        @if ($user->id === auth()->id())
            
        <a href="{{route ('profile.edit')}}">Edit </a>
        <br>
        <br>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-button">Uitloggen</button>
        </form>
        @endif
    </div>
</div>
<div class="organized-scrims">
    <h2>Georganiseerde Scrims</h2>
    @if ($user->organizedScrims->isEmpty())
        <p>Je hebt nog geen scrims georganiseerd.</p>
    @else
        <ul>
            @foreach ($user->organizedScrims as $scrim)
                <li>
                    <strong>{{ $scrim->type }}</strong> op {{ $scrim->date }}
                    van {{ $scrim->start_time }} tot {{ $scrim->end_time }}
                    <span>({{ $scrim->language }})</span>
                    @if ($user->id === auth()->id())

                    <form action="{{ route('scrim.destroy', $scrim->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>


<style>
    .organized-scrims ul {
        list-style-type: none;
        padding: 0;
    }

    .organized-scrims li {
        padding: 10px;
        background: #f9f9f9;
        margin-bottom: 5px;
        border-radius: 5px;
    }

    .organized-scrims li strong {
        color: #007BFF;
    }

 

    .profile-photo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
    }

    .default {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
   
    filter: brightness(100) invert(1);
    }


    .profile-details p {
        margin: 10px 0;
        font-size: 16px;
    }
</style>
@endsection
