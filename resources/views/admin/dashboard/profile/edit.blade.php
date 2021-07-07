<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Editer Profile</span>
    </x-slot>

    <div class="w-full space-y-8">
        {{--   Create Profile Button  --}}
        <div class="w-full flex justify-end items-center space-x-4 px-10">
            <x-my-link-btn link="{{ route('employee.profile.delete', $employee) }}" classes="bg-red-500">
                <span class="capitalize text-gray-100 shadow-xl">Supprimer profile</span>
            </x-my-link-btn>
        </div>

        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Editer un Personnel</h3>
            </div>

            <div class="w-full flex justify-center">
                <div class="w-2/3">
                    <div class="">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('employee.profile.update', $employee) }}">
                            @csrf

                            <div class="grid grid-cols-2 gap-4">
                                <!-- Fisrt and Last Name -->
                                <div>
                                    <x-label for="first_name" :value="__('Nom')" />

                                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $employee->first_name }}" required autofocus />
                                </div>

                                <div class="">
                                    <x-label for="last_name" :value="__('Prenom')" />

                                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $employee->last_name }}" required autofocus />
                                </div>

                                {{-- Phone --}}
                                <div class="">
                                    <x-label for="phone" :value="__('Numero de telephone')" />

                                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $employee->phone }}" required autofocus />
                                </div>

                                {{--Service--}}
                                <div class="">
                                    <x-label for="service" :value="__('Service')" />

                                    <select name="service"
                                            id="service"
                                            class = 'w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                    >
                                        <option value="{{$employee->service->id}}">{{$employee->service->name}}</option>
                                        @if($services !== null)
                                            @foreach($services as $service)
                                                @if($service->id !== $employee->service->id)
                                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                {{-- Role --}}
                                <div class="">
                                    <x-label for="role" :value="__('Role')" />

                                    <select name="role"
                                            id="role"
                                            class = 'w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                    >
                                        <option value="{{$employee->roles[0]->id}}">{{$employee->roles[0]->name}}</option>
                                        @if($roles !== null)
                                            @foreach($roles as $role)
                                                @if($role->id !== $employee->roles[0]->id)
                                                    <option value="{{$role->id}}">{{$role->display_name}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <!-- Email Address -->
                                <div class="">
                                    <x-label for="email" :value="__('E-mail')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $employee->email }}" required />
                                </div>

                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Ajouter personnel') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-dsh-layout>
