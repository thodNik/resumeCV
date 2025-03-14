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
