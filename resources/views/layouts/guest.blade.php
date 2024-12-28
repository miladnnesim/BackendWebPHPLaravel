@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')

<div class="container">
            <h1>Inloggen/ Register</h1>

            {{ $slot }}
            <a href="{{route('login')}}">Login</a>

            <a href="{{route('register')}}">Register</a>
        </div>
        @endsection