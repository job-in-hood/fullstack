<x-layouts.app>
    <div class="flex flex-col">
        <x-layouts.page-breadcrumb-section title="Login">
            Login and apply for jobs
        </x-layouts.page-breadcrumb-section>

        <section class="w-full max-w-sm mx-auto flex-grow">
            <form method="post" action="{{ route('login') }}" class="flex flex-col space-y-6 mb-12">
                @csrf

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-form.text-input name="email" placeholder="Email" class="p-4 h-full w-full"
                                   value="{{ old('email') }}">
                    <x-slot name="icon"><i class="las la-user text-2xl text-gray-500"></i></x-slot>
                    @error('email')
                    {{ $message }}
                    @enderror
                </x-form.text-input>

                <x-form.text-input type="password" name="password" placeholder="Password" class="p-4 h-full w-full"
                                   value="{{ old('password') }}">
                    <x-slot name="icon"><i class="las la-key text-2xl text-gray-500"></i></x-slot>
                    @error('password')
                    {{ $message }}
                    @enderror
                </x-form.text-input>

                <div class="flex justify-between">
                    <x-form.checkbox name="remember" id="remember">Remember</x-form.checkbox>

                    <a href="{{ route('password.request') }}" class="text-sm">Forgot Password?</a>
                </div>

                <x-form.standard-button>Login</x-form.standard-button>
            </form>
        </section>
    </div>
</x-layouts.app>
