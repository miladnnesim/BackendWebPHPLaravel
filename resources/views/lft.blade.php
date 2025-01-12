@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/lft.css') }}">
@endsection

@section('content')
<div class="container">
    <br>
    <h1>Scrim / 5 stack / 10 man</h1>
    <p>Organiseer uw eigen scrims, 5-stacks en 10-man games hier <a href="{{ route('lftscrimform') }}"><button>create</button></a></p>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

    <!-- Scrims Table -->
    <table>
        <tr class="header">
            <td>Type</td>
            <td>Date</td>
            <td>Start</td>
            <td>End</td>
            <td>Players</td>
            <td>Language</td>
            <td>Rank</td>
            <td>Actions</td>
        </tr>
        @foreach ($scrims as $scrim)
        <tr>
            <td>{{ $scrim->type }}</td>
            <td>{{ $scrim->date }}</td>
            <td>{{ $scrim->start_time }}</td>
            <td>{{ $scrim->end_time }}</td>
            <td>{{ $scrim->participants->count() }}/{{ $scrim->players_needed }}</td>
            <td>{{ $scrim->language }}</td>
            <td>{{ $scrim->min_rank }} - {{ $scrim->max_rank }}</td>
            <td>
                <button class="toggle-participants">Details</button>
            </td>
        </tr>
        <tr class="participants-row" style="display: none;">
            <td colspan="8">
                <strong>Deelnemers:</strong>
                <ul class="participants">
                    @forelse ($scrim->participants as $participant)
                        <li>
                            <a href="{{ route('profile.show', $participant->id) }}">
                                {{ $participant->riot_id ?? 'Geen Riot ID' }}
                            </a>
                        </li>
                    @empty
                        <li>Geen deelnemers.</li>
                    @endforelse
                </ul>
                @if (auth()->check())
                    @if ($scrim->participants->contains(auth()->id()))
                        <form action="{{ route('scrim.leave', $scrim->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit">Leave</button>
                        </form>
                    @else
                        <form action="{{ route('scrim.join', $scrim->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" {{ $scrim->participants->count() >= $scrim->players_needed ? 'disabled' : '' }}>
                                {{ $scrim->participants->count() >= $scrim->players_needed ? 'Vol' : 'Join' }}
                            </button>
                        </form>
                    @endif
                @else
                    <p><a href="{{ route('login') }}">Log in</a> om deel te nemen of te verlaten.</p>
                @endif
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Duo Functionaliteit -->
    <br>
    <h1>Zoek een DUO</h1>
    

    <!-- Formulier om een nieuwe duo-post te maken -->
    @if (auth()->check())
        <form action="{{ route('duo.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="rank">Rank</label>

            <select id="rank" name="rank" required>
                <option value="" disabled selected>Kies een rang</option>
                <option value="iron">Iron</option>
                <option value="bronze">Bronze</option>
                <option value="silver">Silver</option>
                <option value="gold">Gold</option>
                <option value="platinum">Platinum</option>
                <option value="diamond">Diamond</option>
                <option value="ascendant">Ascendant</option>
                <option value="immortal">Immortal</option>
                <option value="radiant">Radiant</option>
            </select>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select id="type" name="type" required>
                    <option value="competitive">Competitief</option>
                    <option value="casual">Casual</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Post maken</button>
        </form>
    @else
        <p><a href="{{ route('login') }}">Log in</a> om een duo-post te maken.</p>
    @endif
    @if (session('successDuo'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if (session('errorDuo'))
        <p class="error">{{ session('errorDuo') }}</p>
    @endif

    <!-- Tabel met bestaande duo-posts -->
    <table>
        <tr class="header">
            <td>Riot ID</td>
            <td>Rank</td>
            <td>Type</td>
        </tr>
        @foreach ($duos as $duo)
<tr>
    <td>
        @if ($duo->user)
            <a href="{{ route('profile.show', $duo->user->id) }}">
                {{ $duo->user->riot_id ?? 'Geen Riot ID' }}
            </a>
        @else
            <span>Gebruiker niet gevonden</span>
        @endif
    </td>
    <td>{{ $duo->rank }}</td>
    <td>{{ $duo->type }}</td>
</tr>
@endforeach

    </table>
</div>

<script>
    document.querySelectorAll('.toggle-participants').forEach(button => {
        button.addEventListener('click', function () {
            const row = this.closest('tr').nextElementSibling;
            row.style.display = row.style.display === 'table-row' ? 'none' : 'table-row';
        });
    });
</script>
@endsection
