@extends('layouts.main')

@section('title', 'main-content')

@section('main-content')
    <div class="container">
        <div class="row">
            @if (session('delete'))
                <div class="alert alert-success">
                    {{ session('delete') }} è stato cancellato per sempre dall'orbe terracqueo
                </div>
            @endif
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
                            <td><button class="btn btn-primary"><a class="text-decoration-none text-white"
                                        href="{{ route('comics.edit', $comic->id) }}">Edit</a></button></td>
                            <td>
                                <form class="form-delete" action="{{ route('comics.destroy', $comic->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><a class="text-decoration-none text-white"
                                            href="">Delete</a></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('footer-scripts')
    <script>
        const deleteFormElements = document.querySelectorAll('.form-delete');
        deleteFormElements.forEach(
            formElement => {
                formElement.addEventListener('submit', function(event){
                    event.preventDefault();
                    const result = window.confirm('vuoi davvero andare avanti?');
                    if(result) this.submit();
                })
            }
        )
    </script>
@endsection
