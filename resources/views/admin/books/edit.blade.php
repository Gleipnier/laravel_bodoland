@extends('layouts.appadminlte')

@section('header', 'Edit Book')

@section('content')
    <div class="container-fluid">

        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" class="form-control" value="{{ $book->author }}" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}">
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" class="form-control" value="{{ $book->genre }}">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select name="type" class="form-control" required>
                    <option value="fiction" {{ $book->type == 'fiction' ? 'selected' : '' }}>Fiction</option>
                    <option value="non-fiction" {{ $book->type == 'non-fiction' ? 'selected' : '' }}>Non-fiction</option>
                    <option value="academic" {{ $book->type == 'academic' ? 'selected' : '' }}>Academic</option>
                </select>
            </div>
            <div class="form-group">
                <label for="library_id">Library</label>
                <select class="form-control" id="library_id" name="library_id" required>
                    <option value="">Select a Library</option>
                    @foreach ($libraries as $library)
                        <option value="{{ $library->id }}" {{ $library->id == $book->library_id ? 'selected' : '' }}>
                            {{ $library->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="publication_year">Publication Year:</label>
                <input type="number" name="publication_year" class="form-control" value="{{ $book->publication_year }}">
            </div>
            <div class="form-group">
                <label for="image">Book Image:</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
