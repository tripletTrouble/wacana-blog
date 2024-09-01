<x-base-layout>
    <div id="featured">
        <h2 class="sr-only">Featured Post</h2>
        @foreach ($featured_posts as $post)
            <a class="relative slide-item fade block" href="{{ route('posts.show', $post->slug) }}">
                <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}">
                <div
                    class="absolute bg-white/90 py-2 px-4 max-h-[80%] max-w-[90%] lg:max-w-[70%] overflow-hidden left-5 top-0 dark:bg-gray-900/90 dark:text-white rounded-b-md">
                    <span
                        class="text-xs md:text-sm lg:text-base font-semibold pb-1 px-1 lg:px-2 border-b border-black dark:border-white">Paling
                        Hangat</span>
                    <h2 class="font-bold text-lg lg:text-2xl xl:text-3xl line-clamp-2 md:line-clamp-3 lg:line-clamp-3 mt-1 md:mt-3">
                        {{ $post->title }}
                    </h2>
                    <p class="mt-1 text-[10px] md:text-xs">Oleh: {{ $post->author->name }} &bull;
                        {{ $post->created_at->diffForHumans() }}</p>
                    <p class="mt-3 text-sm lg:text-base line-clamp-2 md:line-clamp-3">
                        {{ $post->excerpt }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>

    <div id="latest" class="w-full lg:w-[90%] xl:w-[80%] mx-auto mt-6 md:mt-8 lg:mt-10 mb-10">
        <div id="latest-item" class="grid grid-cols-1 gap-10 text-gray-800 dark:text-white">
            @foreach ($latest_posts as $post)
                <x-post-card :post="$post"></x-post-card>
            @endforeach
        </div>
        <div id="latest-pagination">
            {{ $latest_posts->links() }}
        </div>
    </div>

    <style>
        .fade {
            animation-name: slide;
            animation-duration: 0.75s;
        }

        @keyframes slide {
            from {
                opacity: 0;
                right: -50px;
            }

            to {
                opacity: 1;
                right: 0px;
            }
        }
    </style>

    <script type="module">
        const slide = new Carousel('#headline')

        slide.start()
    </script>
</x-base-layout>
