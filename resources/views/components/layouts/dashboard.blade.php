@props([
    'leftPanel'
])
<x-layouts.app>
    <div class="flex-grow bg-gray-100">
        @if(session()->has('success'))
            <div class="container mt-4">
                <x-alert-success>
                    {{ session('success') }}
                </x-alert-success>
            </div>
        @endif
        <div class="container py-4 grid grid-cols-12 gap-4 xl:grid-flow-col">
            <div
                class="px-4 py-4 shadow-md border rounded-md bg-white col-span-full sm:col-span-6 md:col-span-8 lg:col-span-9 xl:col-span-3">
                {{ $leftPanel  }}
            </div>

            <div
                class="px-4 py-4 shadow-md border rounded-md bg-white col-span-full sm:col-span-6 md:col-span-4 lg:col-span-3 xl:col-span-3 xl:col-start-10">
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

            <div class="px-4 py-4 shadow-md border rounded-md bg-white col-span-full xl:col-span-6 xl:col-start-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</x-layouts.app>
