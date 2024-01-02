<x-base-layout>
    <div class="flex flex-col md:flex-row items-center md:items-start w-full md:w-[80%] mx-auto text-gray-800 dark:text-white gap-4" id="author-details">
        <img src="{{ $author->getFilamentAvatarUrl() }}" alt="{{ $author->name }}" class="rounded-full h-20 w-auto">
        <div class="w-full">
            <p class="text-lg font-semibold text-center">{{ $author->name }}</p>
            <a class="text-xs text-center block" href="mailto:{{ $author->email }}">{{ $author->email }}</a>
            <p class="text-sm mt-2 text-center">{{ $author->profile->bio }}</p>
        </div>
    </div>
    <div class="w-full md:w-[80%] lg:w-[70%] grid grid-cols-1 gap-6 mt-8">
        @foreach ($posts as $post)
            <x-post-card :post="$post"></x-post-card>
        @endforeach
    </div>
    <div class="mb-10">
        {{ $posts->links() }}
    </div>
</x-base-layout>
