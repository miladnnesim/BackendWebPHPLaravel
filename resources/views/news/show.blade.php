@extends('layouts.layout')

@section('content')
<h1>{{ $newsItem->title }}</h1>
<img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" style="max-width: 100%;">
<p>{{ $newsItem->content }}</p>
<small>Gepubliceerd op {{ $newsItem->publication_date->format('d-m-Y') }}</small>


@endsection
