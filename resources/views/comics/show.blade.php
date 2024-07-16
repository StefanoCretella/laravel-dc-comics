@extends('layouts.app')

@section('title', 'Comic Details')

@push('styles')
<link rel="stylesheet" href="{{ asset('resources/css/comic-details.css') }}">
@endpush

@section('content')
<div class="container">
    <div class="comic-details">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
        <div class="comic-info">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <ul class="list-unstyled">
                <li><strong>Series:</strong> {{ $comic->series }}</li>
                <li><strong>Price:</strong> {{ $comic->price }}</li>
                <li><strong>Sale Date:</strong> {{ $comic->sale_date }}</li>
                <li><strong>Type:</strong> {{ $comic->type }}</li>
            </ul>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to Comics List</a>
        </div>
    </div>
</div>
@endsection
