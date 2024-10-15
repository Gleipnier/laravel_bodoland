@extends('layouts.appadminlte')

@section('header', 'Create Library')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('libraries.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Library Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subdivision_id">Subdivision</label>
                <select name="subdivision_id" class="form-control" required>
                    <option value="">Select Subdivision</option>
                    @foreach ($subdivisions as $subdivision)
                        <option value="{{ $subdivision->id }}">{{ $subdivision->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Library</button>
        </form>
    </div>
@endsection
