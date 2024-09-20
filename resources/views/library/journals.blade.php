@extends('layouts.bookapp')

@section('title', 'Library Catalogue - Journals')

@section('content')
    <h1>Journals</h1>
    
    <div class="journals-list">
        @foreach($journals as $journal)
            <div class="journal-item">
                <h2>{{ $journal->title }}</h2>
                <p><strong>ISSN:</strong> {{ $journal->issn }}</p>
                <p><strong>Frequency:</strong> {{ $journal->frequency }}</p>
                <p><strong>Publisher:</strong> {{ $journal->publisher }}</p>
                <h3>Recent Issues:</h3>
                <ul>
                    @foreach($journal->issues->take(5) as $issue)
                        <li>Issue {{ $issue->issue_number }} ({{ $issue->publication_date }})</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    {{ $journals->links() }}

    <style>
        .journals-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .journal-item {
            background: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .journal-item h2 {
            margin-top: 0;
            color: #e8491d;
        }
        .journal-item ul {
            padding-left: 20px;
        }
    </style>
@endsection