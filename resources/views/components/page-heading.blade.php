@props(['title', 'icon'])

<div class="flex justify-between items-center pb-4 border-dashed border-b border-gray-500">
    <h1 class="font-playfair font-bold text-decoration text-4xl">
        {{ $title }}
    </h1>
    <div class="hidden lg:block">
        <x-dynamic-component
            :component="$icon"
            class="size-9 text-decoration"
        />
    </div>
</div>
