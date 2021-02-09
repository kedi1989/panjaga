<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        
        @include('includes.head')
        
    <body>
    <div class="main-page-container">
    @include('includes.header')
    <div class="main-container">

    @yield('content')

    </div>
    </div>
    @extends('includes.footer')
    </body>
</html>