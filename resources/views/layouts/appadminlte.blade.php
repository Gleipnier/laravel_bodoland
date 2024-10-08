{{-- resources/views/layouts/app.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>@yield('header', 'Dashboard')</h1>
@stop

@section('content')
    <div class="container-fluid">
        @yield('content')
    </div>
@stop

@section('sidebar')
    @yield('sidebar')
@stop
