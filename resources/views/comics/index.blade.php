@extends('layouts.app')

@section('title', 'Comics List')

@push('styles')
@vite('resources/css/comics-list.css')
@endpush

@section('content')
<div class="container">
    <h1 class="my-4">Comics List</h1>
    <a href="{{ route('comics.create') }}" class="btn btn-primary mb-3">Create New Comic</a>
    <div class="card-container">
        @foreach ($comics as $comic)
        <div class="card">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text"><strong>Series:</strong> {{ $comic->series }}</p>
                <p class="card-text"><strong>Price:</strong> {{ $comic->price }}</p>
                <p class="card-text"><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                <div class="card-actions">
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
