@extends('layouts.appadminlte')

@section('header', 'Create Subdivision')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('subdivisions.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Subdivision Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="division_id">Division</label>
                <select class="form-control" name="division_id" id="division_id" required>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Subdivision</button>
        </form>
    </div>
@endsection
