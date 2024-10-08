@extends('layouts.appadminlte')

@section('header', 'Gallery')

@section('content')
    <div class="container-fluid">

        <a href="{{ route('gallery.create') }}" class="btn btn-primary mb-2">Create Gallery Image</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $gallery->id }}</td>
                        <td>{{ $gallery->gallery_image_title }}</td>
                        <td>{{ $gallery->category }}</td>
                        <td><img src="{{ $gallery->gallery_image_url }}" alt="{{ $gallery->gallery_image_title }}"
                                width="100"></td>
                        <td>
                            <a href="{{ route('gallery.edit', $gallery) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('gallery.destroy', $gallery) }}" method="POST" style="display:inline;">
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
