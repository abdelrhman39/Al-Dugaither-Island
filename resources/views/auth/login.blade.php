<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img style="border-radius: 10px;" src="{{ asset('web_assets/assets/img/logo.png') }}">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="email" value="{{ __('home.Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="password" value="{{ __('home.Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('auth.Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">

                <a style="background-color: #004857;color:#fff;padding:5px 15px;border-radius: 5px;float: right" href="{{ url('') }}">
                    {{ __('home.Home') }}
                </a>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('auth.Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('home.Log In') }}
                </x-jet-button>

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
