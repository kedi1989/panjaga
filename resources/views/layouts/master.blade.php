<!DOCTYPE html>
<html lang="pl">
        @include('includes.head')
    <body>
    <div class="main-page-container">
    @include('includes.header')
    <div class="main-container">
        @yield('content')
    </div>
    </div>
        @include('includes.footer')
    </body>
</html>