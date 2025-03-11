<x-main-layout>
    <div class="relative min-h-screen md:flex">
        <div class="absolute w-full top-1/3 z-20 text-gray-200 text-center space-y-4">
            <h1 class="font-playfair text-4xl xl:text-6xl uppercase">
                Thodoris <span class="text-orange-400 font-extrabold">Nikolaidis</span>
            </h1>
            <p class="font-roboto text-gray-200 text-lg xl:text-3xl">I am a Full Stack Developer</p>
        </div>
        <div
            class="absolute top-0 right-0 left-0 bottom-0 z-10 bg-cover bg-center bg-home-bg opacity-30">
        </div>
        <div
            class="absolute top-0 right-0 left-0 bottom-0 z-0 bg-cover bg-center"
            style="background-image: url('{{ asset('images/home_asset.jpg') }}')"
        >
        </div>
    </div>
</x-main-layout>
