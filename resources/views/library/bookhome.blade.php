@extends('layouts.bookapp')

@section('title', 'Library Catalogue - Home')

@section('content')
    <h1>Welcome to Our Library Catalogue</h1>
    
    <div class="recent-additions">
        <div class="section books">
            <h2>Recent Books</h2>
            <div class="items">
                @foreach($recentBooks as $book)
                    <div class="item book">
                        <img src="{{ $book->image_url }}" alt="{{ $book->title }}">
                        <div class="details">
                            <h3>{{ $book->title }}</h3>
                            <p>by {{ $book->author }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('books') }}" class="view-all">View All Books</a>
        </div>
        
        <div class="section journals">
            <h2>Recent Journals</h2>
            <div class="items">
                @foreach($recentJournals as $journal)
                    <div class="item journal">
                        <h3>{{ $journal->title }}</h3>
                        <p>Latest Issue: {{ $journal->latest_issue }}</p>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('journals') }}" class="view-all">View All Journals</a>
        </div>
        
        <div class="section eresources">
            <h2>Recent E-Resources</h2>
            <div class="items">
                @foreach($recentEResources as $resource)
                    <div class="item eresource">
                        <h3>{{ $resource->title }}</h3>
                        <p>{{ $resource->type }}</p>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('eresources') }}" class="view-all">View All E-Resources</a>
        </div>
    </div>

    <style>
        .recent-additions {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        .section {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .items h3 {
            font: bold 20px/1.5 Arial, Helvetica, sans-serif;
        }
        .item {
            transition: transform 0.3s ease;
        }
        .item:hover {
            transform: scale(1.05);
        }
        .book img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 5px;
        }
        .book .details {
            padding: 10px 0;
        }
        .view-all {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: rgb(3, 195, 195);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .view-all:hover {
            background-color: rgb(37, 84, 112);
        }
    </style>
@endsection