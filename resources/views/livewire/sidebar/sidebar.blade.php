@php
    $nav_links = [
    [
        'name' => 'Home',
        'href' => route('home'),
        'icon' => 'heroicon-o-home',
    ],
    [
        'name' => 'About',
        'href' => '/about',
        'icon' => 'far-user',
    ],
    [
        'name' => 'Resume',
        'href' => '/resume',
        'icon' => 'heroicon-o-document-text',
    ],
    [
        'name' => 'Education',
        'href' => '/education',
        'icon' => 'heroicon-o-academic-cap',
    ],
];

    $social_links = [
    [
        'href' => 'https://github.com/thodNik',
        'icon' => 'si-github',
    ],
    [
        'href' => 'https://www.linkedin.com/in/nikolaidisthod',
        'icon' => 'fab-linkedin',
    ],
];
@endphp


<nav class="flex flex-1 flex-col">
    <ul role="list" class="flex flex-1 flex-col gap-1 py-3">
        <li>
            <ul role="list" class="text-navbar-text font-playfair">
                @foreach($nav_links as $link)
                    <li class="px-3 border-b border-gray-600">
                        <a
                            href="{{ $link['href'] }}"
                            wire:navigate
                            wire:current="font-bold text-event-text"
                            class="flex items-center gap-3 rounded p-3"
                        >
                            <div class="flex items-center self-center">
                                <x-dynamic-component
                                    :component="$link['icon']"
                                    wire:current="font-bold text-event-text"
                                    class="size-5.5"
                                />
                            </div>
                            <div
                                class="flex w-full flex-1 flex-col items-start justify-center gap-0 overflow-hidden truncate text-sm font-semibold">
                                {{ $link['name'] }}
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li class="mt-auto  text-navbar-text">
            <div class="flex justify-evenly items-center">
                @foreach($social_links as $link)
                    <a href="{{ $link['href'] }}"
                       class="inset-x-2 xl:inset-x-4">
                        <x-dynamic-component
                            :component="$link['icon']"
                            class="size-7 hover:text-event-text transition duration-300 ease-in-out"
                        />
                    </a>
                @endforeach
            </div>
            <div class="mt-5 text-sm text-center font-semibold font-roboto">
                <p>Thodoris Nikolaidis</p>
                <p>© {{\Carbon\Carbon::now()->year}}</p>
            </div>
        </li>
    </ul>
</nav>
