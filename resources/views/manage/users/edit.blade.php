<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('layouts.manage.navigation')
        </div>
    </div>
<div class="py-8">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('manageusers.update',$user->userid) }}" method="POST" class="p-4 md:p-5">
                    @csrf
                    @method('PATCH')   
                    <div class="relative p-4 w-full max-w-full max-h-full">
                        <!-- Breadcrumb -->
                        <nav class="flex px-5 py-3 text-gray-700  bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li class="inline-flex items-center">
                                <a href="{{ route('manageusers.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                    </svg>
                                    Users
                                </a>
                                </li>
                                
                                <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Modify</span>
                                </div>
                                </li>
                                <li aria-current="page">
                                <div class="flex items-center">
                                    <svg class="rtl:rotate-180  w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">{{ $user->username }}</span>
                                </div>
                                </li>
                            </ol>
                        </nav>
                        <!-- Error & Success Notification -->
                        @include('layouts.notifications') 
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg dark:bg-gray-800">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    User Profile Information
                                </h3>
                            </div>
                            <!-- Modal body -->
                            <img width="100" height="100" class="rounded-full mt-4" src="{{ asset("/storage/$user->avatar") }}" alt="user avatar" />
                            <div class="grid gap-4 mb-4 grid-cols-2">
                                <div class="col-span-2 sm:col-span-1 ">
                                    <!-- username -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="username" :value="__('Username')" />
                                        <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username', $user->username)" required autofocus autocomplete="username" readonly/>
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- Email Address -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $user->email)" required autocomplete="email" readonly/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- Password -->
                                    <div class="mt-4">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password"
                                                        autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                    <!-- Confirm Password -->
                                <div class="col-span-2 sm:col-span-1">
                                    <div class="mt-4">
                                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                        type="password"
                                                        name="password_confirmation" 
                                                        autocomplete="new-password" />

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- firstname -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="firstname" :value="__('First Name')" />
                                        <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname', $user->firstname)" required autofocus autocomplete="given-name" />
                                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- middlename -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="middlename" :value="__('Middle Name')" />
                                        <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename', $user->middlename)" required autofocus autocomplete="additional-name" />
                                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                        <!-- lastname -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="lastname" :value="__('Last Name')" />
                                        <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname', $user->lastname)" required autofocus autocomplete="family-name" />
                                        <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- birthdate -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="birthdate" :value="__('Birth Date')" />
                                        <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate', $user->birthdate)" required autofocus autocomplete="bday" />
                                        <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- house -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="house" :value="__('House No./Building')" />
                                        <x-text-input id="house" class="block mt-1 w-full" type="text" name="house" :value="old('house', $user->house)" required autofocus  />
                                        <x-input-error :messages="$errors->get('house')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- street -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="street" :value="__('Street')" />
                                        <x-text-input id="street" class="block mt-1 w-full" type="text" name="street" :value="old('street', $user->street)" required autofocus  />
                                        <x-input-error :messages="$errors->get('street')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- brgy -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="brgy" :value="__('Brgy.')" />
                                        <x-text-input id="brgy" class="block mt-1 w-full" type="text" name="brgy" :value="old('brgy', $user->brgy)" required autofocus  />
                                        <x-input-error :messages="$errors->get('brgy')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- city -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="city" :value="__('Municipality/City')" />
                                        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city', $user->city)" required autofocus />
                                        <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- province -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="province" :value="__('Province')" />
                                        <x-text-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province', $user->province)" required autofocus />
                                        <x-input-error :messages="$errors->get('province')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- contact -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="contact" :value="__('Mobile No.')" />
                                        <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="old('contact', $user->contact)" required autofocus  />
                                        <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- notes -->
                                    <div class="form-group mt-4">
                                        <x-input-label for="notes" :value="__('Notes')" />
                                        <x-text-input id="notes" class="block mt-1 w-full" type="text" name="notes" :value="old('notes', $user->notes)" required autofocus />
                                        <x-input-error :messages="$errors->get('notes')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <!-- accesstype -->
                                    @php
                                        $op1_a = '';
                                        $op2_a = '';
                                        $op3_a = '';
                                        $op4_a = '';
                                        if ($user->accesstype == 'Administrator'):
                                            $op1_a = 'selected = "selected"';
                                        elseif ($user->accesstype == 'Supervisor'):
                                            $op2_a = 'selected = "selected"';
                                        elseif ($user->accesstype == 'Cashier'):
                                            $op3_a = 'selected = "selected"';
                                        elseif ($user->accesstype == 'Registrar'):
                                            $op4_a = 'selected = "selected"';
                                        endif;
                                        
                                    @endphp
                                    <div class="form-group mt-4">
                                        <x-input-label for="accesstype" :value="__('Access Type')" />
                                        <!-- <x-text-input id="accesstype" class="block mt-1 w-full" type="text" name="accesstype" :value="old('accesstype')" required autofocus autocomplete="off" /> -->
                                        <select id="accesstype" name="accesstype" class="form-select mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('accesstype')">
                                            @if(auth()->user()->accesstype == 'Administrator')
                                            <option value ="Administrator" {{ $op1_a; }}>Administrator</option>
                                            <option value ="Supervisor" {{ $op2_a; }}>Supervisor</option>
                                            @endif
                                            <option value ="Cashier" {{ $op3_a; }}>Cashier</option>
                                            <option value ="Registrar" {{ $op4_a; }}>Registrar</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('accesstype')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                        <!-- status -->
                                        @php
                                        
                                            $op1 = '';
                                            $op2 = '';
                                            if ($user->status == 'Active'):
                                                $op1 = 'selected = "selected"';
                                            elseif ($user->status == 'Inactive'):
                                                $op2 = 'selected = "selected"';
                                            endif;
                                        @endphp
                                        <div class="form-group mt-4">
                                            <x-input-label for="status" :value="__('Status')" />
                                            <!-- <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autofocus autocomplete="off" /> -->
                                            <select id="status" name="status" class="form-select mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" :value="old('status', $user->status)">
                                                <option value ="Active"  {{ $op1; }}>Active</option>
                                                <option value ="Inactive"  {{ $op2; }}">Inactive</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                        </div>
                                    </div>
                                <div class="flex items-center justify-between col-span-2 sm:col-span-2">
                                    <x-primary-button class="ms-4">
                                        <a class="btn btn-primary" >Update</a>
                                    </x-primary-button>
                                    </div>
                                </div>
                                
                            </div> 
                            
                        </div>
                            
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
