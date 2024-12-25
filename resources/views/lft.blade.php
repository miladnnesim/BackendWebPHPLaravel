@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/lft.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Scrim / 5 stack / 10 man</h1>
    <p>Hier kun je scrims, 5-stacks en 10-man games vinden die gepland staan. Filter op datum, rang en taal om jouw perfecte match te vinden!</p>
    <p>Organiseer uw eigen scrims, 5-stacks en 10-man games hier : <button>create</button></p>
    <table>
        <tr class="header">
            <td>Type</td>
            <td>Date</td>
            <td>Start</td>
            <td>End</td>
            <td>Players</td>
            <td>Language</td>
            <td>Rank</td>
            <td>Join</td>
        </tr>
        @foreach ($scrims as $scrim)
        <tr>
            <td>{{ $scrim['type'] }}</td>
            <td>{{ $scrim['date'] }}</td>
            <td>{{ $scrim['start'] }}</td>
            <td>{{ $scrim['end'] }}</td>
            <td>{{ $scrim['players'] }}</td>
            <td>{{ $scrim['languages'] }}</td>
            <td>{{ $scrim['rank'] }}</td>
            <td><button>join</button></td>
        </tr>
        @endforeach
    </table>

    <h1>LFT Duo Posts</h1>
    <table>
        <tr class="header">
            <td>Player</td>
            <td>Rating</td>
            <td>Wants to play</td>
            <td>Language</td>
            <td>See profile</td>
        </tr>
        @foreach ($duos as $duo)
        <tr>
            <td>{{ $duo['player'] }}</td>
            <td>{{ $duo['rating'] }}</td>
            <td>{{ $duo['wants_to_play'] }}</td>
            <td>{{ $duo['language'] }}</td>
            <td><a href="">Link profile</a></td>

        </tr>
        @endforeach
    </table>
</div>
@endsection
