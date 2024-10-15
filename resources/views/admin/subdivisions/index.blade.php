@extends('layouts.appadminlte')

@section('header', 'Subdivisions List')

@section('content')
    <div class="container-fluid">

        <a href="{{ route('subdivisions.create') }}" class="btn btn-primary mb-3">Create Subdivision</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subdivisions as $subdivision)
                    <tr>
                        <td>{{ $subdivision->id }}</td>
                        <td>{{ $subdivision->name }}</td>
                        <td>{{ $subdivision->division->name }}</td>
                        <td>
                            <a href="{{ route('subdivisions.edit', $subdivision) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('subdivisions.destroy', $subdivision) }}" method="POST"
                                style="display:inline;">
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
