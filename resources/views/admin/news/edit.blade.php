@extends('layouts.AdminLayout')

@section('content')
<div class="container">
    <h1>Nieuws Bewerken</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" name="title" id="title" value="{{ $news->title }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Afbeelding</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($news->image)
                <p>Huidige Afbeelding:</p>
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" style="width: 100px;">
            @endif
        </div>

        <div class="form-group">
            <label for="content">Inhoud</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $news->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>
@endsection
