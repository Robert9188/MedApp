<x-patient-dash-layout>
    <x-slot name="header">
        <span class="text-gray-500">Rendez-vous</span>
    </x-slot>


    <div class="w-full space-y-8">
        {{--   Create Reservation Button  --}}
        <div class="w-full flex justify-end items-center px-10">
            <x-my-link-btn link="{{ route('reservation.create') }}" classes="bg-green-500">
                <span class="capitalize text-gray-100 shadow-xl">Prendre Rendez-vous</span>
            </x-my-link-btn>
        </div>

        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Prendre Rendez-vous</h3>
            </div>
            <div class="-w-full flex justify-center">
                <div class="w-2/3">
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

</x-patient-dash-layout>
