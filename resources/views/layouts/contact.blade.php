<x-container>
    <div class="relative isolate bg-white pt-24">

        <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">

            <!-- Section informing the user about the contact page, form and company info. -->
            <div class="relative px-6 pb-20 lg:static lg:px-8">
                <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900">Contact</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Wij staan klaar om je vragen te beantwoorden en je
                        te helpen bij alles wat je nodig hebt! Aarzel niet om contact met ons op te nemen. Samen zetten
                        we ons in voor een actief en gezond leven voor iedereen.</p>
                    <dl class="mt-10 space-y-4 text-base leading-7 text-gray-600">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                                </svg>
                            </dt>
                            <dd>Leugstraat 251<br>2630 Aartselaar<br>KBO 0789 815 669</dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="tel:+32 (0)478 630 699">+32 (0)478 630 699</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <svg class="h-7 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </dt>
                            <dd><a class="hover:text-gray-900" href="mailto:info@start2sportagain.be">info@start2sportagain.be</a>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <form action="/contact" id="contact" method="POST" class="px-6 pb-24 sm:pb-32 lg:px-8 ">

                @csrf
                <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">

                    <!-- Inform the user about any invalid input after a submit request -->
                    @if ($errors->any())
                        <div class="p-4 bg-red-500 rounded-md text-white text-sm mb-8">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <x-contact.form/>

                    <!-- Submit the form data, using recaptcha against bot attacks. -->
                    <div class="mt-8 flex justify-end">
                        <button type="submit"
                                data-sitekey="6Ldd6OQnAAAAAFSgP7OGRjXjPdptU51Z7gp7IaAx"
                                data-callback='onSubmit'
                                class="g-recaptcha rounded-md bg-red-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                            Contacteer Ons
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    @if(session('pass') || session('fail'))
        <div
            class="fixed bottom-5 right-5 rounded-md shadow-black-300 shadow-md bg-white border border-black-200 py-2 px-4 text-sm"
            x-show="show"
            x-data="{show: true}"
            x-init="setTimeout(() => show=false, 4000)"
            x-transition:leave="transition ease-in-out duration-1000"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <p class="font-semibold">
                @if(session('pass'))
                    Yes, het is gelukt!
                @elseif(session('fail'))
                    Helaas, dit ging niet zoals gepland
                @endif
            </p>
            <p>
                @if(session('pass'))
                    {{ session('pass') }}
                @elseif(session('fail'))
                    {{ session('fail') }}
                @endif
            </p>
        </div>
    @endif

    <script>
        function onSubmit() {
            document.getElementById("contact").submit();
        }
    </script>

</x-container>
