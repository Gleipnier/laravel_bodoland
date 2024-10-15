@extends('layouts.appadminlte')

@section('header', 'Edit Subdivision')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('subdivisions.update', $subdivision) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Subdivision Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $subdivision->name }}"
                    required>
            </div>
            <div class="form-group">
                <label for="division_id">Division</label>
                <select class="form-control" name="division_id" id="division_id" required>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}"
                            {{ $subdivision->division_id == $division->id ? 'selected' : '' }}>{{ $division->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Subdivision</button>
        </form>
    </div>
@endsection
