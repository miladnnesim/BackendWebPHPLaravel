@extends('layouts.layout')

@section('content')
<h1>Contactberichten</h1>

<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Bericht</th>
            <th>Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
            <td>
                <a href="{{ route('contact.show', $contact->id) }}">Bekijk</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
