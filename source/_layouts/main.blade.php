<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <title>{{ $page->title }}</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="keyword" content="resume, cv, portfolio, vcard, responsive, retina, jquery, css3, tailwindcss, material CV, creative, designer, developer, online cv, online resume, powerful portfolio, professional, landing page">
        <meta name="description" content="{{ $page->description }}">
        <meta name="author" content="Nuno Souto">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="shortcut icon" href="assets/build/img/user-sidebar-thumb.webp" sizes="any">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/build/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="assets/build/css/cdheadline.css">
        <link rel="stylesheet" href="assets/build/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/build/css/style.min.css">

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>

    <body class="relative custom_cursor">

        @include('_layouts.partials.custom_cursor')
{{--        @include('_layouts.partials.preloader')--}}

        {{-- App Start --}}
        @yield('body')
        {{-- App End --}}

        @include('_layouts.partials.background_line_animation')

        @include('_layouts.partials.style_switcher')

        {{-- Js Library Start --}}
        <script src="assets/build/js/jquery-3.6.0.min.js"></script>
        <script src="assets/build/js/waypoints.min.js"></script>
        <script src="assets/build/js/tw-elements.umd.min.js"></script>
        <script src="assets/build/js/cd-headline.js"></script>
        <script src="assets/build/js/jquery.counterup.min.js"></script>
        <script src="assets/build/js/swiper-bundle.min.js"></script>
        <script src="assets/build/js/scrollIt.min.js"></script>
        <script src="assets/build/js/circle-progress.min.js"></script>
        <script src="assets/build/js/script.js"></script>
        <script src="assets/build/js/theme-mode.js"></script>
        {{-- Js Library End --}}
    </body>
</html>