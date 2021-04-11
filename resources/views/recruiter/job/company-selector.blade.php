<x-layouts.app>
    <x-layouts.page-breadcrumb-section title="Company">
        Select the company to create a post
    </x-layouts.page-breadcrumb-section>

    <div class="container flex">
        @forelse($representations as $representation)
            <div class="flex-1">
                {{ $representation->company->name }}
            </div>
        @empty
            <div class="flex-grow px-4 py-12 text-center">
                <div class="text-xl">
                    You don't have any company to create a job post.<br/>
                    You must be authorized for a company or create a new company to create a job
                </div>
                <a href="{{ route('company.create') }}" class="inline-block mt-12 px-8 py-3 bg-jh-green-400 text-white rounded-lg focus:outline-none">
                    <div class="flex items-center space-x-2">
                        <i class="las la-2x la-plus-circle"></i><span class="text-xl">Create a Company</span>
                    </div>
                </a>

            </div>
        @endforelse
    </div>
</x-layouts.app>
