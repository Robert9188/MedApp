<x-auth.app>
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-[45%] bg-[#edf6f9] rounded shadow-xl p-4 flex flex-col space-y-10">
            <div class="w-full bg-white rounded shadow py-2">
                <h1 class="text-2xl text-center text-gray-700">Inscription</h1>
            </div>

            <div class="">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
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

                        {{--Adresse--}}
                        <div class="">
                            <x-label for="address" :value="__('Adresse')" />

                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
                        </div>

                        {{--Anniv--}}
                        <div class="">
                            <x-label for="birthday" :value="__('Année de naissance')" />

                            <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required autofocus />
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
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Deja inscrit') }}
                        </a>

                        <x-button class="ml-4">
                            {{ __('Soumettre') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-auth.app>
