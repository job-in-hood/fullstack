@props([
    'type' => 'text'
])
<div>
    <div class="relative">
        <input type="{{ $type }}"
            {{ $attributes->except(['type'])->merge(['class' => 'outline-none border border-gray-200 rounded-lg focus:ring']) }}
        >
        <div class="absolute right-0 top-0 h-full flex items-center mr-2">
            {{ $icon }}
        </div>
    </div>
    <div class="text-red-600 leading-relaxed mt-2">{{ $slot }}</div>
</div>

