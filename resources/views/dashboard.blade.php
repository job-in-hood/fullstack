<x-layouts.app>
    <x-layouts.page-breadcrumb-section title="Dashboard">
        {{ auth()->user()->name }}
    </x-layouts.page-breadcrumb-section>
    <div class="container py-4">
        @if(session()->has('success'))
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
        @endif
    </div>
</x-layouts.app>
