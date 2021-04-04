<header class="flex items-center justify-between h-20 px-8 bg-jh-green-400 relative">
    <nav class="hidden md:block">
        <ul class="flex text-white space-x-8">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </nav>
    <nav class="hidden md:block">
        <div class="flex text-white space-x-2 items-center">
            @auth
                <div class="relative" x-data="{isOpen: false}">
                    <x-navbar.navbar-button @click="isOpen = !isOpen" @keydown.escape="isOpen = false">
                        <i class="las la-2x la la-user-circle mr-2"></i>
                        <span>{{ auth()->user()->name }}</span>
                    </x-navbar.navbar-button>

                    <div
                        x-show="isOpen"
                        x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-end="opacity-0 transform -translate-y-3"
                        class="absolute right-0 mt-2 pt-2 flex flex-col divide-y text-lg bg-white text-gray-600 border border-gray-300 rounded-md shadow"
                        @click.away="isOpen = false">
                        <div class="text-center flex flex-col py-4 px-12">
                            <p class="text-xl text-jh-green-400 font-semibold">{{ auth()->user()->name }}</p>
                            <p class="text-lg text-gray-400">{{ auth()->user()->email }}</p>
                        </div>
                        <a class="px-4 py-2 hover:bg-gray-100" href="{{ route('dashboard') }}">
                            <i class="las la-tasks mr-2"></i> Dashboard
                        </a>
                        <a class="px-4 py-2 hover:bg-gray-100" href="#">
                            <i class="las la-user mr-2"></i> Edit Profile
                        </a>
                        <form class="inline" method="post" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full px-4 py-2 text-left hover:bg-gray-100 focus:outline-none"><i
                                    class="las la-sign-out-alt mr-2"></i> Sign Out
                            </button>
                        </form>
                    </div>
                </div>
            @endauth
            @guest
                <x-navbar.navbar-link :to="route('register')">
                    <i class="las la-2x la la-user-circle mr-2"></i>
                    <span>Sign Up</span>
                </x-navbar.navbar-link>
                <x-navbar.navbar-link :to="route('login')">
                    <i class="las la-2x la la-key mr-2"></i>
                    <span>Login</span>
                </x-navbar.navbar-link>
            @endguest
        </div>
    </nav>
    <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center justify-center">
        <a href="{{ route('home') }}">
            <img class="h-8 w-auto" src="{{ asset('images/logo-white.png') }}">
        </a>
    </div>
</header>
