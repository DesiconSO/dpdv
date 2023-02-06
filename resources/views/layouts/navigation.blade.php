<nav x-data="{ open: false }" class="fixed z-20 w-full bg-blue-500 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" class="object-contain w-full h-full p-3">
                        <x-application-logo class="block w-auto h-10 text-gray-600 fill-current" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 text-white sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link :href="route('product.index')" :active="request()->routeIs('product*')">
                        {{ __('navigation.products') }}
                    </x-nav-link>

                    <x-nav-link :href="route('proposal.index')" :active="request()->routeIs('proposal*')">
                        {{ __('navigation.proposals') }}
                    </x-nav-link>

                    @role('admin|seller')
                    <x-nav-link :href="route('client.index')" :active="request()->routeIs('client*')">
                        {{ __('navigation.clients') }}
                    </x-nav-link>
                    @endrole

                    @role('admin')
                    <x-nav-link :href="route('billPay.index')" :active="request()->routeIs('billPay*')">
                        {{ __('navigation.billPays') }}
                    </x-nav-link>
                    @endrole

                    <x-nav-link :href="route('discount.index')" :active="request()->routeIs('discount*')">
                        {{ __('navigation.discounts') }}
                    </x-nav-link>

                    @unlessrole('user|guest')
                    <x-nav-link :href="route('feedback.index')" :active="request()->routeIs('feedback*')">
                        {{ __('navigation.feedbacks') }}
                    </x-nav-link>
                    @endunlessrole
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-white transition duration-150 ease-in-out hover:text-orange-400 focus:outline-none focus:text-orange-400 ">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="block px-4 py-2 font-semibold leading-5 text-gray-700 text-md">
                                {{ ucfirst(auth()->user()->getRoleNames()->first()) }}
                            </div>
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-white focus:text-white focus:outline-none ">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
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
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('product.index')" :active="request()->routeIs('product*')">
                {{ __('navigation.products') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('proposal.index')" :active="request()->routeIs('proposal*')">
                {{ __('navigation.proposals') }}
            </x-responsive-nav-link>

            @role('admin|seller')
            <x-responsive-nav-link :href="route('client.index')" :active="request()->routeIs('client*')">
                {{ __('navigation.clients') }}
            </x-responsive-nav-link>
            @endrole

            @role('admin')
            <x-responsive-nav-link :href="route('billPay.index')" :active="request()->routeIs('billPay*')">
                {{ __('navigation.billPays') }}
            </x-responsive-nav-link>
            @endrole

            <x-responsive-nav-link :href="route('discount.index')" :active="request()->routeIs('discount*')">
                {{ __('navigation.discounts') }}
            </x-responsive-nav-link>

            @role('user|guest')
            <x-responsive-nav-link :href="route('feedback.index')" :active="request()->routeIs('feedback*')">
                {{ __('navigation.feedbacks') }}
            </x-responsive-nav-link>
            @endrole
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-gray-300">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link>
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>