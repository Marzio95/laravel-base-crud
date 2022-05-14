@extends('templates.base')
@section('pageTitle')
    Create Comics
@endsection



@section('pageMain')
    <form class="m-auto w-75 mt-4" method="POST" action="{{ route('store') }}">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input value="{{ old('name') }}" type="text" class="form-control" id="title" placeholder="Title"
                    name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <input value="{{ old('description') }}" type="text" class="form-control" id="description"
                    placeholder="Description" name="description">
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="thumb" class="col-sm-2 col-form-label">Foto Comic</label>
            <div class="col-sm-10">
                <input value="{{ old('name') }}" type="text" class="form-control" id="thumb" placeholder="Foto Comic"
                    name="thumb">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prezzo</label>
            <div class="col-sm-10">
                <input value="{{ old('name') }}" type="number" class="form-control" id="price" placeholder="Prezzo"
                    name="price">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="series" class="col-sm-2 col-form-label">Serie Fumetto</label>
            <div class="col-sm-10">
                <input value="{{ old('name') }}" type="text" class="form-control" id="series"
                    placeholder="Serie Fumetto" name="series">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row mt-3 mb-3">
            <label for="sale_date">Data di uscita</label>
            <input value="{{ old('name') }}" class="" type="date" id="sale_date" name="sale_date">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Genere Fumetto</label>
            <div class="col-sm-10">
                <input value="{{ old('name') }}" type="text" class="form-control" id="type"
                    placeholder="Genere Fumetto" name="type">
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row m-5 d-flex">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <div class="col-sm-10 mt-5">
                <a class="text-white bg-black p-2" href="{{ url()->previous() }}">Torna alla lista</a>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
