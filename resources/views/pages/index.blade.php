@extends('../layouts._index')

@section('movies')

@foreach ($movies as $movie)
    <div class="movie-card">
        <h2 class="title">{{ $movie->title }}</h2>
        <p class="original-title">{{ $movie->original_title }}</p>
        <p class="rating">Rating: {{ $movie->vote }}</p>
        <p class="release-date">Release: {{ $movie->changeDateFormat($movie->date) }}</p>
    </div>
@endforeach

@endsection
