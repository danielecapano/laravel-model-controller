@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">I miei film</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ($movies as $movie)
            <div class="col-3 mb-4">
                <div class="movie-card">
                    <p>Titolo: {{ $movie->title }}</p>
                    <p>Titolo originale: {{ $movie->original_title }}</p>
                    <p>Nazionalità: {{ $movie->nationality }}</p>
                    <p>Data di uscita: {{ $movie->date }}</p>
                    <p>Voto: {{ $movie->vote }}</p>
                </div>
            </div>
            @empty
            Nessun film da mostrare
            @endforelse
        </div>
    </div>
</section>

@endsection