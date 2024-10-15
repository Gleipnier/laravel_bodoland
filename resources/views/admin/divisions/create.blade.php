@extends('layouts.appadminlte')

@section('header', 'Create Division')

@section('content')
    <div class="container-fluid">

        <form action="{{ route('divisions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Division Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
