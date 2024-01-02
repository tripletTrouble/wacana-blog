<x-base-layout>
    <div class="dark:text-white">
        <div id="search-wrapper" class="w-full md:w-[80%] lg:w-[70%] mx-auto">
            <form method="get">
                <div class="relative">
                    <label for="Search" class="sr-only"> Pencarian Postingan </label>

                    <input type="text" id="Search" name="q" placeholder="Kata kunci ..."
                        value="{{ request()->q }}"
                        class="w-full rounded-md border-gray-200 py-2.5 pe-10 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white sm:text-sm" />

                    <span class="absolute inset-y-0 end-0 grid w-10 place-content-center">
                        <button type="button"
                            class="text-gray-600 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-300">
                            <span class="sr-only">Pencarian</span>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </span>
                </div>
            </form>
            <div class="flex items-center flex-wrap gap-2 mt-5 text-sm" id="popular-keywords">
                <span>Paling sering dicari:</span>
                @foreach ($keywords as $keyword)
                    <a class="py-0.5 px-2 rounded-full border border-gray-700 dark:border-white text-xs md:text-sm"
                        href="{{ route('posts.search', ['q' => $keyword->keyword]) }}">{{ $keyword->keyword }}</a>
                @endforeach
            </div>
        </div>
        
        <div id="search-result" class="grid grid-cols-1 w-[100%] md:w-[80%] lg:w-[70%] mx-auto my-10 gap-8">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post-card :post="$post"></x-post-card>
                @endforeach
            @else
                <p class="text-center text-sm md:text-base">Postingan tidak ditemukan</p>
            @endif
        </div>
    </div>
</x-base-layout>
