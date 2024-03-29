
<nav x-data="{ open: false }" class="border-b-[20px] border-white bg-black py-4">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('index') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-80"  width="70px" height="70px" />
                </a>&nbsp;&nbsp;&nbsp;
                <div class="text-4xl text-white">
                    <a href="{{ route('index') }}">Kiptumtime</a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-6 lg:space-x-8 sm:-my-px sm:ms-10 md:flex">
                <x-nav-link :href="route('index')" :active="request()->routeIs('index')" class="text-lg lg:text-xl">
                    {{ __('messages.home') }}
                </x-nav-link>

                <x-nav-link :href="route('event.result.index',['eventId' => 1])" :active="request()->routeIs('event.result.index')" class="text-lg lg:text-xl">
                    {{ __('messages.results') }}
                </x-nav-link>

                <x-nav-link :href="route('event.upload-url.create',['eventId' => 1])" :active="request()->routeIs('event.upload-url.create')" class="text-lg lg:text-xl">
                    {{ __('messages.results_upload') }}
                </x-nav-link>
                <x-nav-link :href="route('how_it_works.index')" :active="request()->routeIs('how_it_works.index')" class="text-lg lg:text-xl text-gray-500">
                    {{ __('messages.how_it_works') }}
                </x-nav-link>

                <x-nav-link :href="route('about')"  class="text-lg lg:text-xl text-gray-500">
                    {{ __('messages.about') }}
                </x-nav-link>

                <!-- Settings Dropdown -->
                <div class="hidden md:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @auth
                                <button class="inline-flex items-center px-3 pt-[0.2rem] border border-transparent text-base lg:text-lg leading-4 font-medium rounded-md text-blue-600  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                                </button>
                            @else
                            <a class="w-[150px] h-auto inline-block" href="auth/strava"><img class="img-fluid" src="http://localhost:82/strava-login-icon-sm.png" /></a>                          @endif
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profil') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('result.manage')">
                                {{ __('Result manage') }}
                            </x-dropdown-link>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center  rounded-md text-white hover:white hover:bg-gray-800 focus:outline-none focus:bg-gray-800 focus:text-white transition duration-150 ease-in-out bg-gray-800 mr-1">
                    <svg class="h-10 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('index')" :active="request()->routeIs('index')">
                 {{ __('messages.home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('event.result.index',['eventId' => 1])" :active="request()->routeIs('index')">
                 {{ __('messages.results') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('event.upload-url.create',['eventId' => 1])" :active="request()->routeIs('index')">
                {{ __('messages.results_upload') }}
             </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('how_it_works.index')" :active="request()->routeIs('index')">
                 {{ __('messages.how_it_works') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'https://forum.kiptumtime.com'"  target="_blank">
                {{ __('messages.forum') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'https://forum.kiptumtime.com'"  target="_blank">
                {{ __('messages.about') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            <div class="px-4">
                @auth
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>
                @else
                    <a class="border-solid border border-red-600 hover:bg-red-700 hover:text-white text-red-700 py-2 px-4 rounded" href="{{ route('login') }}"> {{ __('Login') }}</a>
                @endif
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profil') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('result.manage')">
                     {{ __('Result manage') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                         {{ __('Logout') }}
                    </x-responsive-nav-link>
                </form>
            </div>

        </div>

    </div>
</nav>
