@extends('layouts.AdminLayout')

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
            <td>{{$contact->message }}</td>
            <td><a href="mailto:{{ $contact->email }}">Send email</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
