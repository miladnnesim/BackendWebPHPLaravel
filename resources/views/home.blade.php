@extends('layouts.layout')

@section('css')
    <style>
       .news-item {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.news-item h3 {
    margin: 0 0 10px;
    font-size: 20px;
    color: #007BFF;
}

.news-item h3 a {
    text-decoration: none;
    color: #007BFF;
}

.news-item h3 a:hover {
    text-decoration: underline;
}

.news-item p {
    margin: 0;
    color: #333;
}

.view-more {
    margin-top: 20px;
    text-align: center;
}

.view-more a {
    display: inline-block;
    padding: 10px 15px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.view-more a:hover {
    background-color: #0056b3;
}
    </style>
@endsection

@section('content')
<div class="container">
    <h1>Welkom op de Homepagina</h1>

    <h2>Laatste Nieuws</h2>
    @if ($newsItems->isEmpty())
        <p>Er zijn momenteel geen nieuwsitems beschikbaar.</p>
    @else
        @foreach ($newsItems as $news)
            <div class="news-item">
                <h3><a href="{{ route('news.show', $news->id) }}">{{ $news->title }}</a></h3>
                <p><small>Gepubliceerd op: {{ $news->publication_date->format('d-m-Y') }}</small></p>
                <p>{{ \Illuminate\Support\Str::limit($news->content, 150, '...') }}</p>
            </div>
        @endforeach

        
    @endif
</div>
@endsection
