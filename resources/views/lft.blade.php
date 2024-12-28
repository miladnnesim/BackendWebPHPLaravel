@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/lft.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Scrim / 5 stack / 10 man</h1>
    <p>Organiseer uw eigen scrims, 5-stacks en 10-man games hier  <a href="{{route('lftscrimform')}}"><button>create</button></a></p>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif

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
