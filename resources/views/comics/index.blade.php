@extends('layouts.main')

@section('title', 'main-content')

@section('main-content')
    <div class="container">
        <div class="row">
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->price }}</td>
                            <td><button class="btn btn-primary">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
