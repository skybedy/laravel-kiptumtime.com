@section('title', 'Profile')
<x-app-layout>

    <x-alert />

    <x-status />


    <x-slot name="header">
        <h2 style="style-1">
            {{ __('Profile') }}
        </h2>
    </x-slot>


    <div class="grow py-10">
        <div class="p-4 sm:p-8 lg:border border-white lg:borer border-whte rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl px-3 sm:px-10 lg:py-5 mx-auto">

            <x-h2 style="style-1">
                {{ __('Profile') }}
            </x-h2>

            <div class="mt-5 border-l border-r border-white px-5">
                    @include('profile.partials.update-profile-information-form')
            </div>
            <hr class="m-5">
            <div class="mt-5 border-l border-r border-white px-5">
                    @include('profile.partials.update-password-form')
            </div>
            <hr class="m-5">
            <div class="mt-5 border-l border-r border-white px-5">
                    @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>
</x-app-layout>
