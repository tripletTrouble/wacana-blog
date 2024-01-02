<x-base-layout :title="$category->name">
    <h1 class="text-gray-800 dark:text-white text-xl md:text-2xl lg:text-3xl font-semibold">{{ $category?->name }}</h1>
    <p class="text-gray-800 dark:text-white text-xs md:text-sm mb-8 mt-2">
        {{ $category?->description ?: 'Tidak ada deskripsi' }}</p>

    <div class="grid grid-cols-1 gap-6 md:w-[80%] mb-10">
        @foreach ($posts as $post)
            <x-post-card :post="$post"></x-post-card>
        @endforeach
    </div>
    <div>
        {{ $posts->links() }}
    </div>
</x-base-layout>
