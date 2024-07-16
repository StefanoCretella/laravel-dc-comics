@extends('layouts.app')

@section('title', 'Crea un nuovo fumetto')

@section('content')
<div class="container">
    <h1 class="my-4">Crea un nuovo fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">URL Miniatura</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="form-group">
            <label for="artists">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists" value="{{ old('artists') }}">
        </div>
        <div class="form-group">
            <label for="writers">Scrittori</label>
            <input type="text" class="form-control" id="writers" name="writers" value="{{ old('writers') }}">
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection
