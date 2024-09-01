<div class="flex flex-col md:gap-12 md:flex-row text-gray-800 dark:text-white">
    <div class="mt-3 md:mt-0 w-auto">
        <a href="{{ route('categories.posts', $post->category->name) }}">
            <p class="bg-sky-400/10 text-xs w-fit p-2 text-sky-500 rounded-md font-semibold">
                {{ str()->upper($post->category->name) }}</p>
        </a>
        <a href="{{ route('posts.show', $post->slug) }}">
            <h3 class="font-semibold text-xl xl:text-2xl mt-1 line-clamp-2 xl:line-clamp-3">{{ $post->title }}</h3>
        </a>
        <p class="text-[11px] lg:text-xs mt-0.5">Oleh: <a href="{{ route('author.posts', $post->author->uuid) }}"
                class="font-semibold">{{ $post->author->name }}</a> &bull;
            {{ $post->created_at->diffForHumans() }}</p>
        <a href="{{ route('posts.show', $post->slug) }}">
            <p class="text-sm mt-3 xl:text-base line-clamp-3">{{ $post->excerpt }}</p>
        </a>
    </div>
    <a href="{{ route('posts.show', $post->slug) }}">
        <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" class="rounded-xl">
    </a>
</div>