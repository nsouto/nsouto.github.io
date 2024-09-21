{{-- Style Switcher Started --}}
    <div class="style-switcher fixed right-0 top-1/2 -translate-y-1/2 translate-x-[15rem] w-[15rem] [&.active]:translate-x-0 transition z-[9999]">

        <div class="toggle-btn absolute -left-15 w-15 h-15 bg-white dark:bg-nightBlack text-black dark:text-white flex-center cursor-pointer rounded-[.5rem_0_0_.5rem] select-none shadow-sm shadow-slate-400">
            <span class="fal fa-cog fa-spin"></span>
        </div>

        <div class="theme-select shadow-sm shadow-slate-400 px-6 py-4 bg-white dark:bg-nightBlack rounded-[0_0_0_.5rem]">
            <h5 class="font-medium mb-2 !text-black dark:!text-white text-lg">Theme Mode</h5>

            <div class="flex items-center justify-between gap-4">
                <div class="switcher-input rounded-lg text-xl flex-[1] text-center transition cursor-pointer" data-theme="dark">
                    <button class="border w-full px-4 py-4 flex flex-col gap-1 justify-center items-center [&.active]:bg-flashWhite [&.active]:text-black dark:text-white rounded-md" id="dark_theme" title="Active Dark Theme">
                        <i class="fal fa-moon"></i>
                    </button>
                </div>
                <div class="switcher-input rounded-lg text-lg flex-[1] text-center transition cursor-pointer" data-theme="light">
                    <button class="border w-full px-4 py-4 flex flex-col gap-1 justify-center items-center [&.active]:bg-flashWhite [&.active]:text-black dark:text-white rounded-md" id="light_theme" title="Active Light Theme">
                        <i class="fal fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
{{-- Style Switcher End --}}