@props(['icon', 'css'])

<figure class="rounded-2xl border-4 border-main-text/30 p-4 {{ $css }}">
    <x-dynamic-component
        :component="$icon"
        class="size-12"
    />
</figure>

