@extends('layouts.base')

@section('head')
    @include('layouts.admin-head')
@endsection

@section('body')
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            @include('layouts.admin-sidebar')
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('layouts.admin-header')
            <!--  Header End -->
            <div class="container-fluid">
                @yield('app')
            </div>
        </div>
    </div>
    <script src="/libs/jquery/dist/jquery.min.js"></script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/sidebarmenu.js"></script>
    <script src="/js/app.min.js"></script>
    <script src="/libs/simplebar/dist/simplebar.js"></script>
@endsection
