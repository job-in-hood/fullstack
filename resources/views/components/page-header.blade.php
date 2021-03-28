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
            <li><a href="#" class="flex items-center">
                    <i class="las la-2x la la-user-circle mr-2"></i>
                    <span>Sign Up</span>
                </a>
            </li>
            <li><a href="#" class="flex items-center">
                    <i class="las la-2x la la-key mr-2"></i>
                    <span>Login</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="absolute inset-0 flex items-center justify-center">
        <a href="{{ route('home') }}">
            <img class="h-8 w-auto" src="{{ asset('images/logo-white.png') }}">
        </a>
    </div>
</header>
