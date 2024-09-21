@extends('layouts.bookapp')

@section('title', 'Library Catalogue - Books')

@section('content')
    <h1>Books</h1>
    
    <div class="filters">
        <select id="genre-filter">
            <option value="">All Genres</option>
            @foreach($genres as $genre)
                <option value="{{ $genre }}">{{ $genre }}</option>
            @endforeach
        </select>
        <select id="type-filter">
            <option value="">All Types</option>
            <option value="fiction">Fiction</option>
            <option value="non-fiction">Non-Fiction</option>
            <option value="academic">Academic</option>
        </select>
        <select id="sort-filter">
            <option value="popularity">Sort by Popularity</option>
            <option value="title">Sort by Title</option>
            <option value="author">Sort by Author</option>
            <option value="year">Sort by Year</option>
        </select>
    </div>
    
    <div class="books-list">
        @foreach($books as $book)
            <div class="book-item" data-genre="{{ $book->genre }}" data-type="{{ $book->type }}">
                <img src="{{ $book->image_url }}" alt="{{ $book->title }}">
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
        .filters {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .filters select {
            padding: 5px;
            flex-grow: 1;
        }
        .books-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .book-item {
            background: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .book-item:hover {
            transform: scale(1.05);
        }
        .book-item img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            margin-bottom: 10px;
        }
        .book-item h2 {
            margin-top: 0;
            font: bold 20px/1.5 Arial, Helvetica, sans-serif;
            color: #e8491d;
        }
    
        @media (max-width: 768px) {
            .books-list {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
            .book-item img {
                height: 250px;
            }
        }
    
        @media (max-width: 480px) {
            .books-list {
                grid-template-columns: 1fr;
            }
            .filters {
                flex-direction: column;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const genreFilter = document.getElementById('genre-filter');
            const typeFilter = document.getElementById('type-filter');
            const sortFilter = document.getElementById('sort-filter');
            const bookItems = document.querySelectorAll('.book-item');

            function applyFilters() {
                const selectedGenre = genreFilter.value;
                const selectedType = typeFilter.value;

                bookItems.forEach(item => {
                    const genre = item.dataset.genre;
                    const type = item.dataset.type;
                    
                    const genreMatch = !selectedGenre || genre === selectedGenre;
                    const typeMatch = !selectedType || type === selectedType;

                    item.style.display = genreMatch && typeMatch ? 'block' : 'none';
                });
            }

            function applySorting() {
                const sortBy = sortFilter.value;
                const booksList = document.querySelector('.books-list');
                const booksArray = Array.from(bookItems);

                booksArray.sort((a, b) => {
                    if (sortBy === 'title') {
                        return a.querySelector('h2').textContent.localeCompare(b.querySelector('h2').textContent);
                    } else if (sortBy === 'author') {
                        return a.querySelector('p:nth-child(2)').textContent.localeCompare(b.querySelector('p:nth-child(2)').textContent);
                    } else if (sortBy === 'year') {
                        return b.querySelector('p:nth-child(4)').textContent - a.querySelector('p:nth-child(4)').textContent;
                    }
                    // For popularity, we'd need to add a data attribute for popularity and sort based on that
                    return 0;
                });

                booksArray.forEach(book => booksList.appendChild(book));
            }

            genreFilter.addEventListener('change', applyFilters);
            typeFilter.addEventListener('change', applyFilters);
            sortFilter.addEventListener('change', applySorting);
        });
    </script>
@endsection