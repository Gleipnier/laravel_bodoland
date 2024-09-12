<x-app-layout>
@extends('layouts.admin')
@section('content')
    <h1>Latest Updates</h1>
    <a href="{{ route('latest-updates.create') }}" class="btn btn-primary">Add New Update</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Is New</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($updates as $update)
                <tr>
                    <td>{{ $update->title }}</td>
                    <td>{{ $update->date }}</td>
                    <td>{{ $update->is_new ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('latest-updates.edit', $update->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('latest-updates.destroy', $update->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
</x-app-layout>