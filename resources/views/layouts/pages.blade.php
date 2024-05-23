@extends('layouts.base')

@section('head')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
@include('layouts.pages-head')
@endsection

@section('body')
@include('layouts.pages-header')
    @yield('app')
@include('layouts.pages-footer')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@stack('scripts')
@endsection
