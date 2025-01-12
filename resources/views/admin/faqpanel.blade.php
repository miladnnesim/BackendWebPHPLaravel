@extends('layouts.AdminLayout')

@section('content')
<div class="container">
    <h1>FAQ Beheer</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Categorieën Beheren -->
    <h2>Categorieën</h2>
    <div class="categories-section">
        @foreach ($categories as $category)
            <div class="category-item">
                <form action="{{ route('faq.category.update', $category->id) }}" method="POST" class="inline-form">
                    @csrf
                    @method('PATCH')
                    <input type="text" name="name" value="{{ $category->name }}" required>
                    <button type="submit" class="btn btn-primary">Bijwerken</button>
                </form>
                <form action="{{ route('faq.category.delete', $category->id) }}" method="POST" class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Verwijderen</button>
                </form>

                <ul class="faq-list">
                    @foreach ($category->faqs as $faq)
                        <li>
                            <form action="{{ route('faq.update', $faq->id) }}" method="POST" class="faq-form">
                                @csrf
                                @method('PATCH')
                                <label>Vraag:</label>
                                <input type="text" name="question" value="{{ $faq->question }}" required>
                                <label>Antwoord:</label>
                                <textarea name="answer" required>{{ $faq->answer }}</textarea>
                                <button type="submit" class="btn btn-primary">FAQ Bijwerken</button>
                            </form>
                            <form action="{{ route('faq.delete', $faq->id) }}" method="POST" class="inline-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">FAQ Verwijderen</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <form action="{{ route('admin.faq.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Categorie Naam (voor nieuwe categorie, optioneel):</label>
            <input type="text" id="name" name="name" placeholder="Typ een nieuwe categorie..." value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

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

        <div class="form-group">
            <label for="question">Jouw Vraag:</label>
            <textarea id="question" name="question" placeholder="Typ hier je vraag..." required>{{ old('question') }}</textarea>
            @error('question')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="answer">Antwoord (optioneel):</label>
            <textarea id="answer" name="answer" rows="4">{{ old('answer') }}</textarea>
            @error('answer')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit">Verstuur</button>
        </div>
    </form>
</div>

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
    .container {
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1, h2, h3 {
        color: #333;
    }

    .alert {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        background-color: #d4edda;
        color: #155724;
    }

    .categories-section {
        margin-bottom: 30px;
    }

    .category-item {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .category-item .inline-form {
        display: inline-block;
        margin-right: 10px;
    }

    .faq-list {
        list-style-type: none;
        padding: 0;
    }

    .faq-list li {
        margin-top: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f4f4f4;
    }

    .faq-form label {
        font-weight: bold;
        display: block;
        margin-top: 5px;
    }

    .faq-form textarea {
        width: 100%;
        resize: vertical;
        height: 80px;
        margin-bottom: 10px;
    }

    .add-form {
        margin-bottom: 20px;
    }

    .add-form input, .add-form textarea, .add-form select {
        display: block;
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .btn {
        padding: 8px 12px;
        border-radius: 5px;
        text-align: center;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #007BFF;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #a71d2a;
    }

    .btn-success {
        background-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
    }
</style>
@endsection
