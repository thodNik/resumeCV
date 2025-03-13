@php
    $personal_info = [
        [
            'label' => 'Name',
            'value' => 'Thodoris Nikolaidis'
        ],
        [
            'label' => 'Age',
            'value' => '39 years'
        ],
        [
            'label' => 'Residence',
            'value' => 'Athens, Greece'
        ],
        [
            'label' => 'Email',
            'value' => 'thodorisnik@gmail.com'
        ],
        [
            'label' => 'Phone',
            'value' => '(+030) 6945265331'
        ],
    ];

    $about_text = 'I am a Full Stack Developer with strong organizational skills and extensive experience in collaborative team environments. ' .
            'I excel at meeting assigned goals, working effectively under pressure, and I am a quick learner. ' .
            'I am always eager to explore new professional opportunities that will enhance my skills and contribute to my professional growth.';

    $skills = [
        [
            'icon' => 'si-laravel',
            'css' => "animate-custom-bounce-2-5 text-red-500",
        ],
                [
            'icon' => 'si-livewire',
            'css' => "animate-custom-bounce-3 text-pink-600",
        ],
                [
            'icon' => 'si-react',
            'css' => "animate-custom-bounce-5 text-cyan-500",
        ],
        [
            'icon' => 'si-redux',
            'css' => "animate-custom-bounce-2 text-purple-500",
        ],
        [
            'icon' => 'si-tailwindcss',
            'css' => "animate-custom-bounce-5-5 text-[#37bef7]",
        ],
        [
            'icon' => 'si-mysql',
            'css' => "animate-custom-bounce-4 text-sky-600",
        ],
        [
            'icon' => 'si-mongodb',
            'css' => "animate-custom-bounce-3-5 text-green-700"
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
                    <li wire:key="{{ $info['label'] }}">
                        <span
                            class="font-playfair font-bold underline decoration-decoration decoration-2">{{ $info['label'] }}</span>
                        : {{ $info['value'] }}
                    </li>
                @endforeach
            </ul>
            <div class="mt-10">
                <x-download-resume-button/>
            </div>
        </article>
    </div>
    <div class="mt-16 md:mt-44 text-center">
        <x-underlined-heading heading="coding skills"/>
        <div class="flex flex-wrap mt-12 items-center justify-center gap-6">
            @foreach($skills as $skill)
                <x-skill-card :css="$skill['css']" :icon="$skill['icon']"/>
            @endforeach
        </div>
    </div>
</div>
