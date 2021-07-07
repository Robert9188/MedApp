<x-patient-welcome-layout>

    {{--   Home section   --}}
    <div id="home" class="w-full h-[85.5vh]">
        <div class="mx-20 grid grid-cols-3 gap-x-8 h-[100%] py-10">
            <div class="w-bg-image h-full"></div>
            <div class="w-bg-text-slider col-span-2 h-full flex justify-center items-center rounded shadow-md p-4">
                <div class="w-bg-slider w-4/5">
                    <div class="flex flex-col justify-center items-center space-y-20">
                        <div class="">
                            <p class="text-[#576c9e] text-2xl font-bold text-justify">Partenaire de service de soins de santé vous aides à repondre à vos besions en matiére de soins de santé</p>
                        </div>
                        <div class="flex space-x-10">
                            <a href="{{ route('login') }}" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:bg-gradient-to-l">Connexion</a>
                            <a href="{{ route('register') }}" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-blue-500 via-green-500 to-green-200 hover:bg-gradient-to-l">S'inscrire</a>
                        </div>
                    </div>

                    <div class="flex flex-col justify-center items-center space-y-20">
                        <div class="">
                            <p class="text-[#576c9e] text-2xl font-bold text-justify">L'adoption de la sante numérique aide à assurer votre avenir en santé</p>
                        </div>
                        <div class="flex space-x-10">
                            <a href="#contact" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:bg-gradient-to-l">Contactez-nous</a>
                            <a href="#rendez-vous" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-blue-500 via-green-500 to-green-200 hover:bg-gradient-to-l">Prendre rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--   Services Section   --}}
    <x-personnel.service :services="$services"/>

    {{--   Reservation Section   --}}
    <x-personnel.reservation :horaires="$horaires"/>

    {{--   About Section   --}}
    <x-personnel.about/>

    {{--   About Section   --}}
    <x-personnel.footer/>


</x-patient-welcome-layout>
