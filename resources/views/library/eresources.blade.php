@extends('layouts.bookapp')
@extends('layouts.bookcss')
@section('title', 'Library Catalogue - E-Resources')

@section('content')
    <h1>E-Resources</h1>
    
    <div class="eresources-list">
        @foreach($eresources as $resource)
            <div class="eresource-item">
                <h2>{{ $resource->title }}</h2>
                <p><strong>Type:</strong> {{ $resource->type }}</p>
                @if($resource->url)
                <form action="{{ $resource->url }}" method="get" target="_blank">
                    <button type="submit" class="url-button">Go to Reference</button>
                </form>                
                @endif
                @if($resource->access_information)
                    <p><strong>Access Information:</strong> {{ $resource->access_information }}</p>
                @endif
            </div>
        @endforeach
    </div>

    {{ $eresources->links() }}

    <style>
        .eresources-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .eresource-item {
            background: #fff;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .eresource-item h2 {
            margin-top: 0;
            color: #e8491d;
        }
    </style>
@endsection