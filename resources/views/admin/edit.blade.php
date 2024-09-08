<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="margin-right: 44px">
                    {{ __("Notices") }}
                    
                    <div class="container">
                        {{-- THIS FORM NEEDS ALL FIELDS FILLED --}}
                        <form action="/update-Post" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table class="posts-table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Update Post</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="id" value="{{$post->id}}" hidden></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label for="title">Title</label></td>
                                        <td><input type="text" id="title" name="title" placeholder="Title" value="{{$post->title}}" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="description">Description</label></td>
                                        <td><textarea id="description" name="description" placeholder="Description" required>{{$post->description}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label for="document">Document</label></td>
                                        <td><input type="file" id="document" name="document"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align: center;">
                                            <button type="submit" class="btn-edit">Update</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
