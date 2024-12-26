@extends('layouts.layout')

@section('css')
<style>
    .faq-container {
        max-width: 800px;
        margin: 30px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .faq-title {
        text-align: center;
        font-family: 'Valorant', sans-serif;
        font-weight: 500;
        color: rgb(196, 43, 43);
        margin-bottom: 20px;
        font-size: 24px;
    }

    .faq-category {
        margin-bottom: 30px;
    }

    .faq-category h2 {
        font-family: 'Valorant', sans-serif;
        font-weight: 500;
        background-color: rgb(196, 43, 43);
        color: #fff;
        padding: 10px;
        border-radius: 5px;
        font-size: 18px;
    }

    .faq-item {
        margin-top: 15px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .faq-item h3 {
        font-size: 16px;
        color: rgb(0, 0, 0);
        cursor: pointer;
        margin-bottom: 5px;
    }

    .faq-item p {
        display: none;
        font-size: 14px;
        color: #333;
        margin-top: 5px;
        line-height: 1.5;
    }

    .faq-item h3:hover {
        text-decoration: underline;
    }

    .admin-controls {
        margin-top: 20px;
    }

    .admin-controls a {
        text-decoration: none;
        background-color: rgb(196, 43, 43);
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .admin-controls a:hover {
        background-color: #b33232;
    }
</style>
@endsection

@section('content')
<div class="faq-container">
    <h1 class="faq-title">Veelgestelde Vragen (FAQ)</h1>

    @foreach ($categories as $category)
        <div class="faq-category">
            <h2>{{ $category->name }}</h2>
            @foreach ($category->faqs as $faq)
                <div class="faq-item">
                    <h3>{{ $faq->question }}</h3>
                    <p>{{ $faq->answer }}</p>
                </div>
            @endforeach
        </div>
    @endforeach

    @auth
    <div class="admin-controls">
        <a href="{{ route('faq.create') }}">Nieuwe categorie of vraag toevoegen</a>
    </div>
    @endauth
</div>

<script>
    document.querySelectorAll('.faq-item h3').forEach(item => {
        item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
        });
    });
</script>
@endsection
