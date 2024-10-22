@extends('layouts.appadminlte')

@section('header', 'Notifications')

@section('content')
    <div class="container-fluid">

        <a href="{{ route('notifications.create') }}" class="btn btn-primary">Create Notification</a>

        @if (session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Document</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notifications as $notification)
                    <tr>
                        <td>{{ $notification->title }}</td>
                        <td>{{ $notification->description }}</td>
                        <td>{{ $notification->date }}</td>
                        <td>
                            @if ($notification->document)
                                <a href="{{ asset('storage/' . $notification->document) }}" target="_blank">View Document</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('notifications.edit', $notification->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('notifications.destroy', $notification->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
