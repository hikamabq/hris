<nav x-data="{ open: false }" class="bg-indigo-600 border-b-1 border-indigo-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-arcs"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M16.924 11.132a5 5 0 1 0 -4.056 5.792" /><path d="M3 12a9 9 0 1 0 9 -9" /></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        <div class="text-white">{{ __('Dashboard') }}</div>
                    </x-nav-link>
                    <x-nav-link>
                        <div class="text-white">{{ __('Absensi') }}</div>
                    </x-nav-link>
                    <x-nav-link>
                        <div class="text-white">{{ __('Pegawai') }}</div>
                    </x-nav-link>
                    <x-nav-link :href="route('divisi.index')" :active="request()->routeIs('divisi.index')">
                        <div class="text-white">{{ __('Divisi') }}</div>
                    </x-nav-link>
                    <x-nav-link :href="route('jabatan.index')" :active="request()->routeIs('jabatan.index')">
                        <div class="text-white">{{ __('Jabatan') }}</div>
                    </x-nav-link>
                    <x-nav-link>
                        <div class="text-white">{{ __('Jadwal Shift') }}</div>
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-500 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
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
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <div class="text-white">{{ __('Dashboard') }}</div>
            </x-responsive-nav-link>
            <x-responsive-nav-link>
                <div class="text-white">{{ __('Absensi') }}</div>
            </x-responsive-nav-link>
            <x-responsive-nav-link>
                <div class="text-white">{{ __('Pegawai') }}</div>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('divisi.index')" :active="request()->routeIs('divisi.index')">
                <div class="text-white">{{ __('Divisi') }}</div>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('jabatan.index')" :active="request()->routeIs('jabatan.index')">
                <div class="text-white">{{ __('Jabatan') }}</div>
            </x-responsive-nav-link>
            <x-responsive-nav-link>
                <div class="text-white">{{ __('Jadwal Shift') }}</div>
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-white">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    <div class="text-white">{{ __('Profile') }}</div>
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <div class="text-white">{{ __('Log Out') }}</div>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
