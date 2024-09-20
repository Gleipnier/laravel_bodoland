@extends('layouts.bookapp')

@section('title', 'Library Catalogue - Books')

@section('content')
    <h1>Books</h1>
    
    <div class="books-list">
        @foreach($books as $book)
            <div class="book-item">
                <h2>{{ $book->title }}</h2>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
                <p><strong>Year:</strong> {{ $book->publication_year }}</p>
                <p><strong>Genre:</strong> {{ $book->genre }}</p>
                <p><strong>Library:</strong> {{ $book->library->name }}</p>
            </div>
        @endforeach
    </div>

    {{ $books->links() }}

    <style>
        .books-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .book-item {
            background: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .book-item h2 {
            margin-top: 0;
            color: #e8491d;
        }
    </style>
@endsection