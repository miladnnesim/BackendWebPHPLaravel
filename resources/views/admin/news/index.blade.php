@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Nieuws Beheer</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Nieuw Nieuwsitem Maken</a>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <div class="news-list">
        @foreach ($newsItems as $news)
            <div class="news-item">
                <h2>{{ $news->title }}</h2>
                <p><small>Gepubliceerd op: {{ $news->publication_date->format('d-m-Y') }}</small></p>
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="width: 100px;">
                <p>{{ \Illuminate\Support\Str::limit($news->content, 150, '...') }}</p>

                <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Verwijder</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
