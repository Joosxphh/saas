<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="h-screen bg-gradient-to-t from-blue-400 via-white to-white bg-center bg-no-repeat bg-blend-multiply">
            @if (Route::has('login'))
                <nav class="flex justify-center">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
                    <div class="pt-24">
                        <section class="bg-center bg-no-repeat bg-blend-multiply">
                            <div class="px-4 mx-auto max-w-screen-xl text-center py-24">
                                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">FakeSaas le saas complètement fake</h1>
                                <p class="mb-8 text-lg font-normal text-gray-700 lg:text-xl sm:px-16 lg:px-48">Ceci est un saas fictif dans le but de m'exercer et monter en compétences sur Laravel. Il permet de prendre deux produits directement lié a l'API Stripe.</p>
                                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                                        Get started
                                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-blue-700 rounded-lg border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:ring-gray-400">
                                        Learn more
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <footer class="pt-44 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
    </body>
</html>
