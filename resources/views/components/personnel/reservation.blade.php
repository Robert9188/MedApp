@props(['horaires'])

<div id="rendez-vous" class="py-20 px-20">
    <div class="w-full  grid grid-cols-3 gap-8">
        <div class="w-full h-full flex justify-center items-center py-5 px-8 rounded-md shadow-lg">
            <div class="w-full flex flex-col justify-center items-center space-y-8">
                <div class="w-full text-justify">
                    <p class="text-xl">Veuillez choisir votre horaires jours et service en fonctions de votre disponibilités</p>
                </div>
               <!--<div class="">
                    <div class="flex space-x-5">
                        <a href="{{ route('dashboard.reservations') }}" class="px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-blue-500 via-green-500 to-green-200 hover:bg-gradient-to-l">Voir les services</a>
                    </div>
                </div>
                -->
            </div>
        </div>

        <div class="col-span-2 py-10 px-5">
            <div class="w-full flex flex-col justify-center items-center">
                <div class="w-3/4">
                    <form method="POST" action="{{ route('reservation.store') }}">
                        @csrf
                        <div class="">
                            <x-label for="day" :value="__('Horaire, Jour et service')" />

                            {{--<x-input id="role" class="block mt-1 w-full" type="text" name="role" :value="old('phone')" required autofocus />--}}
                            <select name="hour"
                                    id="hour"
                                    class = 'w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                            >
                                {{--<option value="service">service</option>--}}
                                @if($horaires !== null)
                                    @foreach($horaires as $horaire)
                                        <option value="{{$horaire->id}}">{{$horaire->denomination}} - {{$horaire->day->name}} - {{$horaire->day->service->name}} ({{$horaire->horaire}})</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4 text-xl px-6 py-2 capitalize rounded-md text-white bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:bg-gradient-to-l">
                                {{ __('Poursuivre') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
