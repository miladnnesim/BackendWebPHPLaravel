@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Gebruikersbeheer</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Nieuwe Gebruiker Aanmaken</a>

    <table class="table">
        <thead>
            <tr class="header">
                <th>Naam</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr >
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('profile.show', $user->id) }}" class="btn btn-info">Bekijk Profiel</a>

                        @if ($user->role === 'user')
                            <form action="{{ route('admin.users.promote', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-success">Maak Admin</button>
                            </form>
                        @elseif ($user->role === 'admin')
                            <form action="{{ route('admin.users.demote', $user->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                <button type="submit" class="btn btn-warning">Maak Gebruiker</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
