@extends('layouts.layout')

@section('content')
<h1>Nieuwsitem toevoegen</h1>

<form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titel:</label>
    <input type="text" id="title" name="title" required>
    
    <label for="image">Afbeelding:</label>
    <input type="file" id="image" name="image" required>
    
    <label for="content">Inhoud:</label>
    <textarea id="content" name="content" rows="5" required></textarea>
    
    <button type="submit">Opslaan</button>
</form>
@endsection
