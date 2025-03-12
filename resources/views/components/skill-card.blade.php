@props(['icon', 'css'])

<!-- Component: Card with icon -->

<!-- Icon -->
<figure class="rounded-2xl border-4 text-main-text border-main-text/30 p-4 {{ $css }}">
    <x-dynamic-component
        :component="$icon"
        class="size-12"
    />
</figure>

<!-- End Card with icon -->
