<x-admin-dsh-layout>

    <x-slot name="header">
        <span class="text-gray-500">Créer Profile</span>
    </x-slot>

    <div class="w-full space-y-8">

        <div class="col-span-2 w-full bg-white rounded-md shadow-xl p-4">
            <div class="w-full bg-yellow-500 rounded shadow-md mb-5 py-1">
                <h3 class="text-gray-50 text-center">Ajouter un Personnel</h3>
            </div>

            <div class="w-full flex justify-center">
                <div class="w-2/3">
                    <div class="">
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('employee.profile.store') }}">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Fisrt and Last Name -->
                                <div>
                                    <x-label for="first_name" :value="__('Nom')" />

                                    <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
                                </div>

                                <div class="">
                                    <x-label for="last_name" :value="__('Prenom')" />

                                    <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
                                </div>

                                {{-- Phone --}}
                                <div class="">
                                    <x-label for="phone" :value="__('Numero de telephone')" />

                                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
                                </div>

                                {{--Service--}}
                                <div class="">
                                    <x-label for="service" :value="__('Service')" />

                                    <select name="service"
                                            id="service"
                                            class = 'w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50'
                                    >
                                        {{--<option value="service">service</option>--}}
                                        @if($services !== null)
                                            @foreach($services as $service)
                                                <option value="{{$service->id}}">{{$service->name}}</option>
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
                                        @if($roles !== null)
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->display_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <!-- Email Address -->
                                <div class="">
                                    <x-label for="email" :value="__('E-mail')" />

                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>

                                <!-- Password -->
                                <div class="">
                                    <x-label for="password" :value="__('Mot de passe')" />

                                    <x-input id="password" class="block mt-1 w-full"
                                             type="password"
                                             name="password"
                                             required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="">
                                    <x-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

                                    <x-input id="password_confirmation" class="block mt-1 w-full"
                                             type="password"
                                             name="password_confirmation" required />
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
