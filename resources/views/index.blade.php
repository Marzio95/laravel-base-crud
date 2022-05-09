@extends('base')
@section('pageTitle')
Comics
@endsection



@section('pageMain')
    
    <table class="table">
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
            
        
        <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <a href="{{route('show', $comic->id)}}">
            <td>{{ $comic->description }}</td>
        </a>
        <td>{{ $comic->thumb }}</td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->series }}</td>
        <td>{{ $comic->sale_date }}</td>
        <td>{{ $comic->type }}</td>
      </tr>
    @endforeach




      </tr>
    </thead>
@endsection

