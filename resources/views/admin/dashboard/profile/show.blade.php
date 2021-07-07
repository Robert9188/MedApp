<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Afficher Profile</span>
    </x-slot>

    <div class="w-full space-y-8">
        {{--   Edit Profile Button  --}}
        <div class="w-full flex justify-end items-center space-x-4 px-10">
            <x-my-link-btn link="{{ route('employee.profile.edit', $employee) }}" classes="bg-green-500">
                <span class="capitalize text-gray-100 shadow-xl">Editer profile</span>
            </x-my-link-btn>
            <x-my-link-btn link="{{ route('employee.profile.delete', $employee) }}" classes="bg-red-500">
                <span class="capitalize text-gray-100 shadow-xl">Supprimer profile</span>
            </x-my-link-btn>
        </div>
        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">{{ $employee->last_name }}'s Profile</h3>
            </div>

            <div class="w-full flex justify-center items-center">
                <div class="w-1/2 space-y-5 bg-gray-200">
                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Nom</h3>
                        <h3 class="text-">{{$employee->first_name}}</h3>
                    </div>

                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Prenom</h3>
                        <h3 class="text-">{{$employee->last_name}}</h3>
                    </div>

                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Role</h3>
                        <h3 class="text-">{{$employee->roles[0]->name}}</h3>
                    </div>

                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Spécialite</h3>
                        <h3 class="text-">{{$employee->specialite}}</h3>
                    </div>

                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Telephone</h3>
                        <h3 class="text-">{{$employee->phone}}</h3>
                    </div>


                    <div class="w-full flex justify-between items-center bg-gray-100 px-5 py-1">
                        <h3 class="text-">Email</h3>
                        <h3 class="text-">{{$employee->email}}</h3>
                    </div>
                </div>

            </div>

        </div>
    </div>

</x-admin-dsh-layout>
