@php
    $educations = [
        [
            'role' => 'The Complete 2023 Web Development Bootcamp',
            'company' => 'Udemy',
            'description' => 'I completed an online course in Web Development through Udemy,
                where I gained comprehensive knowledge and hands-on experience in various technologies,
                including JavaScript, Node.js, HTML, CSS, React, and MongoDB.',
            'from' => '2022',
            'to' => '2023',
        ],
        [
            'role' => 'Bachelor\'s Degree, Chemistry',
            'company' => 'University of Ioannina',
            'description' => 'I hold a Bachelor\'s degree in Chemistry, with a specialization in Food Chemistry.
                My thesis focused on the study of Tetra Pak packaging.',
            'from' => '2004',
            'to' => '2011',
        ],
    ];

    $languages = [
    ['value' => 'Greek'],
    ['value' => 'English'],
];
@endphp


<div class="min-h-screen p-4 lg:py-12 lg:px-4 2xl:py-12 2xl:px-32 bg-page-bg">
    <x-page-heading title="Education" icon="heroicon-o-academic-cap"/>
    <div class="mt-14 text-center">
        <x-underlined-heading heading="Degrees & Cert."/>
    </div>
    <div class="grid xl:grid-cols-2 mt-14 gap-8">
        @foreach($educations as $education)
            <div wire:key="{{ $education['company'] }}" class="p-4 lg:px-24">
                <x-experience-content
                    :role="$education['role']"
                    :company="$education['company']"
                    :description="$education['description']"
                    :from="$education['from']"
                    :to="$education['to']"
                />
            </div>
        @endforeach
    </div>
    <div class="mt-6 sm:mt-14 mb-6 sm:mb-0 text-center">
        <x-underlined-heading heading="languages"/>
        <ul class="flex mt-4 text-main-text text-xl font-semibold justify-center items-center">
            @foreach($languages as $index => $language)
                <li wire:key="{{ $index }}" class="mr-1">
                    {{ $index > 0 ? ', ' : '' }}{{ $language['value'] }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
