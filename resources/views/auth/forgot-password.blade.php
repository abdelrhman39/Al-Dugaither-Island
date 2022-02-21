<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img style="border-radius: 10px;" src="{{ asset('web_assets/assets/img/logo.png') }}">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('auth.Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="email" value="{{ __('home.Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-between mt-4">
                <a style="background-color: #004857;color:#fff;padding:5px 15px;border-radius: 5px;float: right" href="{{ url('') }}">
                    {{ __('home.Home') }}
                </a>
                <x-jet-button>
                    {{ __('auth.Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
