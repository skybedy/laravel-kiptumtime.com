<section>
    <header>
        <x-h2 style="style-1">
            {{ __('Profile') }}
        </x-h2>

        <p class="mt-1 text-sm md:text-base lg:text-xl text-white">
            {{ __("If necessary, edit your profile information") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-3 border border-gray-900 rounded-md  p-3 sm:p-4 md:p-4  bg-green-700">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="firstname" :value="__('Name')" />
            <x-text-input id="firstname" name="firstname" type="text" class="mt-1 block w-full border-gray-900 shadow-xl" :value="old('firstname', $user->firstname)" required autofocus autocomplete="firstname" />
            <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
        </div>

        <div>
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" name="lastname" type="text" class="mt-1 block w-full border-gray-900 shadow-xl" :value="old('lastname', $user->lastname)" required autofocus autocomplete="lastname" />
            <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full border-gray-900 shadow-xl" :value="old('email', $user->email)" required autocomplete="username" disabled/>
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-900 hover:text-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-gray-900 hover:bg-gray-800 mt-4 text-xl">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
