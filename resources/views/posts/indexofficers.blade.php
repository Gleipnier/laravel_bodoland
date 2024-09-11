<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
<div class="container">
    <table class="posts-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>District</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sportsofficers as $sportsofficer)
            <tr>
                <td>{{ $sportsofficer->id }}</td>
                <td>{{ $sportsofficer->district }}</td>
                <td>{{ $sportsofficer->name }}</td>
                <td>{{ $sportsofficer->designation }}</td>
                <td>{{ $sportsofficer->contact_number }}</td>
                <td>
                    <a href="{{ route('posts.edit', $sportsofficer->id) }}" class="btn-edit">Edit</a>
                    <!-- Delete Button -->
                    <form action="{{ route('posts.destroy', $sportsofficer->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-edit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>
