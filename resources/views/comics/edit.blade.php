@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Comic</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        @include('partials.form')
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </div>
    </form>
</div>
@endsection
