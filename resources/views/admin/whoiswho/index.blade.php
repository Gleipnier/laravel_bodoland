{{-- resources/views/whoiswho/index.blade.php --}}
@extends('layouts.appadminlte')

@section('header', 'Who is Who')

@section('content')
    <div class="container-fluid">
        <a href="{{ route('whoiswho.create') }}" class="btn btn-primary mb-2">Create Who Is Who</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($whoiswhos as $whoiswho)
                    <tr>
                        <td>{{ $whoiswho->id }}</td>
                        <td>{{ $whoiswho->name }}</td>
                        <td>{{ $whoiswho->designation }}</td>
                        <td>{{ $whoiswho->email }}</td>
                        <td>{{ $whoiswho->phone }}</td>
                        <td><img src="{{ $whoiswho->image_url }}" width="50"></td>
                        <td>
                            <a href="{{ route('whoiswho.edit', $whoiswho->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('whoiswho.destroy', $whoiswho->id) }}" method="POST"
                                style="display:inline-block;">
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
