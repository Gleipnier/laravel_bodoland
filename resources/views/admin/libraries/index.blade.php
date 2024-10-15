@extends('layouts.appadminlte')

@section('header', 'Libraries List')

@section('content')
    <div class="container-fluid">
        <a href="{{ route('libraries.create') }}" class="btn btn-primary mb-3">Create Library</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Subdivision</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libraries as $library)
                    <tr>
                        <td>{{ $library->id }}</td>
                        <td>{{ $library->name }}</td>
                        <td>{{ $library->subdivision->name }}</td>
                        <td>
                            <a href="{{ route('libraries.edit', $library) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('libraries.destroy', $library) }}" method="POST" style="display:inline;">
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
