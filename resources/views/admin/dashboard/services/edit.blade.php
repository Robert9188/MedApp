<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Ajout Service</span>
    </x-slot>

    <div class="w-full space-y-8">

        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Ajouter un Service</h3>
            </div>

            <div class="w-full flex justify-center">
                <div class="w-1/3">
                    <div class="">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('employee.service.update', $service) }}">
                        @csrf
                        <!--  Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$service->name}}" required autofocus />
                            </div>

                            {{--  Derpartement  --}}
                            <div class="">
                                <x-label for="departement" :value="__('Departement')" />

                                <select name="departement"
                                        id="departement"
                                        class = 'w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                >
                                    <option value="{{$service->departement->id}}">{{$service->departement->name}}</option>
                                    @if($departements !== null)
                                        @foreach($departements as $department)
                                            @if($service->departement->id !== $department->id)
                                                <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Editer Service') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-dsh-layout>
