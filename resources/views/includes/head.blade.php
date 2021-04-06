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
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=602d459ca0614500138d9390&product=inline-share-buttons" async="async"></script>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta property=”og:image” content=”@yield('image')”>

    <link rel="preload" href="{{ URL::asset('fontawesome/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ URL::asset('libs/slick/fonts/slick.woff') }}" as="font" type="font/woff2" crossorigin>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('images/logo/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('images/logo/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/logo/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('images/logo/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/logo/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/logo/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('images/logo/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/logo/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/logo/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('images/logo/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('images/logo/favicon//favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('images/logo/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/logo/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('images/logo/favicon//manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::asset('images/logo/favicon//ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/all.min.css') }}" defer>
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}?v=1.0.4" type="text/css"> 
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    
    <link rel="stylesheet" href="{{ URL::asset('libs/slick/slick-theme.css') }}" > 
    <script src="{{ URL::asset('libs/slick/slick.min.js') }}"></script>
    <link href="{{ URL::asset('libs/lightbox/css/lightbox.css') }}" />
    <script src="{{ URL::asset('libs/lightbox/js/lightbox.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" async>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" async>
    
    <meta name="google-site-verification" content="hBy1Fo2AMfhtfclF4bFzq2B6bRmgLZIbUgZzzewX0BU" defer/>
</head>
