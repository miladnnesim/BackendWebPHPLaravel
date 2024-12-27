@extends('layouts.layout')

@section('css')
<style>
    .form-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        text-align: center;
        font-family: 'Valorant', sans-serif;
        font-weight: 500;
        color: rgb(196, 43, 43);
        margin-bottom: 20px;
        font-size: 24px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input, .form-group textarea, .form-group select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-group textarea {
        resize: vertical;
    }

    .form-group button {
        background-color: rgb(196, 43, 43);
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #b33232;
    }

    .error {
        color: red;
        font-size: 14px;
    }
</style>
@endsection

@section('content')
<div class="form-container">
    <h1 class="form-title">Nieuwe Categorie of Vraag Toevoegen</h1>

    <form action="{{ route('faq.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Categorie Naam (optioneel):</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Kies een Categorie (optioneel):</label>
            <select id="category_id" name="category_id">
                <option value="">Selecteer een categorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="question">Vraag (optioneel):</label>
            <input type="text" id="question" name="question" value="{{ old('question') }}">
            @error('question')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <button type="submit">Opslaan</button>
        </div>
    </form>
</div>
@endsection