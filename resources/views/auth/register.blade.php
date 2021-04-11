<x-layouts.app class="flex flex-col">
    <x-layouts.page-breadcrumb-section title="Register">
        Register and apply for jobs
    </x-layouts.page-breadcrumb-section>

    <section class="w-full max-w-sm mx-auto flex-grow">
        <form method="post" action="{{ route('register') }}" class="flex flex-col space-y-6 mb-12">
            @csrf

            <x-form.text-input name="name" placeholder="Name" class="p-4 h-full w-full"
                               value="{{ old('name') }}">
                <x-slot name="icon"><i class="las la-user text-2xl text-gray-500"></i></x-slot>
                @error('name')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.text-input name="email" placeholder="Email" class="p-4 h-full w-full"
                               value="{{ old('email') }}">
                <x-slot name="icon"><i class="las la-envelope text-2xl text-gray-500"></i></x-slot>
                @error('email')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.text-input type="password" name="password" placeholder="Password" class="p-4 h-full w-full">
                <x-slot name="icon"><i class="las la-key text-2xl text-gray-500"></i></x-slot>
                @error('password')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.text-input type="password" name="password_confirmation" placeholder="Password Again"
                               class="p-4 h-full w-full">
                <x-slot name="icon"><i class="las la-key text-2xl text-gray-500"></i></x-slot>
                @error('password_confirmation')
                {{ $message }}
                @enderror
            </x-form.text-input>

            <x-form.standard-button>Register Now</x-form.standard-button>
        </form>
    </section>
</x-layouts.app>
