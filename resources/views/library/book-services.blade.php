@extends('layouts.bookapp')

@section('title', 'Library Services')

@section('content')
    <h1>Library Services</h1>

    @foreach($services as $category => $categoryServices)
        <h2>{{ $category }}</h2>
        <ul>
            @foreach($categoryServices as $service)
                <li>
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->description }}</p>
                </li>
            @endforeach
        </ul>
    @endforeach
@endsection