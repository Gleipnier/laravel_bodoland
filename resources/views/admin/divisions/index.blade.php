@extends('layouts.appadminlte')

@section('header', 'Division List')

@section('content')
    <div class="container-fluid">
        <a href="{{ route('divisions.create') }}" class="btn btn-primary mb-2">Add New Division</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($divisions as $division)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $division->name }}</td>
                        <td>
                            <a href="{{ route('divisions.edit', $division->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('divisions.destroy', $division->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
