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
        <script>!function () {var reb2b = window.reb2b = window.reb2b || [];if (reb2b.invoked) return;reb2b.invoked = true;reb2b.methods = ["identify", "collect"];reb2b.factory = function (method) {return function () {var args = Array.prototype.slice.call(arguments);args.unshift(method);reb2b.push(args);return reb2b;};};for (var i = 0; i < reb2b.methods.length; i++) {var key = reb2b.methods[i];reb2b[key] = reb2b.factory(key);}reb2b.load = function (key) {var script = document.createElement("script");script.type = "text/javascript";script.async = true;script.src = "https://s3-us-west-2.amazonaws.com/b2bjsstore/b/" + key + "/reb2b.js.gz";var first = document.getElementsByTagName("script")[0];first.parentNode.insertBefore(script, first);};reb2b.SNIPPET_VERSION = "1.0.1";reb2b.load("E63P0H7VYVOW");}();</script>
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>

    <body class="relative custom_cursor">

{{--        @include('_layouts.partials.custom_cursor')--}}
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
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        {{-- Js Library End --}}

        <script>
            // Function to get URL parameter
            function getUrlParameter(name) {
                let urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            // Pre-populate form fields if URL parameters exist
            document.addEventListener("DOMContentLoaded", function() {
                let form_name = getUrlParameter('form_name');
                let form_email = getUrlParameter('form_email');
                let form_message = getUrlParameter('form_message');

                // Pre-fill the form fields if the parameters exist in the URL
                if (form_name) {
                    document.getElementById('client__name').value = form_name;
                }

                if (form_email) {
                    document.getElementById('client_email').value = form_email;
                }

                if (form_message) {
                    document.getElementById('contact__message').value = form_message;
                }
            });

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-full-width",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            // Check the 'result' parameter for 'sent' or 'fail'
            let result = getUrlParameter('result');
            let fragment = window.location.hash;

            if (result === 'sent') {
                toastr["success"]("Your message was sent successfully!", "Success");
                window.history.replaceState(null, null, window.location.pathname + fragment);
            } else if (result === 'failed') {
                toastr["error"]("Failed to send your message. Please try again.", "Error");
                window.history.replaceState(null, null, window.location.pathname + fragment);
            }
        </script>
        <script defer
                src="https://unpkg.com/@tinybirdco/flock.js"
                data-host="https://api.tinybird.co"
                data-token="p.eyJ1IjogIjZmYTIwYTU5LWI3MmUtNGI4OC04NGMyLTFjZDQ4MjAwOWUzMCIsICJpZCI6ICI5YTIzNDdmMS03OGJkLTRjYzQtYmI0Ni1iNGU5ZGFkYTZkZjAiLCAiaG9zdCI6ICJldV9zaGFyZWQifQ.mLv84y-xSAZzagjyoqAJv6FxPfMWD2lrVsF6ysRd3KE"
        />
    </body>
</html>