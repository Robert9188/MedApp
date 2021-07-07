<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Profiles</span>
    </x-slot>

    <div class="w-full space-y-8">
        {{--   Create Profile Button  --}}
        <div class="w-full flex justify-end items-center px-10">
            <x-my-link-btn link="{{ route('employee.profile.create') }}" classes="bg-green-500">
                <span class="capitalize text-gray-100 shadow-xl">Créer profile</span>
            </x-my-link-btn>
        </div>
        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Profiles Personnels</h3>
            </div>
            <table class="w-full table-fixed text-gray-600">
                <thead>
                <tr>
                    <th class="w-1/12 text-left px-1 pb-3">#</th>
                    <th class="w-2/12 text-left px-1 pb-3">Nom</th>
                    <th class="w-4/12 text-left px-1 pb-3">Roles</th>
                    <th class="w-2/12 text-left px-1 pb-3">Service</th>
                    <th class="w-1/12 px-1 pb-3"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($employees as $key => $employee)
                    <tr class="{{  $key % 2 !== 0 ? "bg-gray-50 text-sm" : "bg-gray-100 text-sm"  }}">
                        <td class="px-1 py-2">{{ $key+1 }}</td>
                        <td class="px-1 py-2">{{ $employee->last_name }}</td>
                        <td class="px-1 py-2">
                            @foreach ($employee->roles as $role)
                                <span class="">{{$role->display_name}}</span>
                            @endforeach
                            <span class="{{ $employee->roles->count() > 2 ? "" : "hidden" }}">...</span>
                        </td>
                        <td class="px-1 py-2">{{ $employee->service->name }}</td>
                        <td class="px-1 py-2 flex justify-around">
                            <a href="{{ route('employee.profile.show', $employee) }}" class="inline-block">
                                    <span class="p-1 text-blue-500 text-xl">
                                        <i class="bi bi-eye"></i>
                                    </span>
                            </a>
                            <a href="{{ route('employee.profile.edit', $employee) }}" class="inline-block">
                                    <span class="p-1 text-green-500 text-xl">
                                        <i class="bi bi-pencil-square"></i>
                                    </span>
                            </a>
                            <a href="{{ route('employee.profile.delete', $employee) }}" class="inline-block">
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
                            empty
                        </td>
                    </tr>
                @endforelse


                </tbody>
            </table>
        </div>
    </div>

</x-admin-dsh-layout>
