<x-container>

    <section class="bg-white">

        <div class="py-10 mx-auto max-w-screen-xl px-4">

            <h2 class="mb-4 lg:mb-8 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 md:text-4xl">
                Onze Partners & Sponsors
            </h2>

            <p class="mb-4 lg:mb-8 mx-auto my-6 text-center text-gray-500">
                Op deze pagina bedanken we onze partners voor hun onschatbare steun aan S2SA. Zonder hun genereuze
                bijdragen, toewijding en vertrouwen zouden we niet in staat zijn om te doen wat we vandaag doen. We zijn
                dankbaar voor de positieve impact die we samen kunnen creëren. De verhalen van hoop,
                doorzettingsvermogen en prestatie die we elke dag zien, zijn het directe resultaat van hun
                onbaatzuchtige steun. Onze partners helpen niet alleen om fysieke en mentale grenzen te verleggen, maar
                ook in het vormen van gemeenschappen waarin inclusie, gelijkheid en kansen voor iedereen centraal staan.
            </p>

            <p class="mb-4 lg:mb-8 mx-auto my-6 text-center text-2xl underline underline-offset-8 decoration-red-700 decoration-auto font-extrabold">
                Exclusive</p>

            <div class="grid grid-cols-1 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 mb-4 lg:mb-8">
                <x-partners.link href="https://wolffaertshof.be/"><img src="/images/Logo_Wolffaertshof.PNG" class="w-64"
                                                                       alt="Wolffaertshof"></x-partners.link>
                <x-partners.link href="https://www.go4jobs.be/"><img src="/images/go4jobs.png" alt="Go4Jobs" class="w-64">
                </x-partners.link>
                <x-partners.link href="https://www.ovh-orthopedie.be/"><img src="/images/ovh-orthopedie.jpg"
                                                                            class="w-64" alt="OVH">
                </x-partners.link>
            </div>


            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Selecteer een type</label>
                <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    <option value="#diamond">Diamond</option>
                    <option value="#golden">Golden</option>
                    <option value="#silver">Silver</option>
                    <option value="#bronze">Bronze</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex" id="myTab" data-tabs-toggle="#tabContents" role="tablist">
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg" id="diamond-tab" data-tabs-target="#diamond" type="button" role="tab" aria-controls="diamond">Diamond</button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-yellow-300" id="golden-tab" data-tabs-target="#golden" type="button" role="tab" aria-controls="golden">Golden</button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-gray-600" id="silver-tab" data-tabs-target="#silver" type="button" role="tab" aria-controls="silver">Silver</button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-yellow-500" id="bronze-tab" data-tabs-target="#bronze" type="button" role="tab" aria-controls="bronze">Bronze</button>
                </li>
            </ul>
            <div id="tabContents">
                <div class="hidden p-4 rounded-lg dark:bg-gray-800" id="diamond" role="tabpanel" aria-labelledby="diamond-tab">
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">
                        <x-partners.link href="https://www.rijwielen-vandenplas.be/nl"><img src="/images/vandenplas.png" alt="Van den plas">
                        </x-partners.link>
                        <x-partners.link href="https://www.atmospher.be/"><img src="/images/atmospher.webp" alt="Atmospher">
                        </x-partners.link>
                        <x-partners.link href="https://kokerij.be/"><img src="/images/kokerij.png" alt=""></x-partners.link>
                        <x-partners.link href="https://www.stannah.be/nl-be/"><img src="/images/stannah.jpg" alt="Stannah">
                        </x-partners.link>
                        <x-partners.link href="https://dantha-photography.be/"><img src="/images/dantha.png" alt="Dantha">
                        </x-partners.link>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="golden" role="tabpanel" aria-labelledby="golden-tab">
                    <p class="text-center">Er zijn nog geen <span class="font-bold text-yellow-300">Golden</span> sponsors.</p>
                </div>
                <div class="hidden p-4 rounded-lg" id="silver" role="tabpanel" aria-labelledby="silver-tab">
                    <p class="text-center">Er zijn nog geen <span class="font-bold text-gray-600">Silver</span> sponsors.</p>
                </div>
                <div class="hidden p-4 rounded-lg" id="bronze" role="tabpanel" aria-labelledby="bronze-tab">
                    <p class="text-center">Er zijn nog geen <span class="font-bold text-yellow-500">Bronze</span> sponsors.</p>
                </div>
            </div>

        </div>

    </section>

    <script>
        const select = document.getElementById('tabs');
        const tabs = document.querySelectorAll('[data-tabs-target]');
        const tabContents = document.querySelectorAll('[role="tabpanel"]');

        select.addEventListener('change', (event) => {
            const selectedValue = event.target.value;

            tabs.forEach(tab => {
                if (tab.getAttribute('data-tabs-target') === selectedValue) {
                    tab.setAttribute('aria-selected', 'true');
                } else {
                    tab.setAttribute('aria-selected', 'false');
                }
            });

            tabContents.forEach(content => {
                if (content.id === selectedValue.substring(1)) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        });
    </script>

</x-container>
