<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- username -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- firstname -->
        <div class="mt-4">
            <x-input-label for="firstname" :value="__('First Name')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="given-name" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- middlename -->
        <div class="mt-4">
            <x-input-label for="middlename" :value="__('Middle Name')" />
            <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required autofocus autocomplete="additional-name" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- lastname -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Last Name')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="family-name" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- birthdate -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Birth Date')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="bday" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- house -->
        <div class="mt-4">
            <x-input-label for="house" :value="__('No./House/Building')" />
            <x-text-input id="house" class="block mt-1 w-full" type="text" name="house" :value="old('house')" required autofocus  />
            <x-input-error :messages="$errors->get('house')" class="mt-2" />
        </div>

         <!-- street -->
         <div class="mt-4">
            <x-input-label for="street" :value="__('Street')" />
            <x-text-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street')" required autofocus  />
            <x-input-error :messages="$errors->get('street')" class="mt-2" />
        </div>

        <!-- brgy -->
        <div class="mt-4">
            <x-input-label for="brgy" :value="__('Brgy.')" />
            <x-text-input id="brgy" class="block mt-1 w-full" type="text" name="brgy" :value="old('brgy')" required autofocus  />
            <x-input-error :messages="$errors->get('brgy')" class="mt-2" />
        </div>

         <!-- city -->
         <div class="mt-4">
            <x-input-label for="city" :value="__('Municipality/City')" />
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus  />
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>

         <!-- province -->
         <div class="mt-4">
            <x-input-label for="province" :value="__('Province')" />
            <x-text-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')" required autofocus  />
            <x-input-error :messages="$errors->get('province')" class="mt-2" />
        </div>

         <!-- contact -->
         <div class="mt-4">
            <x-input-label for="contact" :value="__('Contact No.')" />
            <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact')" required autofocus  />
            <x-input-error :messages="$errors->get('contact')" class="mt-2" />
        </div>

        <!-- accesstype -->
        <div class="mt-4">
            <x-input-label for="accesstype" :value="__('Access Type')" />
            <!-- <x-text-input id="accesstype" class="block mt-1 w-full" type="text" name="accesstype" :value="old('accesstype')" required autofocus autocomplete="off" /> -->
            <select id="accesstype" name="accesstype" class="form-select mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('accesstype')">
                <option value ="Administrator">Administrator</option>
                <option value ="Supervisor">Supervisor</option>
                <option value ="Registrar">Registrar</option>
                <option value ="Cashier">Cashier</option>
            </select>
            <x-input-error :messages="$errors->get('accesstype')" class="mt-2" />
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
