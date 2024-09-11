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
                <th>Title</th>
                <th>Description</th>
                <th>Document</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($information as $info)
            <tr>
                <td>{{ $info->id }}</td>
                <td>{{ $info->title }}</td>
                <td>{{ $info->description }}</td>
                <td>
                    @if($info->document)
                        <a href="{{ asset('storage/' . $info->document) }}" target="_blank">View Document</a>
                    @else
                        No document
                    @endif
                </td>
                <td>{{ $info->created_at }}</td>
                <td>{{ $info->updated_at }}</td>
                <td>
                    <a href="{{ route('posts.edit', $info->id) }}" class="btn-edit">Edit</a>
                    <!-- Delete Button -->
                    <form action="{{ route('posts.destroy', $info->id) }}" method="POST" style="display:inline;">
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
