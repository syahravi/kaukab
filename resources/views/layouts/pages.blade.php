@extends('layouts.base')

@section('head')
@vite(['resources/css/app.css', 'resources/js/app.js'])
@include('layouts.pages-head')
@endsection

@section('body')
@include('layouts.pages-header')
    @yield('app')
@include('layouts.pages-footer')
@endsection
