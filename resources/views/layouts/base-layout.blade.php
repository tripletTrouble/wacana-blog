<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?: 'Wacana Belaka - Inspirasi Masa Depan' }}</title>
    <link rel="shortcut icon" href="/img/icon/wacana_icon.png" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>
<body class="dark:bg-gray-900 flex flex-col justify-between min-h-screen">
    <x-header></x-header>
    <main class="grow px-4 md:px-8 py-4 md:py-6 w-[100vw] md:w-[75vw] lg:w-[70vw] mx-auto">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>
</html>