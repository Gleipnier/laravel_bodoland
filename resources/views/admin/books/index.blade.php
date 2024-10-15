@extends('layouts.appadminlte')

@section('header', 'All Books')

@section('content')
    <div class="container-fluid">

        <a href="{{ route('books.create') }}" class="btn btn-primary mb-2">Add New Book</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Genre</th>
                    <th>Publication Year</th>
                    <th>Type</th>
                    <th>Library</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>{{ $book->publication_year }}</td>
                        <td>{{ ucfirst($book->type) }}</td>
                        <td>{{ $book->library->name }}</td>
                        <td>
                            @if ($book->image_url)
                                <img src="{{ asset($book->image_url) }}" alt="{{ $book->title }}" width="100"
                                    height="100">
                            @else
                                <p>No Image</p>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
