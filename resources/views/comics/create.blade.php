@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<div class="container">
    <h1 class="my-4">Create Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST" class="row g-3">
        @csrf
        @include('partials.form')
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </div>
    </form>
</div>
@endsection
