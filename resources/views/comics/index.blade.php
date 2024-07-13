@extends('layouts.app')

@section('content')
    <h1 class="my-4">Lista dei Comics</h1>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                        </h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
