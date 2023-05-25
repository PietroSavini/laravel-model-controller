@extends('Layouts.app')

@section('content')
    
    <div class="container">
        <h1>Movies.db</h1>
        <div class="py-3 row row-cols-4 g-3">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="{{$movie->image}}" alt="{{$movie->title}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection