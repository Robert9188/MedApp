<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Ajout Horaire</span>
    </x-slot>

    <div class="w-full space-y-8">

        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Ajouter une Horaire de consultation</h3>
            </div>

            <div class="w-full flex justify-center">
                <div class="w-2/3 px-10">
                    <div class="">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('employee.horaire.update', $horaire) }}">
                        @csrf
                        <!--  Name -->
                            <div>
                                <x-label for="denomination" :value="__('Denomination')" />

                                <x-input id="denomination" class="block mt-1 w-full" type="text" name="denomination" value="{{ $horaire->denomination }}" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="horaire" :value="__('Plage horaire')" />

                                <x-input id="horaire" class="block mt-1 w-full" type="text" name="horaire" value="{{ $horaire->horaire }}" required autofocus />
                            </div>

                            {{--  Service  --}}
                            <div class="mt-4">
                                <x-label for="day" :value="__('Day')" />

                                <select name="day"
                                        id="day"
                                        class = 'w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                >
                                    <option value="{{$horaire->day->id}}">{{$horaire->day->name}} - {{$horaire->day->service->name}}</option>
                                    @if($days !== null)
                                        @foreach($days as $day)
                                            @if($horaire->day->id !== $day->id)
                                                <option value="{{$day->id}}">{{$day->name}} - {{$day->service->name}}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Editer Horaire') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-dsh-layout>
