{{-- Mobile Menu Bar Start --}}
<div
        class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between p-2 px-3 bg-white/10 mobile-menu-bar sm:px-6 backdrop-blur-md xl:hidden">
    <div class="text-lg font-medium name">
        <a href="index.html" class="flex items-center gap-2 text-black dark:text-white">
            <img src="assets/build/img/site-logo.svg" alt="Nuno Souto">
            <span>Nuno Souto</span>
        </a>
    </div>
    {{-- Mobile Hamburger Menu Start --}}
    <button
            class="w-12 h-12 border rounded-full hamburger menu_toggle bg-white dark:bg-nightBlack border-platinum dark:border-greyBlack flex-center"
            type="button"
            aria-label="Open Mobile Menu">
        <svg viewBox="0 0 20 12" class="w-6"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.33333 11.3333C5.33333 11.1565 5.40357 10.987 5.5286 10.8619C5.65362 10.7369 5.82319 10.6667 6 10.6667H19.3333C19.5101 10.6667 19.6797 10.7369 19.8047 10.8619C19.9298 10.987 20 11.1565 20 11.3333C20 11.5101 19.9298 11.6797 19.8047 11.8047C19.6797 11.9298 19.5101 12 19.3333 12H6C5.82319 12 5.65362 11.9298 5.5286 11.8047C5.40357 11.6797 5.33333 11.5101 5.33333 11.3333ZM2.66667 6C2.66667 5.82319 2.7369 5.65362 2.86193 5.5286C2.98695 5.40357 3.15652 5.33333 3.33333 5.33333H16.6667C16.8435 5.33333 17.013 5.40357 17.1381 5.5286C17.2631 5.65362 17.3333 5.82319 17.3333 6C17.3333 6.17681 17.2631 6.34638 17.1381 6.4714C17.013 6.59643 16.8435 6.66667 16.6667 6.66667H3.33333C3.15652 6.66667 2.98695 6.59643 2.86193 6.4714C2.7369 6.34638 2.66667 6.17681 2.66667 6ZM0 0.666667C0 0.489856 0.0702379 0.320287 0.195262 0.195262C0.320286 0.070238 0.489856 0 0.666667 0H14C14.1768 0 14.3464 0.070238 14.4714 0.195262C14.5964 0.320287 14.6667 0.489856 14.6667 0.666667C14.6667 0.843478 14.5964 1.01305 14.4714 1.13807C14.3464 1.2631 14.1768 1.33333 14 1.33333H0.666667C0.489856 1.33333 0.320286 1.2631 0.195262 1.13807C0.0702379 1.01305 0 0.843478 0 0.666667Z"
                  class="fill-theme dark:fill-white"/>
        </svg>
    </button>
    {{-- Mobile Hamburger Menu End --}}
</div>
{{-- Mobile Menu Bar End --}}

{{-- Mobile Menu Sidebar Start --}}
<div
        class="mobile-menu fixed top-0 -right-full w-full max-w-mobilemenu bg-flashWhite dark:bg-nightBlack z-999 h-full xl:hidden transition-all duration-300 [&.is-menu-open]:right-0 py-12 px-8 overflow-y-scroll">
    <button
            class="absolute flex items-center justify-center w-9 h-9 text-sm text-white rounded-full close-menu top-4 right-4 bg-greyBlack"
            aria-label="Close Menu">
        <i class="fal fa-times"></i>
    </button>
    <div class="mb-6 text-lg font-medium text-black dark:text-white menu-title">
        Menu
    </div>
    <ul class="space-y-5 font-normal main-menu">
        <li data-scroll-nav="0" class="relative group active">
            <a href="#home" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-home"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Home
                </span>
            </a>
        </li>
        <li data-scroll-nav="1" class="relative group">
            <a href="#about" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-user"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    About
                </span>
            </a>
        </li>
        <li data-scroll-nav="2" class="relative group">
            <a href="#" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-briefcase"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Service
                </span>
            </a>
        </li>
        <li data-scroll-nav="3" class="relative group">
            <a href="#skill" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-graduation-cap"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Skills
                </span>
            </a>
        </li>
        <li data-scroll-nav="4" class="relative group">
            <a href="#resume" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-file-alt"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Resume
                </span>
            </a>
        </li>
        <li data-scroll-nav="5" class="relative group">
            <a href="#portfolio" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-tasks-alt"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Poftfolio
                </span>
            </a>
        </li>
        <li data-scroll-nav="6" class="relative group">
            <a href="#blog" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-blog"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Blog
                </span>
            </a>
        </li>
        <li data-scroll-nav="7" class="relative group">
            <a href="#testimonial" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-comment-alt-lines"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Testimonial
                </span>
            </a>
        </li>
        <li data-scroll-nav="8" class="relative group">
            <a href="#contact" class="flex items-center space-x-2 group">
                <span class="w-5 text-black dark:text-white group-[&.active]:text-theme">
                    <i class="fal fa-envelope"></i>
                </span>
                <span class="group-[&.active]:text-theme dark:group-[&.active]:text-white group-hover:text-theme transition-colors">
                    Contact
                </span>
            </a>
        </li>
    </ul>
    <br>
    <div class="mb-4 font-medium text-black dark:text-white menu-title text-md">
        Get in Touch
    </div>
    {{-- Social Share Icon Start --}}
    <div class="flex items-center space-x-4 social-icons *:flex">
        <a href="https://github.com/nsouto" title="Visit my Github">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/nsouto/" title="Visit my Linkedin">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://www.instagram.com/guc.canada/" title="Follow my Capoeira Group on Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
    {{-- Social Share Icon End --}}
