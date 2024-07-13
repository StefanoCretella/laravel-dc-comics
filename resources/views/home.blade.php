@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Benvenuto nel Comic Archive</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-lg">Nuove uscite</a>
    </div>
@endsection
