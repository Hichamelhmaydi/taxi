<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
        
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
        
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
        
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
            </div>
        
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        
            <div class="mt-4">
                <x-label for="profile_photo" value="{{ __('Profile Photo') }}" />
                <x-input id="profile_photo" class="block w-full mt-1" type="file" name="profile_photo" accept="image/*" />
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
        
    </x-authentication-card>
</x-guest-layout>