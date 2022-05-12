@extends('templates.base')

@section('pageTitle', $pageTitle)

@section('pageMain')

    <div class="m-auto text-center">
        <div class="card bg-primary m-auto col-4">
            <a href="{{ route('index', 'ComicController') }}">
                <img src="{{ $comic->thumb }}" class="img" alt="...">

                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>

                    <h3>{{ $comic->price }}$</h3>
                    <h3>{{ $comic->series }}</h3>
                    <h3>{{ $comic->sale_date }}</h3>
                    <h3>{{ $comic->type }}</h3>

                </div>
            </a>
        </div>
    </div>

@endsection
