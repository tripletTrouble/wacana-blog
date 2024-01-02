<div class="flex flex-col md:flex-row md:gap-8 text-gray-800 dark:text-white">
    <a href="{{ route('posts.show', $post->slug) }}" class="md:w-[50%]">
        <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}">
    </a>
    <div class="mt-3 md:mt-0 w-full md:w-[50%]">
        <a href="{{ route('categories.posts', $post->category->name) }}">
            <p class="text-gray-700 dark:text-slate-50 text-xs">
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
</div>