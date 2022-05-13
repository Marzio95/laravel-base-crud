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
            <a class="tasto_show bg-black" href="{{ route('comic.edit', $comic->id) }}">Modifica Fumetto</a>
            <form class="mb-2 mt-2" method="POST" action="{{ route('comic.destroy', $comic->id) }}">
                @csrf
                @method('DELETE')
                <button class="bg-danger text-white p-2 mb-2">ELIMINA FUMETTO</button>
            </form>
        </div>
    </div>
    <div class="text-center mt-4">
        <a class="text-white bg-black p-2" href="{{ route('index', 'ComicController') }}">Torna alla lista</a>
    </div>

@endsection
