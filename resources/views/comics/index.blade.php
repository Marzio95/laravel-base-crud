@extends('templates.base')
@section('pageTitle')
    Comics
@endsection



@section('pageMain')
    {{-- <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Thumb</th>
        <th scope="col">Price</th>
        <th scope="col">Series</th>
        <th scope="col">Data vendita</th>
        <th scope="col">Tipo</th>
    </tr>
    </thead>

    <tbody>
        @foreach ($myComics as $comic)
            
    <a href="{{route('show', $comic->id)}}">
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td>{{ $comic->thumb }}</td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
    </a>
    @endforeach

    </tbody>
    </table> --}}
    <div class="container">
        <button><a href="{{ route('create') }}">Crea un nuovo comic</a></button>
        <div class="row">
            @foreach ($myComics as $comic)
                <div class="card col-5 m-5 bg-primary text-center">
                    <div class="witdh-100 text-center">
                        <img class="img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                    <div class="card-title text-center">
                        <h2>{{ $comic->title }}</h2>
                        <p>{{ $comic->description }}</p>
                        <h3>{{ $comic->price }}$</h3>
                        <h3>{{ $comic->series }}</h3>
                        <h3>{{ $comic->sale_date }}</h3>
                        <h3>{{ $comic->type }}</h3>
                    </div>
                    <a class="tasto_show" href="{{ route('comic.show', $comic->id) }}">Visualizza Fumetto</a>
                    <form class="mb-2 mt-2" method="POST" action="{{ route('comic.destroy', $comic->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="bg-danger text-white p-2 mb-2">ELIMINA FUMETTO</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
