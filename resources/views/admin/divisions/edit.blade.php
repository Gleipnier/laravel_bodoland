@extends('layouts.appadminlte')

@section('header', 'Edit Division')

@section('content')
    <div class="container-fluid">

        <form action="{{ route('divisions.update', $division->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Division Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $division->name }}" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
