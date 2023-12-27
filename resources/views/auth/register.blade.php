<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/icon/wacana_icon.png" type="image/png">
    <title>Blog Wacana - Registrasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="bg-white dark:bg-gray-900 min-h-screen">
        <div class="xl:grid xl:min-h-screen xl:grid-cols-12">
            <section class="relative flex h-32 items-end bg-gray-900 xl:h-full xl:col-span-6">
                <img alt="Creative"
                    src="{{ asset('img/dragos-gontariu-54VAb3f1z6w-unsplash.jpg') }}"
                    class="absolute inset-0 h-full w-full object-cover opacity-80" />

                <div class="hidden xl:absolute inset-0 items-end xl:flex xl:p-12 bg-gradient-to-t from-gray-100 to-transparent">
                    <div>
                        <a class="block text-white" href="/">
                            <span class="sr-only">Home</span>
                            <img src="{{ asset('img/wacana.png') }}" alt="Logo Wacana Belaka" class="h-16 w-auto inline">
                        </a>
    
                        <h1 class="mt-6 text-xl font-bold text-gray-800 lg:text-2xl xl:text-3xl">
                            Selamat datang di <span class="text-sky-500">Negeri Wacana</span>!
                        </h1>
    
                        <p class="mt-4 leading-relaxed text-gray-800">
                            Wacana Belaka adalah tempatmu berekspresi sebebas-bebasnya. Kamu dapat menuliskan opini, pendapat, tanggapan, pengalaman, atau bahkan curhatan. <br> Good luck, Pal!
                        </p>
                    </div>
                </div>
            </section>

            <main
                class="flex items-start justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6 h-full">
                <div class="max-w-xl lg:max-w-3xl">
                    <div class="relative -mt-16 block xl:hidden">
                        <a class="inline-flex h-16 w-16 items-center justify-center rounded-full bg-white text-blue-600 dark:bg-gray-900 sm:h-20 sm:w-20"
                            href="/">
                            <span class="sr-only">Home</span>
                            <img src="{{ asset('img/wacana.png') }}" alt="Logo Wacana Belaka" class="h-12 md:h-14 w-auto inline">
                        </a>

                        <h1 class="mt-2 text-lg sm:text-xl font-bold text-gray-900 dark:text-white md:text-3xl lg:text-4xl">
                            Selamat datang di <span class="text-sky-500">Negeri Wacana</span>!
                        </h1>

                        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
                            Wacana Belaka adalah tempatmu berekspresi sebebas-bebasnya. Kamu dapat menuliskan opini, pendapat, tanggapan, pengalaman, atau bahkan curhatan. <br class="hidden md:block lg:hidden"> Good luck, Pal!
                        </p>
                    </div>

                    <form action="{{ route('register') }}" method="POST" class="mt-8 grid grid-cols-6 gap-6">
                        @csrf
                        <div class="col-span-6 sm:col-span-3">
                            <label for="FirstName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Nama Depan
                            </label>

                            <input type="text" id="FirstName" name="first_name"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="LastName" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Nama Belakang
                            </label>

                            <input type="text" id="LastName" name="last_name"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                        </div>

                        <div class="col-span-6">
                            <label for="Email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Email
                            </label>

                            <input type="email" id="Email" name="email"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="Password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Password
                            </label>

                            <input type="password" id="Password" name="password"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="PasswordConfirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-200">
                                Konfirmasi Password
                            </label>

                            <input type="password" id="PasswordConfirmation" name="password_confirmation"
                                class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200" />
                        </div>

                        <div class="col-span-6">
                            <label for="MarketingAccept" class="flex gap-4">
                                <input type="checkbox" id="MarketingAccept" name="marketing_accept" checked
                                    class="h-5 w-5 rounded-md border-gray-200 bg-white shadow-sm dark:border-gray-700 dark:bg-gray-800 dark:focus:ring-offset-gray-900" />

                                <span class="text-sm text-gray-700 dark:text-gray-200">
                                    Saya ingin menerima email tentang kegiatan, perkembangan produk dan pengumuman penting lainnya.
                                </span>
                            </label>
                        </div>

                        <div class="col-span-6">
                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                Dengan membuat akun, kamu telah menyetujui
                                <a href="#" class="text-gray-700 underline dark:text-gray-200">syarat dan ketentuan</a>
                                serta
                                <a href="#" class="text-gray-700 underline dark:text-gray-200">kebijakan privasi</a> yang ada di Blog Wacana.
                            </p>
                        </div>

                        <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                            <button
                                class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500 dark:hover:bg-blue-700 dark:hover:text-white">
                                Buat Akun
                            </button>

                            <p class="mt-4 text-sm text-gray-500 dark:text-gray-400 sm:mt-0">
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="text-gray-700 underline dark:text-gray-200">Masuk</a>.
                            </p>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </section>
</body>

</html>
