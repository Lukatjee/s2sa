<x-container>
    <section class="bg-white">
        <div class="flex flex-wrap py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <article class="w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6 format lg:format-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Contact</h2>
                <p class="mb-8 lg:mb-16 font-light text-gray-500 sm:text-xl">
                    Wij staan klaar om je vragen te beantwoorden en je te helpen bij alles wat je nodig hebt! Aarzel
                    niet om contact met ons op te nemen. Samen zetten we ons in voor een actief en gezond leven voor
                    iedereen.</p>
            </article>
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
                @if ($errors->any())
                    <div class="p-4 bg-red-500 rounded-md text-white text-sm mb-8">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form id="contact" action="/contact" method="post">

                    @csrf

                    <x-forms.input name="email" type="email" placeholder="naam@voorbeeld.be"/>
                    <x-forms.input name="onderwerp"/>

                    <div class="sm:col-span-2 mb-8">
                        <x-forms.label name="bericht"/>
                        <textarea name="bericht" id="bericht"
                                  rows="6"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500">
                        </textarea>
                    </div>
                    <button
                        type="submit"
                        data-sitekey="6Ldd6OQnAAAAAFSgP7OGRjXjPdptU51Z7gp7IaAx"
                        data-callback='onSubmit'
                        class="g-recaptcha py-3 m-0 px-5 text-sm font-medium text-center text-white rounded-lg bg-red-500 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                        Verstuur
                    </button>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </section>

    @if(session('pass') || session('fail'))
        <div class="fixed bottom-5 right-5 rounded-md shadow-black-300 shadow-md bg-white border border-black-200 py-2 px-4 text-sm"
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
        function onSubmit(token) {
            document.getElementById("contact").submit();
        }
    </script>

</x-container>
