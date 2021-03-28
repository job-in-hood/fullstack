<x-layouts.app>
    <div class="flex flex-col">
        <x-layouts.page-breadcrumb-section></x-layouts.page-breadcrumb-section>
        <section class="w-full max-w-sm mx-auto flex-grow">
            <form method="post" action="{{ route('login') }}" class="flex flex-col space-y-8">
                @csrf

                <div class="relative">
                    <input type="text" name="email" placeholder="Email"
                           class="p-4 h-full w-full outline-none border border-gray-200 rounded-lg focus:ring">
                    <div class="absolute right-0 top-0 h-full flex items-center mr-2">
                        <i class="las la-user text-2xl text-gray-500"></i>
                    </div>
                </div>

                <div class="relative">
                    <input type="password" name="password" placeholder="Password"
                           class="p-4 h-full w-full outline-none border border-gray-200 rounded-lg focus:ring">
                    <div class="absolute right-0 top-0 h-full flex items-center mr-2">
                        <i class="las la-key text-2xl text-gray-500"></i>
                    </div>
                </div>

                <button class="bg-jh-green-400 text-white py-4 rounded-lg font-semibold">Login</button>
            </form>
        </section>
    </div>
</x-layouts.app>
