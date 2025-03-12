@props(['heading'])

<h3 class="uppercase px-1.5 py-0.5 relative inline-block font-playfair font-bold text-main-text text-2xl border-b-2 border-decoration">
    <span class="before:content-[''] absolute w-0.5 h-2 bottom-0 left-0 bg-decoration"></span>
    {{ $heading }}
    <span class="after:content-[''] absolute w-0.5 h-2 bottom-0 right-0 bg-decoration"></span>
</h3>
