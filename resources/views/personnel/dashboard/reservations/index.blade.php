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
                <h3 class="text-gray-50 text-center">Reservations</h3>
            </div>
            <table class="w-full table-fixed text-gray-600">
                <thead>
                <tr>
                    <th class="w-1/12 text-left px-1 pb-3">#</th>
                    <th class="w-2/12 text-left px-1 pb-3">Service</th>
                    <th class="w-2/12 text-left px-1 pb-3">Date</th>
                    <th class="w-2/12 text-left px-1 pb-3">Plage Horaire</th>
                    <th class="w-2/12 text-left px-1 pb-3">Status</th>
                    <th class="w-3/12 px-1 pb-3"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($reservations as $key => $reservation)
                    <tr class="bg-gray-100 text-sm">
                        <td class="px-1 py-2">{{ $key+1 }}</td>
                        <td class="px-1 py-2">{{ $reservation->employee->service->name }}</td>
                        <td class="px-1 py-2">{{ $reservation->date }}</td>
                        <td class="px-1 py-2">{{ $reservation->heure }}</td>
                        @switch($reservation->status)
                            @case('En cours')
                            <td class="px-1 py-2 text-yellow-500">{{ $reservation->status }}</td>
                            @break
                            @case('Accepter')
                            <td class="px-1 py-2 text-green-500">{{ $reservation->status }}</td>
                            @break
                            @case('Rejeter')
                            <td class="px-1 py-2 text-red-500">{{ $reservation->status }}</td>
                            @break
                            @case('Terminer')
                            <td class="px-1 py-2 text-gray-500">{{ $reservation->status }}</td>
                            @break
                        @endswitch
                        <td class="px-1 py-2 flex justify-around">
                            <a href="{{ route('reservation.cancel', $reservation) }}" class="inline-block">
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
                        <td class="px-1 py-2 flex justify-around">
                            vide
                        </td>
                    </tr>
                @endforelse


                </tbody>
            </table>
        </div>
    </div>

</x-patient-dash-layout>
