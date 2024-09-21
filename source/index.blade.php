@extends('_layouts.main')

@section('body')
    <div class="relative pt-10 minfo__app max-xl:pt-20">
        <div class="menu-overlay fixed top-0 left-0 w-full h-full bg-black/60 transition-all duration-200 z-999 opacity-0 invisible [&.is-menu-open]:visible [&.is-menu-open]:opacity-100"></div>

        <div class="max-lg:px-4">

            @include('partials.navigation')

            @include('partials.sidebar_profile')

            {{-- Main Content Start --}}
            <div class="minfo__contentBox relative mx-auto max-w-container xl:max-2xl:max-w-65rem *:py-5 xl:*:py-3.5 *:max-w-content max-xl:*:mx-auto xl:*:ml-auto xl:max-2xl:*:max-w-50rem">

                @include('content.hero')

                @include('content.about_me')

{{--                @include('content.services')--}}

                @include('content.skills')

                @include('content.resume')

{{--                @include('content.portfolio')--}}

{{--                @include('content.blog')--}}

{{--                @include('content.testimonial')--}}

                @include('content.contact')

            </div>
            {{-- Main Content End --}}

            @include('partials.footer')

        </div>
    </div>
@endsection
