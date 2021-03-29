@props([
    'title' => ''
])

<div class="bg-gray-100 py-12">
    <div class="container md:flex md:justify-between items-center">
        <div>
            <p class="text-4xl font-semibold">{{ $title }}</p>
            <p class="text-base mt-4">{{ $slot }}</p>
        </div>
    </div>
</div>
