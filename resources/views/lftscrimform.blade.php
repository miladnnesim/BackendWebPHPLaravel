@extends('layouts.layout')

@section('css')
<style>
  

.form-container {
    max-width: 600px;
    margin: 30px auto;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px 30px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #222;
}

form label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    margin-top: 15px;
}

form input, form select, form textarea, form button {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

form textarea {
    resize: none;
    height: 100px;
}






</style>
@endsection

@section('content')

<div class="form-container"><div class="back-button">
    <a href="javascript:history.back()" class="back-link">← Terug</a>
</div>
        <h1>Organiseer een sessie</h1>
        <form action="{{ route('lftscrim.store') }}" method="POST">
        @csrf
            <label for="type">Wat wil je organiseren?</label>
            <select id="type" name="type" required>
                <option value="" disabled selected>Kies een type</option>
                <option value="scrim">Scrim</option>
                <option value="5stack">5-Stack</option>
                <option value="10man">10-Man</option>
            </select>

            <label for="date">Datum</label>
            <input type="date" id="date" name="date" required>

            <label for="start-time">Starttijd</label>
            <input type="time" id="start-time" name="start_time" required>

            <label for="end-time">Eindtijd</label>
            <input type="time" id="end-time" name="end_time" required>

            <label for="players-needed">Hoeveel spelers heb je nog nodig?</label>
            <input type="number" id="players-needed" name="players_needed" min="1" max="10" required>

            <label for="language">Welke taal wordt gesproken?</label>
            <select id="language" name="language" required>
                <option value="" disabled selected>Kies een taal</option>
                <option value="nl">Nederlands</option>
                <option value="fr">Frans</option>
                <option value="en">Engels</option>
                <option value="other">Andere</option>
            </select>

            <label for="min-rank">Minimumrang</label>
            <select id="min-rank" name="min_rank" required>
                <option value="" disabled selected>Kies een minimumrang</option>
                <option value="iron">Iron</option>
                <option value="bronze">Bronze</option>
                <option value="silver">Silver</option>
                <option value="gold">Gold</option>
                <option value="platinum">Platinum</option>
                <option value="diamond">Diamond</option>
                <option value="ascendant">Ascendant</option>
                <option value="immortal">Immortal</option>
                <option value="radiant">Radiant</option>
            </select>

            <label for="max-rank">Maximale rang</label>
            <select id="max-rank" name="max_rank" required>
                <option value="" disabled selected>Kies een maximale rang</option>
                <option value="iron">Iron</option>
                <option value="bronze">Bronze</option>
                <option value="silver">Silver</option>
                <option value="gold">Gold</option>
                <option value="platinum">Platinum</option>
                <option value="diamond">Diamond</option>
                <option value="ascendant">Ascendant</option>
                <option value="immortal">Immortal</option>
                <option value="radiant">Radiant</option>
            </select>

            <label for="notes">Extra informatie (optioneel)</label>
            <textarea id="notes" name="notes" placeholder="Voeg extra informatie toe over de sessie"></textarea>

            <button type="submit">Organiseer sessie</button>
        </form>
    </div>
@endsection
