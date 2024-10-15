@extends('layouts.appadminlte')

@section('header', 'Create New Book')

@section('content')
    <div class="container-fluid">

        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN:</label>
                <input type="text" name="isbn" class="form-control">
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" class="form-control">
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <select name="type" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="fiction">Fiction</option>
                    <option value="non-fiction">Non-fiction</option>
                    <option value="academic">Academic</option>
                </select>
            </div>
            <div class="form-group">
                <label for="library_id">Library</label>
                <select class="form-control" id="library_id" name="library_id" required>
                    <option value="">Select a Library</option>
                    @foreach ($libraries as $library)
                        <option value="{{ $library->id }}">{{ $library->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="publication_year">Publication Year:</label>
                <input type="number" name="publication_year" class="form-control">
            </div>
            <div class="form-group">
                <label for="image_url">Book Image:</label>
                <input type="file" name="image_url" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
