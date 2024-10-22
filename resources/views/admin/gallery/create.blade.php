@extends('layouts.appadminlte')

@section('header', 'Create Gallery Image')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="gallery_image_title">Image Title</label>
                <input type="text" name="gallery_image_title" class="form-control" required>
            </div>
            {{-- <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control" required>
            </div> --}}
            <div class="form-group">
                <label for="gallery_image_url">Image</label>
                <input type="file" name="gallery_image_url" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
