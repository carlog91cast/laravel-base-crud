@extends('layouts.main')

@section('title', 'main-content')

@section('main-content')
    <div class="container d-flex justify-content-center">
        <div class="card mt-4" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
            </div>
        </div>
    </div>

@endsection
