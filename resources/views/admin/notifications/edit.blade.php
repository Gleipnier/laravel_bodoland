@extends('layouts.appadminlte')

@section('header', 'Edit Notifications')

@section('content')
    <div class="container-fluid">

        <form action="{{ route('notifications.update', $notification->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $notification->title }}" required>
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ $notification->description }}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" value="{{ $notification->date }}" required>
                @error('date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="document">Document (Optional)</label>
                <input type="file" name="document" class="form-control">
                @if ($notification->document)
                    <p>Current Document: <a href="{{ asset('storage/' . $notification->document) }}" target="_blank">View
                            Document</a></p>
                @endif
                @error('document')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Notification</button>
        </form>

    </div>
@endsection
