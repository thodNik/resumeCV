@props(['role', 'company', 'description', 'to', 'from'])

<div class="relative text-main-text pl-8 py-8 pr-4 my-8">
            <span class="absolute w-0.5 h-full top-0 -left-2.5 bg-decoration">
                <span
                    class="absolute before:content-[''] size-2.5 border-2 border-decoration rounded-full -top-2.5 -left-1"></span>
               <span
                   class="absolute after:content-[''] size-2.5 border-2 border-decoration rounded-full -bottom-2.5 -left-1"></span>
            </span>

    <h3 class="uppercase font-playfair text-lg font-bold">{{ $role }}</h3>
    <h4 class="uppercase font-roboto text-decoration text-sm">{{ $company }}</h4>
    <p class="font-roboto mt-4">{{ $description }}</p>

    <span class="absolute h-full top-0 -left-2.5">
                <span class="absolute text-nowrap -top-[17px] left-3 xl:-left-[71px]">{{ $to }}</span>
                    <span class="absolute text-nowrap -bottom-[16px] left-3 xl:-left-[71px]">{{ $from }}</span>
            </span>
</div>
