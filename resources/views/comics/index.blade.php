@extends('layouts.main')

@section('title', 'main-content')

@section('main-content')
    <table class="table table-striped table-hover mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td><a href="{{ route("comics.show", $comic->id) }}">{{ $comic->title }}</a></td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
