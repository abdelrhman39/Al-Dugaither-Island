<x-guest-layout >
    <x-jet-authentication-card style="text-align: {{ (App::getLocale()=='en')?'':'right' }}">
        <x-slot name="logo">
            <img style="border-radius: 10px;" src="{{ asset('web_assets/assets/img/logo.png') }}">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="name" value="{{ __('home.Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="email" value="{{ __('home.Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="password" value="{{ __('home.Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="password_confirmation" value="{{ __('home.Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label style="text-align: {{ (App::getLocale()=='en')?'':'right' }}" for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>
                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-between mt-4">
                <a style="background-color: #004857;color:#fff;padding:5px 15px;border-radius: 5px;float: right" href="{{ url('') }}">
                    {{ __('home.Home') }}
                </a>

                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('auth.Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('home.Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
