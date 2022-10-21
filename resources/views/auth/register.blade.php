<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Seu nome') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Seu email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="autor" value="{{ __('Autor dos oficios (para linha de assinatura)') }}" />
                <x-jet-input id="autor" class="block mt-1 w-full" type="text" name="autor" :value="old('autor')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="cargoautor" value="{{ __('Cargo do autor (ficará abaixo do nome do autor)') }}" />
                <x-jet-input id="cargoautor" class="block mt-1 w-full" type="text" name="cargoautor" :value="old('cargoautor')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="contato" value="{{ __('Contato do autor') }}" />
                <x-jet-input id="contato" class="block mt-1 w-full" type="tel" name="contato" :value="old('contato')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="contatoassessoria" value="{{ __('Contato da assessoria') }}" />
                <x-jet-input id="contatoassessoria" class="block mt-1 w-full" type="tel" name="contatoassessoria" :value="old('contatoassessoria')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="emailautor" value="{{ __('Email do autor') }}" />
                <x-jet-input id="emailautor" class="block mt-1 w-full" type="tel" name="emailautor" :value="old('emailautor')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-jet-label for="terms">
                    <div class="flex items-center">
                        <x-jet-checkbox name="terms" id="terms" />

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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>