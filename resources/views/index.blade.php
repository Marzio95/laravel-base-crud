@extends('base')
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

    @foreach ($myComics as $comic)
    <a href="{{route('comic.show', $comic->id)}}">
        <div class="card">   
            <img class="img" src="{{$comic->thumb}}" alt="{{$comic->title}}">
            <div class="card-title">
            <h2>{{ $comic->title }}</h2>
            <p>{{ $comic->description }}</p>
            <h3>{{ $comic->price }}</h3>
            <h3>{{ $comic->series }}</h3>
            <h3>{{ $comic->sale_date }}</h3>
            <h3>{{ $comic->type }}</h3>
        </div>
        </div> 
    </a>
    @endforeach
@endsection

