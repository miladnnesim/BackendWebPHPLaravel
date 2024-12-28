@extends('layouts.layout')

@section('css')
<style>
    .faq-container {
        max-width: 600px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .faq-title {
        text-align: center;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
        color: #333;
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

    .form-group select,
    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        resize: vertical;
    }

    .form-group button {
        background-color: #007BFF;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }

    .error {
        color: red;
        font-size: 14px;
    }
</style>
@endsection

@section('content')
<div class="faq-container">
    <h1 class="faq-title">Stel een Vraag</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('faq.store') }}" method="POST">
        @csrf

        <!-- Nieuwe categorie -->
        <div class="form-group">
            <label for="name">Categorie Naam (voor nieuwe categorie, optioneel):</label>
            <input type="text" id="name" name="name" placeholder="Typ een nieuwe categorie..." value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- Bestaande categorie -->
        <div class="form-group">
            <label for="category_id">Kies een Bestaande Categorie (optioneel):</label>
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

        <!-- Vraag -->
        <div class="form-group">
            <label for="question">Jouw Vraag:</label>
            <textarea id="question" name="question" placeholder="Typ hier je vraag..." required>{{ old('question') }}</textarea>
            @error('question')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit">Verstuur</button>
        </div>
    </form>
</div>
@endsection
