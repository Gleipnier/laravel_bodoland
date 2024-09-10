<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Services') }}
            </h2>
        </x-slot>
        <a href="{{ route('services.create') }}">Create New Service</a>
            <a href="{{ route('services.edit', $service->id) }}">Edit Service</a>
            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Service</button>
    </form>
    </x-app-layout>