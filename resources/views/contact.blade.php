@extends('layouts.layout')

@section('css')
<style>

.container {
    max-width: 800px;
    margin: 30px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}


form {
    margin-top: 20px;
}

form label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

form input, form textarea, form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

form textarea {
    resize: none;
    height: 120px;
}



.success {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    border: 1px solid #c3e6cb;
    border-radius: 5px;
    margin-bottom: 15px;
    text-align: center;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border: 1px solid #f5c6cb;
    border-radius: 5px;
    margin-bottom: 15px;
    text-align: center;
}
</style>
@endsection

@section('content')
<div class="container">
    <h1>Contacteer ons</h1>

    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name" placeholder="Uw naam" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Uw emailadres" required>

        <label for="message">Bericht:</label>
        <textarea id="message" name="message" placeholder="Uw bericht..." required></textarea>

        <button type="submit">Verstuur</button>
    </form>
</div>
@endsection
