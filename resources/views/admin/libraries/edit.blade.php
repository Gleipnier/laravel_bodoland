@extends('layouts.appadminlte')

@section('header', 'Edit Library')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('libraries.update', $library) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Library Name</label>
                <input type="text" name="name" class="form-control" value="{{ $library->name }}" required>
            </div>
            <div class="form-group">
                <label for="subdivision_id">Subdivision</label>
                <select name="subdivision_id" class="form-control" required>
                    <option value="">Select Subdivision</option>
                    @foreach ($subdivisions as $subdivision)
                        <option value="{{ $subdivision->id }}"
                            {{ $library->subdivision_id == $subdivision->id ? 'selected' : '' }}>
                            {{ $subdivision->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Library</button>
        </form>
    </div>
@endsection
