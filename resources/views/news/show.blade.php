@extends('layouts.layout')

@section('content')
<br>
<a href="javascript:history.back()" class="back-link">← Terug</a>

<h1>{{ $newsItem->title }}</h1>
<img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" style="max-width: 100%;">
<p>{{ $newsItem->content }}</p>
<small>Gepubliceerd op {{ $newsItem->publication_date->format('d-m-Y') }}</small>


@endsection
