<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>S2SA</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

<header>


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="/images/logo.png" class="h-16 mr-3" alt="S2SA Logo"/>
            </a>
            {{--            <div class="flex items-center md:order-2">--}}
            {{--                --}}
            {{--            </div>--}}
            <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li class="py-2">
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('start') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Start</a>
                    </li>
                    <li class="py-2">
                        <a href="/about-us"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('about-us') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Over ons</a>
                    </li>
                    <li class="py-2">
                        <a href="/team"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('team') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Team</a>
                    </li>
                    <li class="py-2">
                        <a href="/partners"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('partners') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                           aria-current="page">Partners</a>
                    </li>
                    <li class="py-2">
                        <a href="/sponsor"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('sponsor') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Sponsoring
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="/events"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('events') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Evenementen
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="/contact"
                           class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent {{ request()->routeIs('contact') ? 'md:text-red-700 md:dark:text-red-500' : '' }} md:border-0 md:hover:text-red-700 md:p-0 dark:text-white md:dark:hover:text-red-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a href="/support" class="block py-2 px-3 text-white rounded bg-red-500 hover:bg-red-600 my-auto text-center align-middle md:mr-0">
                            Help Ons
                        </a>
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
