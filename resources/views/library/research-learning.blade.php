@extends('layouts.bookapp')

@section('title', 'Research & Learning')

@section('content')
    <h1>Research & Learning Resources</h1>

    @foreach($resources as $type => $typeResources)
        <h2>{{ $type }}</h2>
        <ul>
            @foreach($typeResources as $resource)
                <li>
                    <h3>{{ $resource->title }}</h3>
                    <p>{{ $resource->description }}</p>
                    @if($resource->url)
                        <a href="{{ $resource->url }}" target="_blank">Learn More</a>
                    @endif
                </li>
            @endforeach
        </ul>
    @endforeach
@endsection