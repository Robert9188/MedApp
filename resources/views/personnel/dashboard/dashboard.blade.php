<x-patient-dash-layout>
    <x-slot name="header">
        <span class="text-gray-500">Mon compte</span>
    </x-slot>


    <div class="w-full">

        <div class="grid grid-cols-4 gap-6">
            <div class="w-full bg-white rounded shadow-md p-3">
                <div class="flex justify-between">
                    <h4 class="text-gray-600">Reservations</h4>
                    <span class="text-xl text-green-500">
                        <i class="bi bi-check-circle"></i>
                    </span>
                </div>
                <div class="flex justify-between">
                    <em class="text-green-600 text-sm">Acceptées</em>
                </div>
                <div class="w-full flex justify-between items-center">
                     <span class="p-1 text-blue-500 text-xl">
                        <i class="bi bi-eye"></i>
                    </span>
                    <em class="text-lg text-gray-500">{{$accepted}}</em>
                </div>
            </div>

            <div class="w-full bg-white rounded shadow-md p-3">
                <div class="flex justify-between">
                    <h4 class="text-gray-600">Reservations</h4>
                    <span class="text-xl text-yellow-500">
                        <i class="bi bi-clock"></i>
                    </span>
                </div>
                <div class="flex justify-between">
                    <em class="text-yellow-400 text-sm">En cours</em>
                </div>
                <div class="w-full mt-2 px-1 flex justify-between items-center">
                    <a href="" class="">
                        <span class="p-1 text-blue-500 text-xl">
                            <i class="bi bi-eye"></i>
                        </span>
                    </a>
                    <em class="text-lg text-gray-500">{{$pending}}</em>
                </div>
            </div>

            <div class="w-full bg-white rounded shadow-md p-3">
                <div class="flex justify-between">
                    <h4 class="text-gray-600">Reservations</h4>
                    <span class="text-xl text-blue-500">
                        <i class="bi bi-toggle-on"></i>
                    </span>
                </div>
                <div class="flex justify-between">
                    <em class="text-gray-500 text-sm">Terminées</em>
                </div>
                <div class="w-full mt-2 px-1 flex justify-between items-center">
                    <a href="" class="">
                        <span class="p-1 text-blue-500 text-xl">
                            <i class="bi bi-eye"></i>
                        </span>
                    </a>
                    <em class="text-lg text-gray-500">{{$ended}}</em>
                </div>
            </div>

            <div class="w-full bg-white rounded shadow-md p-3">
                <div class="flex justify-between">
                    <h4 class="text-gray-600">Reservations</h4>
                    <span class="text-xl text-red-500">
                        <i class="bi bi-trash"></i>
                    </span>
                </div>
                <div class="flex justify-between">
                    <em class="text-red-600 text-sm">Rejetées</em>
                </div>
                <div class="w-full mt-2 px-1 flex justify-between items-center">
                    <a href="" class="">
                        <span class="p-1 text-blue-500 text-xl">
                            <i class="bi bi-eye"></i>
                        </span>
                    </a>
                    <em class="text-lg text-gray-500">{{$rejected}}</em>
                </div>
            </div>
        </div>

    </div>

</x-patient-dash-layout>
