@extends('layouts.bookapp')

@section('title', 'Library Catalogue - Books by Division')

@section('content')
    <h1>Books by Division</h1>
    
    <div class="divisions-container">
        <div class="central-image">
            <img src="images/booklogo.jpg" alt="Library Logo">
        </div>
        @foreach($divisions as $division)
            <div class="division" style="--angle: {{ 360 / count($divisions) * $loop->index }}deg">
                <h2>{{ $division->name }}</h2>
                <ul class="subdivisions">
                    @foreach($division->subdivisions as $subdivision)
                        <li>
                            <a href="{{ route('books.subdivision', $subdivision->id) }}">
                                {{ $subdivision->name }}
                                <span class="book-count">({{ $subdivision->books_count }})</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <style>
        .divisions-container {
            position: relative;
            width: 800px;
            height: 800px;
            margin: 50px auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .central-image {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            z-index: 1; /* Ensure it's above other elements */
        }

        .central-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .division {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: rotate(var(--angle)) translateY(-300px) rotate(calc(var(--angle) * -1));
            width: 200px;
            text-align: center;
            z-index: 0; /* Ensure divisions are behind the central image */
        }

        .division h2 {
            margin-bottom: 10px;
            color: #e8491d;
        }

        .subdivisions {
            list-style-type: none;
            padding: 0;
        }

        .subdivisions li {
            margin-bottom: 5px;
        }

        .subdivisions a {
            color: #35424a;
            text-decoration: none;
        }

        .subdivisions a:hover {
            text-decoration: underline;
        }

        .book-count {
            font-size: 0.8em;
            color: #666;
        }
    </style>
@endsection
