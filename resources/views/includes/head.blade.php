<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
    @if (env('APP_ENV')=='Production')
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-V3D9JRVZST"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-V3D9JRVZST');
        </script>
    @endif

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ URL::asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" type="text/css"> 
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('libs/slick/slick.css') }}" type="text/css"> 
    <link rel="stylesheet" href="{{ URL::asset('libs/slick/slick-theme.css') }}" type="text/css"> 
    <script src="{{ URL::asset('libs/slick/slick.min.js') }}"></script>
    <link href="{{ URL::asset('libs/lightbox/css/lightbox.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('libs/lightbox/js/lightbox.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="hBy1Fo2AMfhtfclF4bFzq2B6bRmgLZIbUgZzzewX0BU" />
</head>
