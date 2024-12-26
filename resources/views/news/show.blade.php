@extends('layouts.layout')

@section('content')
<h1>{{ $newsItem->title }}</h1>
<img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" style="max-width: 100%;">
<p>{{ $newsItem->content }}</p>
<small>Gepubliceerd op {{ $newsItem->publication_date->format('d-m-Y') }}</small>

@auth
<form action="{{ route('news.destroy', $newsItem->id) }}" method="POST" style="margin-top: 20px;">
    @csrf
    @method('DELETE')
    <button type="submit">Verwijder Nieuwsitem</button>
</form>
@endauth
@endsection
