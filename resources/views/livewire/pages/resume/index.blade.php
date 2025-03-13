@php

    $experiences = [
    [
        'role' => 'Full Stack Developer',
        'company' => 'Nifty, Thessaloniki, Greece',
        'description' => 'At Nifty, I am responsible for both frontend and backend development across all applications.
            My duties include implementing new features, maintaining existing ones, and ensuring the overall functionality of the software.
            Additionally, I manage client communications, product presentations, and troubleshooting.
            Technologies utilized in this role include Laravel, Livewire, MySQL, React, and Redux.',
        'from' => '12/2023',
        'to' => 'Present',
    ],
    [
        'role' => 'Backend Developer',
        'company' => 'Progress Net, Athens, Greece',
        'description' => 'At Progress Net, my primary responsibilities included developing backend functionality for new web and mobile applications,
            as well as maintaining existing systems. The technologies I worked with included Laravel, Node.js, MySQL, and MongoDB.',
        'from' => '07/2023',
        'to' => '12/2023',
    ],
    [
        'role' => 'Full Stack Developer',
        'company' => 'Lyra WMS, Groningen, Netherlands',
        'description' => 'During my internship at Lyra WMS, I was tasked with maintaining the company\'s main product,
            a logistics application that connects companies with third-party warehouses.
            My role also involved adding new features to the application.
            The technologies I used were Laravel, Vue.js, and MySQL.',
        'from' => '02/2023',
        'to' => '07/2023',
    ],
    [
        'role' => 'Full Stack Developer',
        'company' => 'Freelance, Athens, Greece',
        'description' => 'I began my career as a Full Stack Developer, utilizing tools such as HTML5, CSS3, JavaScript, Node.js, React.js, and MongoDB.
            My first project involved designing the web page for Pantelis Nikolaidis Pharmacy, a MERN stack application.',
        'from' => '02/2022',
        'to' => '07/2023',
    ],
    [
        'role' => 'Quality Assurance Supervisor',
        'company' => 'Medical Diagnosis Group, Athens, Greece',
        'description' => 'At Medical Diagnosis Group, a healthcare company, my primary responsibilities included ensuring compliance with EN ISO 9001:2008 and EN ISO 15189:2012 standards.
            I managed all laboratory equipment records, handled calibration confirmations, prepared damage reports, and oversaw staff training.',
        'from' => '02/2013',
        'to' => '07/2023',
    ],
];
@endphp


<div class="min-h-screen p-4 lg:py-12 lg:px-4 2xl:py-12 2xl:px-32 bg-page-bg">
    <x-page-heading title="Resume" icon="heroicon-o-document-text"/>
    <div class="mt-14 text-center">
        <x-underlined-heading heading="experience"/>
    </div>
    <div class="grid xl:grid-cols-2 mt-6 xl:mt-14 gap-8">
        @foreach($experiences as $experience)
            <div wire:key="{{ $experience['company'] }}" class="p-4 lg:px-24">
                <x-experience-content
                    :role="$experience['role']"
                    :company="$experience['company']"
                    :description="$experience['description']"
                    :from="$experience['from']"
                    :to="$experience['to']"
                />
            </div>
        @endforeach
    </div>
</div>
