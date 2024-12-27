@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')

<div class="container">
            <h1>Inloggen</h1>

            {{ $slot }}
        </div>
        @endsection