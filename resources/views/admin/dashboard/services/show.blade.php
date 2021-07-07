<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Afficher service</span>
    </x-slot>

    <div class="w-full space-y-8">
        {{--   Edit Profile Button  --}}
        <div class="w-full flex justify-end items-center space-x-4 px-10">
            <x-my-link-btn link="{{ route('employee.service.edit', $service) }}" classes="bg-green-500">
                <span class="capitalize text-gray-100 shadow-xl">Editer profile</span>
            </x-my-link-btn>
            <x-my-link-btn link="{{ route('employee.service.delete', $service) }}" classes="bg-red-500">
                <span class="capitalize text-gray-100 shadow-xl">Supprimer service</span>
            </x-my-link-btn>
        </div>
        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">{{ $service->name }}</h3>
            </div>

            <div class="w-full flex justify-center items-center">
                <div class="w-3/4 space-y-5 bg-gray-200">
                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Nom</h3>
                        <h3 class="text-">{{$service->name}}</h3>
                    </div>

                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Departement</h3>
                        <h3 class="text-">{{$service->departement->name}}</h3>
                    </div>

                    <div class="w-full flex justify-between items-center bg-yellow-200 px-5 py-1">
                        <h3 class="text-">Jours</h3>
                        <h3 class="text-">Heure</h3>
                    </div>
                    @foreach($service->days as $day)
                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="block">{{$day->name}}</h3>
                        <div class="">
                            @foreach($day->horaires as $hour)
                                <h3 class="block my-1">{{$hour->name}}</h3>
                            @endforeach
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>

</x-admin-dsh-layout>
