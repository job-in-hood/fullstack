<x-layouts.app>
    <div class="flex-grow bg-gray-100">
        @if(session()->has('success'))
            <div class="container mt-4">
                <x-alert-success>
                    {{ session('success') }}
                </x-alert-success>
            </div>
        @endif
        <div class="container py-4 grid grid-cols-1 md:grid-cols-12 md:gap-4">
            <div class="px-4 py-4 shadow-md border rounded-md bg-white md:col-span-3 lg:col-span-2">
                <x-form.section-title>{{ auth()->user()->name }}</x-form.section-title>
                <hr class="my-2"/>
                <p class="text-sm mb-4">The Lord of the Rings</p>
                <div class="text-center">
                    <div class="inline-block h-24 w-24 rounded-full overflow-hidden bg-gray-100">
                        <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="relative pt-1">
                    <div class="flex mb-2 items-center justify-between">
                        <div>
                            <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full">
                              Profile Progress
                            </span>
                        </div>
                        <div class="text-right">
                            <span class="text-xs font-semibold inline-block">
                              30%
                            </span>
                        </div>
                    </div>
                    <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-blue-200">
                        <div style="width:30%"
                             class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                    </div>

                    <x-form.small-button-link :to="route('profile.edit')" class="block">Edit Profile
                    </x-form.small-button-link>
                </div>

            </div>

            <div class="md:col-span-6 lg:col-span-8 px-4 py-4 shadow-md border rounded-md bg-white ">

            </div>

            <div class="px-4 py-4 shadow-md border rounded-md bg-white md:col-span-3 lg:col-span-2">
                <h1 class="text-xl">CVs</h1>
                <hr class="">
                <span class="inline-block align-middle mr-8">
        You can add multiple CVs depending on your application and you can choose the right CV for the right application.
      </span>
                <button type="button"
                        class="ml-5 mt-4 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 w-3/4">
                    Upload CV
                </button>
                <button type="button"
                        class="ml-5 mt-4 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 w-3/4">
                    Upload Cover L.
                </button>
            </div>
        </div>
    </div>
</x-layouts.app>
