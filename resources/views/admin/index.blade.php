<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </x-slot>
    
        {{-- Upload Posts Start--}}

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class="container">
                            {{-- THIS FORM NEEDS ALL FIELDS FILLED --}}
                            <form action="/create-Post" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="posts-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Upload Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label for="title">Title</label></td>
                                            <td><input type="text" id="title" name="title" placeholder="Title" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="description">Description</label></td>
                                            <td><textarea id="description" name="description" placeholder="Description" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="document">Document</label></td>
                                            <td><input type="file" id="document" name="document"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: center;">
                                                <button type="submit" class="btn-edit">Upload</button>
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

        {{-- Upload Posts End --}}

        {{-- Upload Information Start --}}

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class="container">
                            {{-- THIS FORM NEEDS ALL FIELDS FILLED --}}
                            <form action="/create-Post" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="posts-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Upload Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label for="title">Title</label></td>
                                            <td><input type="text" id="title" name="title" placeholder="Title" required></td>
                                        </tr>
                                        <tr>
                                            <td><label for="description">Description</label></td>
                                            <td><textarea id="description" name="description" placeholder="Description" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="document">Document</label></td>
                                            <td><input type="file" id="document" name="document"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align: center;">
                                                <button type="submit" class="btn-edit">Upload</button>
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

        {{-- Upload Information End --}}

        {{-- Upload Officers Start --}}

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <div class="container">
                            {{-- THIS FORM NEEDS ALL FIELDS FILLED --}}
                            <form action="/create-Post" method="POST" enctype="multipart/form-data">
                                @csrf
                                <table class="posts-table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Upload Sports Officers</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><label for="title">District</label></td>
                                            <td><input type="text" id="title" name="title" placeholder="District" required></td>
                                        </tr>                                
                                        <tr>
                                            <td><label for="description">Name</label></td>
                                            <td><textarea id="description" name="description" placeholder="Name" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="description">Designation</label></td>
                                            <td><textarea id="description" name="description" placeholder="Designation" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><label for="description">Contact No.</label></td>
                                            <td><textarea id="description" name="description" placeholder="Contact No." required></textarea></td>
                                        </tr>

                                        <tr>
                                            <td colspan="2" style="text-align: center;">
                                                <button type="submit" class="btn-edit">Upload</button>
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

        {{-- Upload Officers End --}}

    </x-app-layout>
    