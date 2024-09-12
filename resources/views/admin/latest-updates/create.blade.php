<x-app-layout>

@extends('layouts.admin')
@section('content')
    <h1>Create New Update</h1>
    
    <form action="{{ route('latest-updates.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="url" class="form-control" id="link" name="link" required>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="is_new" name="is_new" value="1">
            <label class="form-check-label" for="is_new">Is New</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
</x-app-layout>