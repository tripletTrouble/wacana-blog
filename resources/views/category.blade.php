<x-base-layout>
    <h1 class="font-semibold text-center text-gray-800 dark:text-slate-50 text-xl md:text-2xl lg:text-3xl mb-8">Daftar Kategori
        Postingan</h1>
    <div class="flex flex-col gap-8 text-gray-800 dark:text-white mt-5">
        @foreach ($categories as $category)
            <div class="">
                <a href="{{ route('categories.posts', $category->name) }}">
                    <h2 class="font-semibold text-lg md:text-xl lg:text-2xl text-sky-500 hover:underline">
                        {{ $category->name }}</h2>
                </a>
                <p class="mt-1 text-sm">
                    {{ strlen($category->description) ? $category->description : 'Tidak ada deskripsi' }}</p>
            </div>
        @endforeach
    </div>
    <div>
        {{ $categories->links() }}
    </div>
</x-base-layout>
