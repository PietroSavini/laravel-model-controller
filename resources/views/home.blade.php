@extends('Layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-4">
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