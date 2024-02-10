<x-base-layout :title="$post->title">
    <p class="text-[11px] md:text-xs lg:text-sm mb-3 md:mb-5 text-gray-800 dark:text-white" id="breadcrumb">Home > <a
            class="font-semibold text-sky-500" href="#">{{ $post->category->name }}</a></p>
    <img class="mb-3 md:mb-5 dark:text-white" src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}">
    <h1 class="text-xl md:text-2xl lg:text-3xl xl:text-4xl font-bold text-center text-gray-800 dark:text-white">
        {{ $post->title }}</h1>
    <p class="text-xs md:text-sm text-center mb-5 mt-3 md:mt-5 dark:text-slate-100 text-gray-400">Oleh: <a
            class="font-semibold text-sky-500" href="{{ route('author.posts', $post->author->uuid) }}">{{ $post->author->name }}</a> &bull;
        {{ $post->created_at->diffForHumans() }} &bull; ({{ $post->mins_read }} menit baca)</p>
    @php
        $tags = explode(',', $post->tags);
    @endphp
    <p class="mb-10 text-center text-gray-400 dark:text-slate-100 text-sm md:text-base italic">
        @foreach ($tags as $item)
            {{ "#{$item}" }}
        @endforeach
    </p>
    <div class="mb-10 lg:mb-12 px-5 italic py-2 border-l-4 text-gray-800 dark:text-white border-gray-600 dark:border-white">"{{ $post->excerpt }}"</div>
    <div class="text-gray-800 dark:text-white" id="post-content">
        {!! $post->content !!}
    </div>
    <div id="about-author" class="text-gray-800 dark:text-white p-4 lg:max-w-[70%]">
        <h2 class="font-semibold mb-3 md:mb-5 uppercase">Tentang Penulis</h2>
        <div class="flex flex-col items-center gap-4 md:flex-row md:items-start" id="auhtor-bio">
            <img src="{{ $post->author->getFilamentAvatarUrl() }}" alt="{{ $post->author->name }}"
                class="h-20 w-auto md:h-28 lg:h-32 rounded-full">
            <div class="w-full">
                <a href="{{ route('author.posts', $post->author->uuid) }}"
                    class="font-semibold text-lg truncate block text-center md:text-left">{{ $post->author->name }}</a>
                <a href="mailto:{{ $post->author->email }}"
                    class="text-xs block text-center md:text-left">{{ $post->author->email }}</a>
                <p class="text-xs lg:text-sm mt-3 text-center md:text-left">{{ $post->author->profile->bio }}</p>
            </div>
        </div>
    </div>
</x-base-layout>
