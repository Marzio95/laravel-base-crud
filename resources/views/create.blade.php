@extends('base')
@section('pageTitle')
    Comics
@endsection



@section('pageMain')
    <form method="POST" action="{{ route('comic.store') }}">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Title" name="title">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="description" placeholder="Description" name="description">
            </div>
        </div>
        <div class="form-group row">
            <label for="thumb" class="col-sm-2 col-form-label">Foto Comic</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="thumb" placeholder="Foto Comic" name="thumb">
            </div>
        </div>
        <div class="form-group row">
            <label for="thumb" class="col-sm-2 col-form-label">Foto Fumetto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="thumb" placeholder="Foto Fumetto" name="thumb">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prezzo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" placeholder="Prezzo" name="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="series" class="col-sm-2 col-form-label">Serie Fumetto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="series" placeholder="Serie Fumetto" name="series">
            </div>
        </div>
        <div class="form-group row">
            <label for="sale_date">Data di uscita</label>
            <input type="time" id="sale_date" name="sale_date">
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Genere Fumetto</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="type" placeholder="Genere Fumetto" name="type">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
@endsection
