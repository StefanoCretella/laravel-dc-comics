@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<div class="container">
    <div class="comic-details">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="comic-info">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <ul>
                <li><strong>Price:</strong> {{ $comic->price }}</li>
                <li><strong>Series:</strong> {{ $comic->series }}</li>
                <li><strong>Sale Date:</strong> {{ $comic->sale_date }}</li>
                <li><strong>Type:</strong> {{ $comic->type }}</li>
            </ul>
            <div class="btn-group">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Back to Comics List</a>
                <a href="#" class="btn btn-outline">Find a Comic Shop Near You</a>
                <a href="#" class="btn btn-outline">Join DC Universe Infinite</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/comic-details.css') }}">
@endpush
