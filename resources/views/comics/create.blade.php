@extends('layouts.main')

@section('title', 'main-content')

@section('main-content')
    <div class="container my-5">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors -> all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('comics.store') }}" method="POST" class="row g-3">

                @csrf


                <div class="col-md-6">
                    <label for="input-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="input-title">
                </div>
                <div class="col-md-6">
                    <label for="input-description" class="form-label">description</label>
                    <textarea class="form-control" name="description" id="input-description" cols="30" rows="10"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="input-thumb" class="form-label">thumb</label>
                    <input class="form-control" name="thumb" id="input-thumb">
                </div>
                <div class="col-12">
                    <label for="input-price" class="form-label">price</label>
                    <input type="text" name="price" class="form-control" id="input-price">
                </div>
                <div class="col-12">
                    <label for="input-series" class="form-label">series</label>
                    <input type="text" name="series" class="form-control" id="input-series">
                </div>
                <div class="col-md-6">
                    <label for="input-type" class="form-label">type</label>
                    <input type="text" name="type" class="form-control" id="input-type">
                </div>
                <div class="col-md-6">
                    <label for="input-sale_date" class="form-label">sale-date</label>
                    <input type="date" name="sale_date" class="form-control" id="input-sale_date>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                </div>
            </form>
        </div>
    </div>

@endsection
