<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Dashboard</span>
    </x-slot>


    <div class="w-full space-y-8">

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

        {{--  Barre transversale de navigation   --}}

        <!--<div class="w-full bg-white px-3 py-4 rounded shadow-xl">
            <ul class="w-full flex space-x-2 overflow-hidden">
                <li class="">
                    <a href="" class="bg-gray-100 text-gray-600 px-2 py-1 rounded ">
                        <span class="">Reservation</span>
                    </a>
                </li>
                <li class="services">
                    <a href="" class="bg-gray-100 text-gray-600 px-2 py-1 rounded ">
                        <span class="">Services</span>
                    </a>
                </li>
            </ul>
        </div>
        -->
        <div class="w-full">
            <div class="grid grid-cols-3 gap-6">

                <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
                    <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                        <h3 class="text-gray-50 text-center">Reservations</h3>
                    </div>
                    <table class="w-full table-fixed text-gray-600">
                        <thead>
                        <tr>
                            <th class="w-1/12 text-left px-1 pb-3">#</th>
                            <th class="w-2/12 text-left px-1 pb-3">Patient</th>
                            <th class="w-2/12 text-left px-1 pb-3">Service</th>
                            <th class="w-2/12 text-left px-1 pb-3">Date</th>
                            <th class="w-3/12 px-1 pb-3"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($reservations as $key => $reservation)
                        <tr class="bg-gray-100 text-sm">
                            <td class="px-1 py-2">{{ $key+1 }}</td>
                            <td class="px-1 py-2">{{ $reservation->user->last_name }}</td>
                            <td class="px-1 py-2">{{ $reservation->employee->service->name }}</td>
                            <td class="px-1 py-2">{{ $reservation->created_at->shortAbsoluteDiffForHumans() }}</td>
                            <td class="px-1 py-2 flex justify-around">
                                <a href="{{ route('employee.reservation.validate', $reservation) }}" class="inline-block">
                                    <span class="p-1 text-green-500 text-xl">
                                        <i class="bi bi-check-circle"></i>
                                    </span>
                                </a>
                                <a href="{{ route('employee.reservation.revoke', $reservation) }}" class="inline-block">
                                    <span class="p-1 text-red-500 text-xl">
                                        <i class="bi bi-x-circle"></i>
                                    </span>
                                </a>
                                <a href="{{ route('employee.reservation.ended', $reservation) }}" class="inline-block">
                                    <span class="p-1 text-gray-500 text-xl">
                                    <i class="bi bi-calendar-check"></i>
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
                                    empty
                                </td>
                            </tr>
                        @endforelse


                        </tbody>
                    </table>
                </div>

                <div class="w-full bg-white rounded-md shadow-xl p-4">
                    <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                        <h3 class="text-gray-50 text-center">Services</h3>
                    </div>
                    <table class="w-full table-fixed text-gray-600">
                        <thead>
                        <tr>
                            <th class="w-1/6 text-left px-1 pb-3">#</th>
                            <th class="w-3/6 text-left px-1 pb-3">Nom</th>
                            <th class="w-2/6 px-1 pb-3"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($services as $key => $service)
                        <tr class="bg-gray-100 text-sm">
                            <td class="px-1 py-2">{{ $key+1 }}</td>
                            <td class="px-1 py-2">{{ $service->name }}</td>
                            <td class="px-1 py-2 flex justify-around">
                                <a href="" class="">
                                    <span class="p-1 text-blue-500 text-xl">
                                        <i class="bi bi-eye"></i>
                                    </span>
                                </a>
                                <a href="" class="">
                                    <span class="p-1 text-green-500 text-xl">
                                        <i class="bi bi-pencil-square"></i>
                                    </span>
                                </a>
                                <a href="" class="">
                                    <span class="p-1 text-red-500 text-xl">
                                        <i class="bi bi-x-circle"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        @empty
                            <tr class="">
                                <td class="px-1 py-2">0</td>
                                <td class="px-1 py-2">empty</td>
                                <td class="px-1 py-2 flex justify-around">
                                    empty
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</x-admin-dsh-layout>
