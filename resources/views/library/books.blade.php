@extends('layouts.bookapp')

@extends('layouts.bookcss')

@section('title', 'Library Catalogue - Books')


<style>
    .container {
        z-index: 1;
        perspective: 3000px;
    }

    .container .book {
        position: relative;
        display: block;
        width: 250px;
        height: 400px;
        margin: 5% auto;
        border-radius: 2px 4px 4px 2px;
        background: linear-gradient(45deg, #DAD5DC 0%, #f2ebf4 100%);
        font-family: acumin-pro, sans-serif;
        -webkit-box-shadow: 13px 13px 8px 0px rgba(151, 146, 153, 0.6);
        -moz-box-shadow: 13px 13px 8px 0px rgba(151, 146, 153, 0.6);
        box-shadow: 13px 13px 8px 0px rgba(151, 146, 153, 0.6);
        font-weight: 400;
        color: #2b2b2b;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transition: -webkit-transform .5s;
        -moz-transition: -moz-transform .5s;
        transition: transform .5s;
    }

    .container .book:hover {
        -webkit-transform: rotate3d(0, 1, 0, 35deg);
        -moz-transform: rotate3d(0, 1, 0, 35deg);
        transform: rotate3d(0, 1, 0, 35deg);
    }

    .container .book>div,
    .container .front>div {
        display: block;
        position: absolute;
    }


    .container .front {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-transform-origin: 0% 50%;
        -moz-transform-origin: 0% 50%;
        transform-origin: 0% 50%;
        -webkit-transition: -webkit-transform .5s;
        -moz-transition: -moz-transform .5s;
        transition: transform .5s;
        -webkit-transform: translate3d(0, 0, 20px);
        -moz-transform: translate3d(0, 0, 20px);
        transform: translate3d(0, 0, 20px);
        z-index: 10;
    }

    .container .front>div {
        width: 250;
        height: 400px;
    }

    .container .left-side {
        width: 40px;
        left: -20px;
        height: 400px;
        background-color: rgba(232, 229, 234);
        -webkit-transform: rotate3d(0, 1, 0, -90deg);
        -moz-transform: rotate3d(0, 1, 0, -90deg);
        transform: rotate3d(0, 1, 0, -90deg);
    }

    .cover img {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #eye-right {
        padding-left: 185px;
    }

    .cover .num-up {
        position: absolute;
        top: 64px;
        left: 47px;
        letter-spacing: 50px;
        transform: rotate(-90deg);
    }

    .cover .num-down {
        position: relative;
        top: 65px;
        left: -95px;
        transform: rotate(-90deg);
    }

    .author {
        font-family: acumin-pro, sans-serif;
        font-weight: 400;
        position: absolute;
        top: 475px;
        left: 50px;
        opacity: .8;
    }

    .container .front>div {
        border-radius: 0 3px 3px 0;
        box-shadow:
            inset 4px 0 10px rgba(0, 0, 0, 0.1);
    }

    .container .front:after {
        content: '';
        position: absolute;
        top: 1px;
        bottom: 1px;
        left: -1px;
        width: 1px;
    }

    .container .cover:after {
        content: '';
        position: absolute;
        top: 0;
        left: 10px;
        bottom: 0;
        width: 3px;
        background: rgba(0, 0, 0, 0.1);
        box-shadow: 1px 0 3px rgba(255, 255, 255, 0.1);
    }


    .container h2 {
        width: 500px;
        height: 40px;
        color: #2b2b2b;
        font-size: 15px;
        line-height: 40px;
        padding-right: 10px;
        text-align: right;
        -webkit-transform-origin: 0 0;
        -moz-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: rotate(90deg) translateY(-40px);
        -moz-transform: rotate(90deg) translateY(-40px);
        transform: rotate(90deg) translateY(-40px);
    }

    .cover {
        background: linear-gradient(45deg, #DAD5DC 0%, #f2ebf4 100%);
    }


    .left-side h2 span:first-child {
        font-size: 16px;
        padding-right: 20px;
    }

    .left-side h2 span:first-child {
        font-family: acumin-pro, sans-serif;
    }


    .left-side h2 span:last-child {
        font-family: acumin-pro, sans-serif;
    }
</style>

@section('content')

    <div class="container-membership" style="padding-top: 70px">
        <div class="content">
            <h1>Books</h1>

            <div class="filters container-membership">
                <select id="genre-filter">
                    <option value="">All Genres</option>
                    @foreach ($genres as $genre)
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

            {{-- <div class="books-list">
                @foreach ($books as $book)
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
            </div> --}}


            <div class="books-list">
                @foreach ($books as $book)
                    <div class="book-item" data-genre="{{ $book->genre }}" data-type="{{ $book->type }}">
                        <div class="container">
                            <div class="book">
                                <div class="front">
                                    <div class="cover">
                                        <img src="{{ $book->image_url }}" alt="{{ $book->title }}">
                                    </div>
                                </div>
                                <div class="left-side">
                                    <h2>
                                        <span>{{ $book->author }}</span>
                                        <span>{{ $book->publication_year }}</span>
                                        <span style="padding-left: 200px;"></span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

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
            /* background: #fff; */
            padding: 15px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
            transition: transform 0.3s ease;
        }

        .book-item:hover {
            transform: scale(1.05);
        }

        .book-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
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
                width: 100%;
                height: 100%;
                object-fit: cover;
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
                        return a.querySelector('h2').textContent.localeCompare(b.querySelector('h2')
                            .textContent);
                    } else if (sortBy === 'author') {
                        return a.querySelector('p:nth-child(2)').textContent.localeCompare(b.querySelector(
                            'p:nth-child(2)').textContent);
                    } else if (sortBy === 'year') {
                        return b.querySelector('p:nth-child(4)').textContent - a.querySelector(
                            'p:nth-child(4)').textContent;
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
