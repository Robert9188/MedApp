<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Editer Departement</span>
    </x-slot>

    <div class="w-full space-y-8">

        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Editer un Departement</h3>
            </div>

            <div class="w-full flex justify-center">
                <div class="w-1/3">
                    <div class="">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('employee.departement.update', $departement) }}">
                        @csrf
                        <!--  Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $departement->name }}" required autofocus />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Editer Departement') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-dsh-layout>
