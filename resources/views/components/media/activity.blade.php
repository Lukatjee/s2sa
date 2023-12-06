<article class="relative isolate flex flex-col gap-8 lg:flex-row">
    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
        <img
            src="{{ $img }}"
            alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
    </div>
    <div>
        <div class="flex items-center gap-x-4 text-xs">
            <p class="text-gray-500">{{ $date }}</p>
            <a href="#"
               class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 pointer-events-none">{{ $type }}</a>
        </div>
        <div class="group relative max-w-xl">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="{{ $link }}" target="_blank">
                    <span class="absolute inset-0"></span>
                    {{ $title }}
                </a>
            </h3>
            <p class="mt-5 text-sm leading-6 text-gray-600">
                {{ $slot }}
            </p>
        </div>
        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
            <div class="relative flex items-center gap-x-4">
                <img
                    src="{{ $profile }}"
                    alt="" class="h-10 w-10 rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <a href="{{ $article }}" target="_blank">
                            <span class="absolute inset-0"></span>
                            {{ $name }}
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>
