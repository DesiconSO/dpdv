<x-guest-layout>
    <div class="grid w-full h-screen grid-cols-12 overflow-hidden bg-slate-100">
        <div class="grid col-span-7 overflow-hidden bg-blue-500">
            <div class="flex items-center justify-center w-full h-full">
                <a href="/" class="w-64 h-auto">
                    <x-application-logo class="bg-gray-500 fill-current" />
                </a>
            </div>
        </div>
        <div class="grid col-span-5 overflow-hidden bg-slate-100">
            <div class="flex items-center w-full h-full p-12">
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
                    </a>
                </x-slot>
                <form method="POST" action="{{ route('register') }}" class="w-full">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />

                        <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" autofocus />

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />

                        <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block w-full mt-1" type="password" name="password" autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>