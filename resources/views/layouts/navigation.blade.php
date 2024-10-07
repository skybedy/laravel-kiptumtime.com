<nav x-data="{ open: false }" class="border-b-[10px] sm:border-b-[16px] xl:border-b-[18px] 2xl:border-b-[20px] border-white bg-gradient-to-b from-gray-800 to-gray-900">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto">



        <div class="flex justify-between items-center py-3 px-2 md:px-5">


            <!-- Logo -->
            <div class="w-[21rem] sm:w-[22rem] lg:w-[24rem] space-x-2 flex items-center">

                <a href="{{ route('index') }}">
                    <img class="w-full h-auto" src="/images/logo.png" />
                </a>

                <div class="text-4xl text-white font-black">
                    <a href="{{ route('index') }}">kiptumtime.run</a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden lg:flex space-x-2 xl:space-x-8 2xl:space-x-10 items-center">

                @if(!$registered_for_race)
                <x-nav-link :href="route('registration.signin')" :active="request()->routeIs('registration.signin')" >
                    {{ __('messages.sign_in') }}
                </x-nav-link>

                @endif



                <x-nav-link :href="route('event.result.index',['eventId' => 1])" :active="request()->routeIs('event.result.index')">
                    {{ __('messages.results') }}
                </x-nav-link>

                <x-nav-link :href="route('event.upload-url.create',['eventId' => 1])" :active="request()->routeIs('event.upload-url.create')" >
                    {{ __('messages.results_upload') }}
                </x-nav-link>
                <x-nav-link :href="route('how_it_works.index')" :active="request()->routeIs('how_it_works.index')">
                    {{ __('messages.how_it_works') }}
                </x-nav-link>

                <x-nav-link :href="route('about')">
                    {{ __('messages.about') }}
                </x-nav-link>

                <!-- Settings Dropdown -->
                <div class="hidden md:block">

                    <x-dropdown>

                        <x-slot name="trigger">
                            @auth
                                <button class="inline-flex items-center px-3 pt-[0.4rem] xl:pt-[0.2rem] border border-transparent text-lg xl:text-xl 2xl:text-2xl  leading-4 font-black rounded-md text-orange-500  hover:text-orange-300 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->firstname }}</div>
                                </button>
                            @else
                                <a class="bg-gradient-to-b from-orange-500 to-orange-600 hover:bg-gradient-to-b hover:from-orange-600 hover:to-orange-700 p-3 rounded text-lg text-white font-black" href="{{ route('login') }}">Login/Register</a>
                            @endif
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
            <div class="flex items-center lg:hidden mr-3">
                <button @click="open = ! open" class="inline-flex items-center justify-center  rounded-md text-black hover:text-[#bc0000ff] focus:outline-none focus:text-[#bc0000ff] transition duration-150 ease-in-out bg-white">
                    <svg class="w-12 h-12" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>


    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('index')" :active="request()->routeIs('index')">
                 {{ __('messages.sign_in') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('event.result.index',['eventId' => 1])" :active="request()->routeIs('event.result.index')">
                 {{ __('messages.results') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('event.upload-url.create',['eventId' => 1])" :active="request()->routeIs('event.upload-url.create')">
                {{ __('messages.results_upload') }}
             </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('how_it_works.index')" :active="request()->routeIs('how_it_works.index')">
                 {{ __('messages.how_it_works') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                {{ __('messages.about') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="py-2 border-t border-gray-200">

            <div class="px-3">
                @auth
                    <div class="font-medium text-lg text-orange-500">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                            {{ __('Profil') }}
                        </x-responsive-nav-link>
                        <x-responsive-nav-link :href="route('result.manage')" :active="request()->routeIs('result.manage')">
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



                @else
                    <a class="inline-block bg-gradient-to-b from-orange-500 to-orange-600 hover:bg-gradient-to-b hover:from-orange-600 hover:to-orange-700 p-3 rounded text-lg text-white font-black" href="{{ route('login') }}">Login/Register</a>

                @endif
            </div>



        </div>

    </div>
</nav>
