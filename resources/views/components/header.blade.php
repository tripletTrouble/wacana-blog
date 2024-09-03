<header class="sticky top-0 py-4 bg-white dark:bg-gray-800 w-screen z-10 border-b-2">
    <div class="w-[90%] xl:w-[80%] mx-auto flex items-center justify-between">
        <div class="hidden lg:flex items-center gap-4 lg:gap-6">
            <nav id="large-menu" class="hidden md:flex gap-4">
                <a href="#" class="nav-item active font-semibold text-sm">UI/UX</a>
                <a href="#" class="nav-item font-semibold text-sm hidden md:block">Flutter</a>
                <a href="#" class="nav-item font-semibold text-sm hidden md:block">SwiftUI</a>
                <a href="#" class="nav-item font-semibold text-sm hidden md:block">Framer</a>
                <a href="#" class="nav-item font-semibold text-sm hidden md:block">Bootstrap CSS</a>
            </nav>
        </div>
        <x-logo />
        <div class="flex gap-4 items-center">
            <div class="relative hidden lg:flex h-16 max-w-[300px] flex-1 items-center">
                <form role="search" class="flex-1">
                    <label for="SiteSearch" class="sr-only">Search</label>
                    <input type="text" placeholder="Search..." id="SiteSearch"
                        class="w-full rounded-md bg-gray-100 border-0 sm:text-sm pl-12 pr-4 py-3" value="">
                    <button tabindex="-1" class="sr-only">Submit</button>
                </form>
                <div class="absolute top-5 left-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>
            <div id="top-menu" class="flex gap-6">
                <div class="hidden lg:flex">
                    <label for="darkTheme"
                        class="relative h-8 w-14 cursor-pointer [-webkit-tap-highlight-color:_transparent] dark-mode-toggler">
                        <input type="checkbox" id="darkTheme" name="is_dark"
                            class="peer sr-only [&:checked_+_span_svg[data-checked-icon]]:block [&:checked_+_span_svg[data-unchecked-icon]]:hidden"
                            value="1" />

                        <span
                            class="absolute inset-y-0 start-0 z-10 m-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white dark:bg-gray-800 text-gray-800 dark:text-slate-50 transition-all peer-checked:start-6 peer-checked:text-gray-800 dark:peer-checked:text-slate-50">
                            <svg data-unchecked-icon xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                viewBox="0 0 16 16" fill="currentColor">
                                <path
                                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                            </svg>

                            <svg data-checked-icon xmlns="http://www.w3.org/2000/svg" class="hidden h-4 w-4"
                                viewBox="0 0 16 16" fill="currentColor">
                                <path
                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278" />
                                <path
                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                            </svg>
                        </span>

                        <span
                            class="absolute inset-0 rounded-full bg-gray-300 dark:bg-gray-800 transition peer-checked:bg-sky-500"></span>
                    </label>
                </div>
            </div>
        </div>
        <div id="mobile-menu-button" class="lg:hidden" x-data="{ open: false }">
            <button type="button" @click="open=!open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="h-6 w-6 text-gray-800 dark:text-white" viewBox="0 0 16 16" x-cloak x-show="!open">
                    <path
                        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-gray-800 dark:text-white" x-cloak x-show="open">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            <nav class="fade-in fixed right-0 w-screen bg-white dark:bg-gray-800 top-16 flex items-center flex-col gap-6 py-10 z-[3] h-screen"
                x-cloak x-show="open">
                <div id="search-bar">
                    <div class="relative">
                        <form action="{{ route('posts.search') }}" method="get">
                            <label for="search-sm" class="sr-only"> Search for... </label>
                            <input type="text" id="search-sm" name="q" placeholder="Kata kunci..."
                                value="{{ request()->q }}"
                                class="w-full rounded-md border-gray-200 py-2.5 pe-10 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white sm:text-sm" />
                            <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                                <button type="button"
                                    class="text-gray-600 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                                    <span class="sr-only">Search</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </button>
                            </span>
                        </form>
                    </div>
                </div>
                <div class="nav-item">
                    <a href="#">Opini</a>
                    <p class="text-xs font-normal italic">Opini tentang peristiwa terkini.</p>
                </div>
                <div class="nav-item">
                    <a href="#">Ekonomi & Bisnis</a>
                    <p class="text-xs font-normal italic">Wacana tentang ekonomi & bisnis.</p>
                </div>
                <div class="nav-item">
                    <a href="#">Hukum</a>
                    <p class="text-xs font-normal italic">Wacana tentang hukum.</p>
                </div>
                <div class="nav-item">
                    <a href="#">Jurnalisme</a>
                    <p class="text-xs font-normal italic">Berita terkini dari warga #Wacana.</p>
                </div>
                <div class="nav-item">
                    <a href="#">Lainnya</a>
                    <p class="text-xs font-normal italic">Cari kategori lainnya</p>
                </div>
                <div class="flex">
                    <label for="AcceptConditionsMobile"
                        class="relative h-8 w-14 cursor-pointer [-webkit-tap-highlight-color:_transparent] dark-mode-toggler">
                        <input type="checkbox" id="AcceptConditionsMobile"
                            class="peer sr-only [&:checked_+_span_svg[data-checked-mobile-icon]]:block [&:checked_+_span_svg[data-unchecked-mobile-icon]]:hidden"
                            value="1" />

                        <span
                            class="absolute inset-y-0 start-0 z-10 m-1 inline-flex h-6 w-6 items-center justify-center rounded-full bg-white dark:bg-gray-800 text-gray-800 dark:text-slate-50 transition-all peer-checked:start-6 peer-checked:text-gray-800 dark:peer-checked:text-slate-50">
                            <svg data-unchecked-mobile-icon xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                viewBox="0 0 16 16" fill="currentColor">
                                <path
                                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                            </svg>

                            <svg data-checked-mobile-icon xmlns="http://www.w3.org/2000/svg" class="hidden h-4 w-4"
                                viewBox="0 0 16 16" fill="currentColor">
                                <path
                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278" />
                                <path
                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                            </svg>
                        </span>

                        <span
                            class="absolute inset-0 rounded-full bg-gray-300 dark:bg-gray-800 transition peer-checked:bg-sky-500"></span>
                    </label>
                </div>
            </nav>
        </div>

    </div>

    <script type="module">
        window.DarkMode = Object.create({
            isDarkMode: localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches),
            setDarkMode: function(isDarkMode) {
                this.isDarkMode = isDarkMode;
                return this;
            },
            save: function() {
                if (this.isDarkMode) {
                    localStorage.theme = 'dark';
                    return document.documentElement.classList.add('dark');
                }

                localStorage.theme = 'light';
                return document.documentElement.classList.remove('dark');
            }
        });

        window.darkModeController = new DarkModeToggler('.dark-mode-toggler', DarkMode);
        darkModeController.start();
    </script>
</header>
