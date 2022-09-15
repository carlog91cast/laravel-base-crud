@extends('layouts.main')

@section('title', 'main-content')

@section('main-content')
    <div class="container my-5">
        <div class="row">
            <form action="{{ route('comics.update') }}" method="POST" class="row g-3">

                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label for="input-title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="input-title" required>
                </div>
                <div class="col-md-6">
                    <label for="input-description" class="form-label">description</label>
                    <textarea class="form-control" name="description" id="input-description" cols="30" rows="10" required></textarea>
                </div>
                <div class="col-md-6">
                    <label for="input-thumb" class="form-label">thumb</label>
                    <input class="form-control" name="thumb" id="input-thumb" required>
                </div>
                <div class="col-12">
                    <label for="input-price" class="form-label">price</label>
                    <input type="text" name="price" class="form-control" id="input-price" required>
                </div>
                <div class="col-12">
                    <label for="input-series" class="form-label">series</label>
                    <input type="text" name="series" class="form-control" id="input-series" required>
                </div>
                <div class="col-md-6">
                    <label for="input-type" class="form-label">type</label>
                    <input type="text" name="type" class="form-control" id="input-type" required>
                </div>
                <div class="col-md-6">
                    <label for="input-sale_date" class="form-label">sale-date</label>
                    <input type="date" name="sale_date" class="form-control" id="input-sale_date"required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

@endsection
