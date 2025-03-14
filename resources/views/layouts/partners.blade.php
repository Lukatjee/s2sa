
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

            <div class="grid grid-cols-3 gap-8 text-gray-500 sm:gap-12 md:grid-cols-5 mb-4 lg:mb-8">
                <x-partners.link href="https://wolffaertshof.be/"><img src="/images/Logo_Wolffaertshof.PNG" class="w-64"
                                                                       alt="Wolffaertshof"></x-partners.link>
                <x-partners.link href="https://www.go4jobs.be/"><img src="/images/go4jobs.png" alt="Go4Jobs"
                                                                     class="w-64">
                </x-partners.link>
                <x-partners.link href="https://www.ovh-orthopedie.be/"><img src="/images/ovh-orthopedie.jpg"
                                                                            class="w-64" alt="OVH">
                </x-partners.link>
                <x-partners.link href="https://www.movealltheway.be/"><img src="/images/move_all_the_way.jpg"
                                                                            class="w-64" alt="Move All The Way">
                </x-partners.link>
                <x-partners.link href="https://www.aartselaar.be/"><img src="/images/aartselaar.png"
                                                                           class="w-64" alt="Aartselaar">
                </x-partners.link>
                <x-partners.link href="https://dantha-photography.be/"><img src="/images/dantha.png"
                                                                            alt="Dantha">
                </x-partners.link>
                <x-partners.link href="https://aansteker.media/"><img src="/images/aansteker_logo.png"
                                                                            alt="Aansteker">
                </x-partners.link>
                <x-partners.link href="https://onuitwisbaarproducties.be/"><img src="/images/onuitwisbaar.png"
                                                                            alt="Onuitwisbaar">
                </x-partners.link>
                <x-partners.link href="https://zorion.be/"><img src="/images/zorion.jpg"
                                                                            alt="Zorion">
                </x-partners.link>
                <x-partners.link href="https://www.mpc-mechelen.be/nl"><img src="/images/mpc.png"
                                                                            alt="MPC">
                </x-partners.link>
                <x-partners.link href="https://www.waypointleuven.be/nl"><img src="/images/Fietssponsor.png"
                                                                            alt="Waypoint/Wahoo/2Moso">
                </x-partners.link>
            </div>


            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Selecteer een type</label>
                <select id="tabs"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    <option value="platinum">Platinum</option>
                    <option value="diamond">Diamond</option>
                    <option value="golden">Golden</option>
                    <option value="silver">Silver</option>
                    <option value="bronze">Bronze</option>
                    <option value="koper">Koper</option>
                </select>
            </div>
            <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg shadow sm:flex"
                id="myTab" data-tabs-toggle="#tabContents" role="tablist">
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-gray-700" id="platinum-tab"
                            data-tabs-target="#platinum" type="button" role="tab" aria-controls="platinum">Platinum
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg" id="diamond-tab" data-tabs-target="#diamond"
                            type="button" role="tab" aria-controls="diamond">Diamond
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-yellow-300" id="golden-tab"
                            data-tabs-target="#golden" type="button" role="tab" aria-controls="golden">Golden
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-gray-600" id="silver-tab"
                            data-tabs-target="#silver" type="button" role="tab" aria-controls="silver">Silver
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-yellow-500" id="bronze-tab"
                            data-tabs-target="#bronze" type="button" role="tab" aria-controls="bronze">Bronze
                    </button>
                </li>
                <li class="w-full" role="presentation">
                    <button class="inline-block w-full p-4 rounded-l-lg aria-selected:text-yellow-400" id="koper-tab"
                            data-tabs-target="#koper" type="button" role="tab" aria-controls="koper">Koper
                    </button>
                </li>
            </ul>
            <div id="tabContents">
                <div class="hidden p-4 rounded-lg" id="platinum" role="tabpanel" aria-labelledby="platinum-tab">
                    {{--                    <p class="text-center">Er zijn nog geen <span class="font-bold text-gray-700">Platinum</span> sponsors.</p>--}}
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">
                        <x-partners.link href="https://www.zomaaraartselaar.be/"><img
                                src="/images/ZMLogo_Zwart_trans.png" alt="ZoMaar">
                        </x-partners.link>
                        <x-partners.link href="https://cornelisjanssens.be/"><img
                                src="/images/cornelis.png" alt="Cornelis">
                        </x-partners.link>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="diamond" role="tabpanel" aria-labelledby="diamond-tab">
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">
                        <x-partners.link href="https://www.atmospher.be/"><img src="/images/atmospher.webp"
                                                                               alt="Atmospher">
                        </x-partners.link>
                        <x-partners.link href="https://kokerij.be/"><img src="/images/kokerij.png" alt="">
                        </x-partners.link>
                        <x-partners.link href="https://www.stannah.com/nl-be/"><img src="/images/stannah.jpg"
                                                                                    alt="Stannah">
                        </x-partners.link>
                        <x-partners.link href="https://packofwolvesbelgium.be/"><img src="/images/POW.png"
                                                                                     alt="Pack of Wolves">
                        </x-partners.link>
                        <x-partners.link href="https://www.vanreethvastgoed.be/"><img
                                src="/images/logo_van_reeth_vastgoed.png"
                                alt="Van Reeth Vastgoed">
                        </x-partners.link>
                        <x-partners.link href="https://www.vastgoeddesmet.be/"><img
                                src="/images/Logo Vastgoed De Smet.jpeg"
                                alt="Vastgoed De Smet">
                        </x-partners.link>
                        <x-partners.link href="https://sbkschrijnwerkerij.be/"><img
                                src="/images/SBK.jpg"
                                alt="SBK Schrijnwerkerij">
                        </x-partners.link>
                        <x-partners.link href="https://rupelrun3.webnode.be/"><img
                                src="/images/rupelrun_logo.jpg"
                                alt="RupelRun">
                        </x-partners.link>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="golden" role="tabpanel" aria-labelledby="golden-tab">
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">
                        <x-partners.link href="https://www.rijwielen-vandenplas.be/nl"><img src="/images/vandenplas.png"
                                                                                            alt="Van den plas">
                        </x-partners.link>
                        <x-partners.link href="https://www.acbairco.be/nl"><img src="/images/acbairco.png"
                                                                                alt="ACB Airco">
                        </x-partners.link>
                        <x-partners.link href="https://kaitravel.be"><img src="/images/kaitravel.jpg"
                                                                         alt="Kai Travel">
                        </x-partners.link>
                        <x-partners.link href="https://www.facebook.com/profile.php?id=100063763323269"><img
                                src="/images/image00003.png"
                                alt="Bo Doms">
                        </x-partners.link>
                        <x-partners.link href="#"><img src="/images/blondeel.png"
                                                       alt="Brigitte Blondeel">
                        </x-partners.link>
                        <x-partners.link href="https://www.inconel-consulting.be/"><img
                                src="/images/Inconel.jpg"
                                alt="Inconel">
                        </x-partners.link>
                        <x-partners.link href="https://www.bloemenbeukeleers.com/"><img
                                src="/images/beukeleers.jpg"
                                alt="Bloemen Beukeleers Kristel BV">
                        </x-partners.link>
                        <x-partners.link href="https://kunstgrascenter.be/"><img
                                src="/images/kunstgrascenter.jpg"
                                alt="KunstgrasCenter">
                        </x-partners.link>
                        <x-partners.link href="https://www.kbc.be/particulieren/nl/kantoor/3706-AARTSELAAR-KAPELLESTRAAT-4.html"><img
                                src="/images/kbc.png"
                                alt="KBC">
                        </x-partners.link>
                        <x-partners.link href="https://www.artore.be/"><img
                                src="/images/artore.png"
                                alt="Artore">
                        </x-partners.link>
                        <x-partners.link href="https://www.aciron.be/"><img
                                src="/images/aciron.png"
                                alt="Aciron">
                        </x-partners.link>
                        <x-partners.link href="https://www.afvalalternatief.be/"><img
                                src="/images/afval_alternatief.png"
                                alt="Afval Alternatief">
                        </x-partners.link>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="silver" role="tabpanel" aria-labelledby="silver-tab">
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">
                        <x-partners.link href="https://www.facebook.com/denhoekreet/"><img
                                src="/images/Belle%20vue.jpg"
                                alt="Belle-Vue">
                        </x-partners.link>
                        <x-partners.link href="https://www.facebook.com/entrez/"><img
                                src="/images/Entrez.jpg"
                                alt="Entrez">
                        </x-partners.link>
                        <x-partners.link href="https://www.adaartselaar.com/"><img
                                src="/images/ad_delhaize.JPG"
                                alt="AD Delhaize Aartselaar">
                        </x-partners.link>
                        <x-partners.link href="https://winkels.carrefour.be/nl/s/carrefour/carrefour-market-aartselaar/86"><img
                                src="/images/Carrefour.jpg"
                                alt="Avanti BV">
                        </x-partners.link>
                        <x-partners.link href="https://www.aartselaar.be/nl/content/1139/sportraad.html#:~:text=De%20sportraad%20vergadert%20elke%202de,mail%20info%40aartselaar.be."><img
                                src="/images/sportraad.jpg"
                                alt="Sportraad">
                        </x-partners.link>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="bronze" role="tabpanel" aria-labelledby="bronze-tab">
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">

                        <x-partners.link href="https://veravanderheyden.be/"><img
                                src="/images/NAAMKAART%20VERA%20RECTO.jpg"
                                alt="Vera Vanderheyden">
                        </x-partners.link>
                        <x-partners.link href="https://www.resa-vastgoed.be/nl/"><img
                                src="/images/resa.png"
                                alt="Resa">
                        </x-partners.link>
                        <x-partners.link href="https://www.ventstore.be/"><img
                                src="/images/Vent.png"
                                alt="Vent">
                        </x-partners.link>
                        <x-partners.link href="https://vinosanti.be/"><img
                                src="/images/vino_santi.png"
                                alt="Vino Santi">
                        </x-partners.link>
                    </div>
                </div>
                <div class="hidden p-4 rounded-lg" id="koper" role="tabpanel" aria-labelledby="koper-tab">
                    <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 pt-12">

                        <x-partners.link href="https://www.facebook.com/acuslederwaren"><img src="/images/acus.webp"
                                                                                             alt="Acus">
                        </x-partners.link>
                        <x-partners.link href="https://boetiekfashion.be/"><img
                                src="/images/thumbnail_Boetiek-Fashion-logo.png"
                                alt="Boetiek Fashion">
                        </x-partners.link>
                        <x-partners.link href="https://www.beemine.be/"><img
                                src="/images/beemine.jpg"
                                alt="Bee Mine">
                        </x-partners.link>
                        <x-partners.link href="https://www.gamaco.com/nl"><img
                                src="/images/gamaco.jpg"
                                alt="Gamaco">
                        </x-partners.link>
                        <x-partners.link href="https://kolum.be/"><img
                                src="/images/kolum.png"
                                alt="Kolum">
                        </x-partners.link>
                        <x-partners.link href="https://snoepeiland.be/"><img
                                src="/images/Snoepeiland.png"
                                alt="Snoepeiland">
                        </x-partners.link>
                        <x-partners.link href="https://www.apotheekjulieborghijs.be/"><img
                                src="/images/visitekaartje%20afbeelding.png"
                                alt="Apotheek Julie Borghijs">
                        </x-partners.link>
                        <x-partners.link href="https://pastine.store/"><img
                                src="/images/pastine.png"
                                alt="Pastine">
                        </x-partners.link>
                        <x-partners.link href="https://www.sereni.be/vestigingen/lenchant/"><img
                                src="/images/lenchant.png"
                                alt="Lenchant">
                        </x-partners.link>
                        <x-partners.link href="https://www.huisinzicht.be/nl/"><img
                                src="/images/huis_in_zicht.png"
                                alt="Huis In Zicht BV">
                        </x-partners.link>
                        <x-partners.link href="https://aartselaar.leonidas.com/"><img
                                src="/images/leonidas_aartselaar.jpg"
                                alt="Van Goethem Nele">
                        </x-partners.link>
                        <x-partners.link href="https://93lines.be/"><img
                                src="/images/93_lines.jpg"
                                alt="93 Lines">
                        </x-partners.link>
                        <x-partners.link href="https://www.facebook.com/profile.php?id=100055110833217"><img
                                src="/images/senles.jpg"
                                alt="Senles">
                        </x-partners.link>
                        <x-partners.link href="https://www.keurslagerverhoeven.be/cox.php?p=home-nl"><img
                                src="/images/Keurslager.jpg"
                                alt="Keurslager Verhoeven">
                        </x-partners.link>
                        <x-partners.link href="https://www.a12rupel.be/"><img
                                src="/images/beamer.png"
                                alt="A12 Rupel">
                        </x-partners.link>
                        <x-partners.link href="https://ideco.gift/"><img
                                src="/images/ideco.png"
                                alt="IDeco">
                        </x-partners.link>
                        <x-partners.link href="https://www.standaardboekhandel.be/winkels/aartselaar"><img
                                src="/images/standaard_boekhandel.png"
                                alt="Standaard Boekhandel">
                        </x-partners.link>
                        <x-partners.link href="https://www.verkeersplatform.be/"><img
                                src="/images/verkeersplatform.jpg"
                                alt="Verkeersplatform">
                        </x-partners.link>
                    </div>
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
                if (content.id === selectedValue) {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        });
    </script>

</x-container>
