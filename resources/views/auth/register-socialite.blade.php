@section('title', 'Register')
<div class="bg-red-100 text-red-500 py-2 text-center border-b border-t border-red-300 mt-1">{{ __('messages.Pokud jste se ocitli na této stránce, tak tu jste patrně poprvé a v tom případě je jednou jedinkrát potřeba doplnit rok narození a pohlaví pro správné zařazení do věkové kategorie.') }}</div>
<div class="bg-red-100 text-red-500 py-2 text-center border-b border-t border-red-300 mt-1">{{ __('messages.V případě, že nechcete uvádět rok narození, budete automaticky zařazeni do kategorie OPEN 23-39 let.') }}</div>

<x-guest-layout>
    <div class="w-ful sm:max-w-md my-2 md:mr-5  px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border border-solid border-gray-200">
        <div class="mt-3">
            <img class="img-fluid w-full" src="{{$provider}}-login-icon.png" />
        </div>
        <form method="POST" action="{{ route('register-socialite') }}">
            @csrf
             <x-text-input  id="provider_name" type="hidden" name="provider_name" :value="$provider" />
             <x-text-input  id="provider_id" type="hidden" name="provider_id" :value="$id" />
            <div class="mt-4">
                <x-input-label for="firstname" :value="__('Firstname')" />
                <x-text-input id="firstname" class="mt-1 block w-full" type="text" name="firstname" :value="$firstname" required autofocus autocomplete="firstname" />
                <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
            </div>
            <div class="mt-4">
                <x-input-label for="lastname" :value="__('Lastname')" />
                <x-text-input id="lastname" class="mt-1 block w-full" type="text" name="lastname" :value="$lastname" required autofocus autocomplete="lastname" />
                <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
            </div>
            <div class="mt-4">
                <x-input-label for="country" value="Country" />
                <select id="country" name="country" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
                    <option value="" selected disabled></option>
                    @foreach ($countries as $key => $country)
                        <option value="{{ $key }}">{{ $country }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>
            <div class="mt-4">
                <x-input-label for="gender" value="Gender" />
                <select id="gender" name="gender" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required>
                    <option value="" selected disabled></option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>

            <div class="mt-4">
                    <x-input-label for="birth_year" value="Birth Year" />
                    <select id="birth_year" name="birth_year" v-model="form.birth_year" required class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full">
                        <option value="" selected disabled></option>
                        <option value="1901" class="text-red-600">I don't want to give the year of birth</option>
                        <x-birth-year-option :first_year="$first_year" :last_year="$last_year"></x-birth-year-option>
                    </select>
                    <x-input-error class="mt-2" :messages="$errors->get('birthyear')" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" value="Email" />
                    <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="$email" autocomplete="email" required />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Already registered?</a>
                    <x-primary-button class="ml-4">Register</x-primary-button>
                </div>
            </form>
        </div>
</x-guest-layout>
