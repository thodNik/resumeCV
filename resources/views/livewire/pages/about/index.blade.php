@php
    $personal_info = [
        [
            'label' => 'Name',
            'value' => $user?->name
        ],
        [
            'label' => 'Age',
            'value' => \Carbon\Carbon::parse($user?->birthday)->age
        ],
        [
            'label' => 'Residence',
            'value' => $user?->residence
        ],
        [
            'label' => 'Email',
            'value' => $user?->email
        ],
        [
            'label' => 'Phone',
            'value' => $user?->phone
        ],
    ];

    $skills = [
        [
            'icon' => 'si-laravel',
            'css' => "md:animate-custom-bounce-2-5 text-red-500",
        ],
        [
            'css' => "md:animate-custom-bounce-3",
        ],
        [
            'icon' => 'si-react',
            'css' => "md:animate-custom-bounce-5 text-cyan-500",
        ],
        [
            'icon' => 'si-redux',
            'css' => "md:animate-custom-bounce-2 text-purple-500",
        ],
        [
            'icon' => 'si-tailwindcss',
            'css' => "md:animate-custom-bounce-5-5 text-[#37bef7]",
        ],
        [
            'icon' => 'si-mysql',
            'css' => "md:animate-custom-bounce-4 text-sky-600",
        ],
        [
            'icon' => 'si-mongodb',
            'css' => "md:animate-custom-bounce-3-5 text-green-700"
        ]
];
@endphp

<div class="min-h-screen p-4 lg:p-10 bg-page-bg">
    <x-page-heading title="About Me" icon="fas-user"/>
    <div class="flex flex-col lg:flex-row mt-14">
        <article class="lg:basis-2/3">
            <h3 class="mb-6 font-playfair font-bold text-main-text text-2xl">
                Full Stack Developer
            </h3>
            <p class="lg:w-4/5 text-justify font-roboto text-lg text-main-text">
                {{ $about_text }}
            </p>
        </article>
        <article class="lg:basis-1/3">
            <h3 class="mt-6 lg:mt-0 mb-6 font-playfair font-bold text-main-text text-2xl">
                Personal Information
            </h3>
            <ul class="space-y-2 font-roboto text-lg md:w-1/2 lg:w-full text-main-text">
                @foreach($personal_info as $info)
                    @if($loop->index === 4)
                        <li wire:key="{{ $info['label'] }}">
                        <span
                            class="font-playfair font-bold underline decoration-decoration decoration-2">{{ $info['label'] }}</span>
                            : <a href="tel: {{ $info['value'] }}"
                                 class="hover:text-decoration transform ease-in-out duration-300">{{ $info['value'] }}</a>
                        </li>
                    @elseif($loop->index === 3)
                        <li wire:key="{{ $info['label'] }}">
                        <span
                            class="font-playfair font-bold underline decoration-decoration decoration-2">{{ $info['label'] }}</span>
                            : <a href="mailto: {{ $info['value'] }}"
                                 class="hover:text-decoration transform ease-in-out duration-300">{{ $info['value'] }}</a>
                        </li>
                    @else
                        <li wire:key="{{ $info['label'] }}">
                        <span
                            class="font-playfair font-bold underline decoration-decoration decoration-2">{{ $info['label'] }}</span>
                            : {{ $info['value'] }}
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="mt-10">
                <x-download-resume-button/>
            </div>
        </article>
    </div>
    <div class="mt-16 md:mt-44 text-center">
        <x-underlined-heading heading="coding skills"/>
        <div class="flex flex-wrap md:flex-nowrap mt-12 items-center justify-center gap-6">
            @foreach($skills as $skill)
                @if($loop->index === 1)
                    <x-svg-skill-card :css="$skill['css']"/>
                @else
                    <x-skill-card :css="$skill['css']" :icon="$skill['icon']"/>
                @endif
            @endforeach
        </div>
    </div>
</div>
