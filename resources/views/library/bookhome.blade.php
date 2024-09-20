@extends('layouts.bookapp')

@section('title', 'Library Catalogue - Home')
@section('content')
    <h1>Welcome to Our Library Catalogue</h1>
    
    <div class="recent-additions">
        <h2>Recent Additions</h2>
        
        <div class="section">
            <h3>Books</h3>
            <ul>
                @foreach($recentBooks as $book)
                    <li>{{ $book->title }} by {{ $book->author }}</li>
                @endforeach
            </ul>
        </div>
        
        <div class="section">
            <h3>Journals</h3>
            <ul>
                @foreach($recentJournals as $journal)
                    <li>{{ $journal->title }}</li>
                @endforeach
            </ul>
        </div>
        
        <div class="section">
            <h3>E-Resources</h3>
            <ul>
                @foreach($recentEResources as $resource)
                    <li>{{ $resource->title }} ({{ $resource->type }})</li>
                @endforeach
            </ul>
        </div>
    </div>

    <style>
        .recent-additions {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .section {
            flex-basis: 30%;
            background: #fff;
            padding: 15px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        ul {
            padding-left: 20px;
        }
    </style>
@endsection
