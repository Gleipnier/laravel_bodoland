@extends('layouts.appadminlte')

@section('header', 'Edit Gallery Image')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="gallery_image_title">Image Title</label>
                <input type="text" name="gallery_image_title" class="form-control"
                    value="{{ $gallery->gallery_image_title }}" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control" value="{{ $gallery->category }}" required>
            </div>
            <div class="form-group">
                <label for="gallery_image_url">Image</label>
                <input type="file" name="gallery_image_url" class="form-control">
                <img src="{{ $gallery->gallery_image_url }}" alt="{{ $gallery->gallery_image_title }}" width="100">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
