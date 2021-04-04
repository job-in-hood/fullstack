<header class="flex items-center justify-between h-20 px-12 bg-jh-green-400 relative">
    <nav class="hidden md:block">
        <ul class="flex text-white space-x-8">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Blog</a></li>
        </ul>
    </nav>
    <nav class="hidden md:block">
        <ul class="flex text-white space-x-8">
            @auth
                <li>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button class="flex items-center focus:outline-none">
                            <i class="las la-2x la la-user-circle mr-2"></i>
                            <span>{{ auth()->user()->name }}</span>
                        </button>
                    </form>
                </li>
            @endauth
            @guest
                <li><a href="{{ route('register') }}" class="flex items-center">
                        <i class="las la-2x la la-user-circle mr-2"></i>
                        <span>Sign Up</span>
                    </a>
                </li>
                <li><a href="{{ route('login') }}" class="flex items-center">
                        <i class="las la-2x la la-key mr-2"></i>
                        <span>Login</span>
                    </a>
                </li>
            @endguest
        </ul>
    </nav>
    <div class="absolute left-1/2 transform -translate-x-1/2 flex items-center justify-center">
        <a href="{{ route('home') }}">
            <img class="h-8 w-auto" src="{{ asset('images/logo-white.png') }}">
        </a>
    </div>
</header>