</div>
{{-- Mobile Menu Sidebar End --}}

{{-- Nav/Navigation Start --}}
<div class="minfo__nav__wrapper bg-snowWhite dark:bg-power__black max-xl:hidden fixed top-1/2 -translate-y-1/2 right-4 2xl:right-14 z-999 flex items-center flex-col gap-4 border border-platinum dark:border-metalBlack rounded-4xl px-2.5 py-4">

    {{-- Site Logo Start --}}
    <div class="flex border rounded-full logo w-15 h-15 border-platinum dark:border-metalBlack flex-center hover:bg-white dark:hover:bg-metalBlack">
        <a href="index.html">
            <img src="assets/build/img/site-logo.svg" alt="Nuno Souto">
        </a>
    </div>
    {{-- Site Logo Start --}}


    {{-- Main Menu/Navigation Start --}}
    <div class="my-4 menu">
        <ul class="space-y-2 text-center *:relative">
            <li data-scroll-nav="0" class="group active">
                <a href="#home"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="Home">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-home"></i>
                    </span>
                </a>
            </li>
            <li data-scroll-nav="1" class="group">
                <a href="#about"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="About">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-user"></i>
                    </span>
                </a>
            </li>
            <li data-scroll-nav="2" class="group">
                <a href="#service"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="Service">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-briefcase"></i>
                    </span>
                </a>
            </li>
            <li data-scroll-nav="3" class="group">
                <a href="#skill"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="Skills">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-graduation-cap"></i>
                    </span>
                </a>
            </li>
            <li data-scroll-nav="4" class="group">
                <a href="#resume"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="Resume">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-file-alt"></i>
                    </span>
                </a>
            </li>
            {{--                        <li data-scroll-nav="5" class="group">--}}
            {{--                            <a href="#portfolio"--}}
            {{--                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"--}}
            {{--                                data-title="Poftfolio">--}}
            {{--                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">--}}
            {{--                                    <i class="fal fa-tasks-alt"></i>--}}
            {{--                                </span>--}}
            {{--                            </a>--}}
            {{--                        </li>--}}
            {{--                        <li data-scroll-nav="6" class="group">--}}
            {{--                            <a href="#blog"--}}
            {{--                                class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"--}}
            {{--                                data-title="Blog">--}}
            {{--                                <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">--}}
            {{--                                    <i class="fal fa-blog"></i>--}}
            {{--                                </span>--}}
            {{--                            </a>--}}
            {{--                        </li>--}}
            <li data-scroll-nav="7" class="group">
                <a href="#testimonial"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="Testimonial">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-comment-alt-lines"></i>
                    </span>
                </a>
            </li>
            <li data-scroll-nav="8" class="group">
                <a href="#contact"
                   class="w-9 h-9 rounded-full flex-center group-[&.active]:bg-white dark:group-[&.active]:bg-metalBlack group-hover:bg-white dark:group-hover:bg-metalBlack transition-all duration-300 before:content-[attr(data-title)] before:absolute before:right-10 before:bg-white dark:before:bg-metalBlack before:text-sm text-theme dark:before:text-white before:px-4 before:py-2 before:rounded-md before:font-normal dark:before:font-light before:opacity-0 before:transition-all before:duration-200 group-hover:before:opacity-100 after:content-[''] after:absolute after:w-0 after:h-0 after:right-8 after:border-solid after:border-t-4 after:border-r-0 after:border-b-4 after:border-l-8 after:border-t-transparent after:border-r-transparent after:border-b-transparent after:border-l-white dark:after:border-l-metalBlack after:opacity-0 after:transition-all after:duration-200 group-hover:after:opacity-100"
                   data-title="Contact">
                    <span class="text-black dark:text-white group-hover:text-theme group-[&.active]:text-theme">
                        <i class="fal fa-envelope"></i>
                    </span>
                </a>
            </li>
        </ul>
    </div>
    {{-- Main Menu/Navigation End --}}

    {{-- Share Button Wrapper Start --}}
    <div class="relative share group">
        <button
                class="w-10 h-10 text-sm border rounded-full border-platinum dark:border-metalBlack flex-center group-hover:bg-white dark:group-hover:bg-metalBlack text-black dark:text-white"
                aria-label="Share">
            <i class="fal fa-share-alt"></i>
        </button>

        {{-- Social Share Icon Start --}}
        <div class="absolute bottom-0 flex items-center invisible px-5 py-6 space-x-3 transition-all duration-300 -translate-y-1/2 opacity-0 social-icons top-1/2 bg-white dark:bg-nightBlack rounded-4xl right-6 group-hover:opacity-100 group-hover:visible group-hover:right-10 -z-1 *:flex *:transition *:duration-200">
            <a href="https://github.com/nsouto" class="hover:text-theme" title="Visit my Github">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/nsouto/" class="hover:text-theme" title="Visit my Linkedin">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/guc.canada/" class="hover:text-theme" title="Follow my Capoeira Group on Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        {{-- Social Share Icon End --}}

    </div>
    {{-- Share Button Wrapper End --}}

</div>
{{-- Nav/Navigation End --}}