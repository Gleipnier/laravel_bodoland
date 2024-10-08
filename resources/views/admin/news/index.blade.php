@extends('layouts.appadminlte')

@section('header', 'News List')

@section('content')

    <div class="container-fluid">

        <a href="{{ route('news.create') }}" class="btn btn-primary mb-2">Create News</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Publish Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->publish_date }}</td>
                        <td>
                            <a href="{{ route('news.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('news.destroy', $item) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
