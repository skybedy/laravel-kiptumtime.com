<section>
    <header>
        <h3 class="mt-1 text-md md:text-xl lg:text-2xl text-white"">
            {{ __('Update your password') }}
        </h3>

        <p class="mt-1 text-lg text-white">
            {{ __('Use a random and unique password') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-1 space-y-3 border border-gray-900 rounded-md  p-3 sm:p-4 md:p-4  bg-green-700">
        @csrf
        @method('put')
        @php is_null($passwordChanged) ? $label = 'Current password - you still have the default password, which is your email, change it' : $label = 'Current password' @endphp

        <div>
            <x-input-label for="current_password" :value="__( $label )" />
            <x-text-input id="current_password" name="current_password" type="password" class="text-black mt-1 block w-full border-gray-900  shadow-xl" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New password')" />
            <x-text-input id="password" name="password" type="password" class="text-black mt-1 block w-full border-gray-900  shadow-xl" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Retype password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="text-black mt-1 block w-full border-gray-900  shadow-xl" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-gray-900 hover:bg-gray-800 mt-4 text-xl">{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
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
