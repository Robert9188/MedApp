<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Jours et Heures</span>
    </x-slot>

    {{--  Jours  --}}
    <div class="w-full space-y-8">
        {{--   Create Day Button  --}}
        <div class="w-full flex justify-end items-center px-10">
            <x-my-link-btn link="{{ route('employee.day.create') }}" classes="bg-green-500">
                <span class="capitalize text-gray-100 shadow-xl">Ajouter Jour</span>
            </x-my-link-btn>
        </div>
        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Jours</h3>
            </div>
            <table class="w-full table-fixed text-gray-600">
                <thead>
                <tr>
                    <th class="w-1/6 text-left px-1 pb-3">#</th>
                    <th class="w-2/6 text-left px-1 pb-3">Nom</th>
                    <th class="w-2/6 text-left px-1 pb-3">Service</th>
                    <th class="w-1/6 px-1 pb-3"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($days as $key => $day)
                    <tr class="{{  $key % 2 !== 0 ? "bg-gray-50 text-sm" : "bg-gray-100 text-sm"  }}">
                        <td class="px-1 py-2">{{ $key+1 }}</td>
                        <td class="px-1 py-2">{{ $day->name }}</td>
                        <td class="px-1 py-2">{{ $day->service->name }}</td>
                        <td class="px-1 py-2 flex justify-around">
                            <a href="{{ route('employee.day.show', $day->id) }}" class="inline-block">
                                    <span class="p-1 text-blue-500 text-xl">
                                        <i class="bi bi-eye"></i>
                                    </span>
                            </a>
                            <a href="{{ route('employee.day.edit', $day) }}" class="inline-block">
                                    <span class="p-1 text-green-500 text-xl">
                                        <i class="bi bi-pencil-square"></i>
                                    </span>
                            </a>
                            <a href="{{ route('employee.day.delete', $day) }}" class="inline-block">
                                    <span class="p-1 text-red-500 text-xl">
                                        <i class="bi bi-x-circle"></i>
                                    </span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-gray-100">
                        <td class="px-1 py-2">0</td>
                        <td class="px-1 py-2">vide</td>
                        <td class="px-1 py-2">vide</td>
                        <td class="px-1 py-2">vide</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>

    {{--   Heures  --}}
    <div class="w-full space-y-8 mt-8">
        {{--   Create Day Button  --}}
        <div class="w-full flex justify-end items-center px-10">
            <x-my-link-btn link="{{ route('employee.horaire.create') }}" classes="bg-green-500">
                <span class="capitalize text-gray-100 shadow-xl">Ajouter Heure</span>
            </x-my-link-btn>
        </div>
        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Heures</h3>
            </div>
            <table class="w-full table-fixed text-gray-600">
                <thead>
                <tr>
                    <th class="w-1/12 text-left px-1 pb-3">#</th>
                    <th class="w-2/12 text-left px-1 pb-3">Denomination</th>
                    <th class="w-2/12 text-left px-1 pb-3">service</th>
                    <th class="w-2/12 text-left px-1 pb-3">Jours</th>
                    <th class="w-2/12 text-left px-1 pb-3">plage</th>
                    <th class="w-1/12 px-1 pb-3"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($hours as $key => $hour)
                    <tr class="{{  $key % 2 !== 0 ? "bg-gray-50 text-sm" : "bg-gray-100 text-sm"  }}">
                        <td class="px-1 py-2">{{ $key+1 }}</td>
                        <td class="px-1 py-2">{{ $hour->denomination }}</td>
                        <td class="px-1 py-2">{{ $hour->day->service->name }}</td>
                        <td class="px-1 py-2">{{ $hour->day->name }}</td>
                        <td class="px-1 py-2">{{ $hour->horaire }}</td>
                        <td class="px-1 py-2 flex justify-around">
                            {{--<a href="{{ route('employee.horaire.show', $hour) }}" class="inline-block">
                                <span class="p-1 text-blue-500 text-xl">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </a>--}}
                            <a href="{{ route('employee.horaire.edit', $hour) }}" class="inline-block">
                                <span class="p-1 text-green-500 text-xl">
                                    <i class="bi bi-pencil-square"></i>
                                </span>
                            </a>
                            <a href="{{ route('employee.horaire.delete', $hour) }}" class="inline-block">
                                <span class="p-1 text-red-500 text-xl">
                                    <i class="bi bi-x-circle"></i>
                                </span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-gray-100">
                        <td class="px-1 py-2">0</td>
                        <td class="px-1 py-2">vide</td>
                        <td class="px-1 py-2">vide</td>
                        <td class="px-1 py-2">vide</td>
                        <td class="px-1 py-2">vide</td>
                        <td class="px-1 py-2">vide</td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>

</x-admin-dsh-layout>
