<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FakeSaas</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="h-screen bg-gradient-to-t from-blue-400 via-white to-white pt-36">
{{--        <h1 class="text-6xl font-bold text-center px-72 justify-center">FakeSaas, le saas inutile qui va vous faire perdre votre argent</h1>--}}
{{--        <p class="text-center text-2xl px-72 pt-10">Ceci est un saas fictif, crée dans le but de monter en compétence en Laravel</p>--}}
{{--        <div class="flex justify-center pt-10">--}}
{{--            <a class="text-white bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-10 py-5 text-center me-2 mb-2 ">Commencer</a>--}}
{{--            <a class="text-white bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-10 py-5 text-center me-2 mb-2">Me contacter</a>--}}
{{--        </div>--}}

        <section class="bg-center bg-no-repeat bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">FakeSaas Le Saas Completement Fake</h1>
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
</body>
</html>
