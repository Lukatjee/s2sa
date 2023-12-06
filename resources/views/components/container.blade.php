<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Sportkansen voor mensen met een beperking. Help ons de drempels verlagen, zodat iedereen kan genieten van een actief en gezond leven!">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>VZW Start2SportAgain</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<header>



    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="images/logo.png" class="h-16" alt="S2SA" />
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="/support" class="text-white bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm px-4 py-2 text-center">Help Ons</a>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/about-us" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-600 {{ request()->routeIs('about-us') ? 'md:text-red-600' : '' }}">Over Ons</a>
                    </li>
                    <li>
                        <a href="/team" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-600 {{ request()->routeIs('team') ? 'md:text-red-600' : '' }}">Team</a>
                    </li>
                    <li>
                        <a href="/partners" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-600 {{ request()->routeIs('partners') ? 'md:text-red-600' : '' }}">Partners</a>
                    </li>
                    <li>
                        <a href="/sponsor" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-600 {{ request()->routeIs('sponsor') ? 'md:text-red-600' : '' }}">Sponsoring</a>
                    </li>
                    <li>
                        <a href="/media" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-600 {{ request()->routeIs('media') ? 'md:text-red-600' : '' }}">Media</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-600 {{ request()->routeIs('contact') ? 'md:text-red-600' : '' }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>

<main {{ $attributes }} class="max-w-4xl mx-auto px-6 py-6">
    {{ $slot }}
</main>


<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
          © 2023 <a href="/" class="hover:underline">S2SA™</a>. Alle rechten voorbehouden.
    </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacybeleid</a>
            </li>
            <li>
                <a href="/" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</footer>


</body>
</html>
