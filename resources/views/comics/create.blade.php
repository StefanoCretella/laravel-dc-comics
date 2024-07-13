@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<div class="container">
    <h1 class="my-4">Create Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-6">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="thumb" class="form-label">Thumbnail URL:</label>
            <input type="text" name="thumb" id="thumb" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="series" class="form-label">Series:</label>
            <input type="text" name="series" id="series" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="sale_date" class="form-label">Sale Date:</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="type" class="form-label">Type:</label>
            <input type="text" name="type" id="type" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="artists" class="form-label">Artists:</label>
            <input type="text" name="artists" id="artists" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="writers" class="form-label">Writers:</label>
            <input type="text" name="writers" id="writers" class="form-control" required>
        </div>
        <div class="col-12">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </div>
    </form>
</div>
@endsection
