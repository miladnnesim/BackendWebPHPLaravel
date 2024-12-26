@extends('layouts.layout')

@section('content')
<h1>Bericht van {{ $contact->name }}</h1>

<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Bericht:</strong></p>
<p>{{ $contact->message }}</p>
@endsection
