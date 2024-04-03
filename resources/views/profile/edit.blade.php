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
        <div class="lg:borer border-whte rounded-md lg:max-w-[60rem] xl:max-w-6xl 2xl:max-w-7xl px-3 sm:px-10 lg:py-5 mx-auto">



            <div class="p-4 sm:p-8 border border-whit shadow sm:rounded-lg">
                    @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
